<?php

namespace Drupal\blazy\Form;

use Drupal\Core\Url;
use Drupal\Component\Utility\Unicode;
use Drupal\blazy\Blazy;

/**
 * A base for field formatter admin to have re-usable methods in one place.
 */
abstract class BlazyAdminFormatterBase extends BlazyAdminBase {

  /**
   * Defines re-usable basic form elements.
   */
  public function basicImageForm(array &$form, array $definition): void {
    $this->imageStyleForm($form, $definition);

    if (!empty($definition['media_switch_form']) && !isset($form['media_switch'])) {
      $this->mediaSwitchForm($form, $definition);
    }

    if (isset($definition['images'])) {
      $form['image'] = $this->baseForm($definition)['image'];
      $form['image']['#prefix'] = '';
    }

    if (isset($form['responsive_image_style'])) {
      $form['responsive_image_style']['#description'] = $this->t('Be sure to enable <strong>Responsive image</strong> option via Blazy UI. Leave empty to disable.');

      if ($this->blazyManager()->moduleHandler()->moduleExists('blazy_ui')) {
        $form['responsive_image_style']['#description'] .= ' ' . $this->t('<a href=":url" target="_blank">Enable lazyloading Responsive image</a>.', [':url' => Url::fromRoute('blazy.settings')->toString()]);
      }
    }
  }

  /**
   * Returns re-usable image formatter form elements.
   */
  public function imageStyleForm(array &$form, array $definition): void {
    $is_responsive = function_exists('responsive_image_get_image_dimensions');
    $field_type = $definition['field_type'] ?? '';
    $plugin_id = $definition['plugin_id'] ?? '';

    if (empty($definition['no_image_style'])
      && strpos($plugin_id, '_text') === FALSE) {
      $base = $this->baseForm($definition);

      // Excludes VEF which has no File API to work with.
      $disabled = ($field_type && $field_type == 'video_embed_field')
        || $plugin_id == 'blazy_vef_default';

      if (!$disabled) {
        $form['preload'] = $base['preload'];
      }

      foreach (['image_style', 'loading'] as $key) {
        $form[$key] = $base[$key];
      }
    }

    if (!empty($definition['thumbnail_style'])) {
      $form['thumbnail_style'] = $this->baseForm($definition)['thumbnail_style'];
    }

    if ($is_responsive && !empty($definition['responsive_image'])) {
      $url = Url::fromRoute('entity.responsive_image_style.collection')->toString();
      $form['responsive_image_style'] = [
        '#type'        => 'select',
        '#title'       => $this->t('Responsive image'),
        '#options'     => $this->getResponsiveImageOptions(),
        '#description' => $this->t('Responsive image style for the main stage image is more reasonable for large images. Works with multi-serving IMG, or PICTURE element. Leave empty to disable. <a href=":url" target="_blank">Manage responsive image styles</a>.', [':url' => $url]),
        '#access'      => $this->getResponsiveImageOptions(),
        '#weight'      => -100,
      ];
    }

    if (!empty($definition['thumbnail_effect'])) {
      $form['thumbnail_effect'] = [
        '#type'    => 'select',
        '#title'   => $this->t('Thumbnail effect'),
        '#options' => $definition['thumbnail_effect'],
        '#weight'  => -100,
      ];
    }
  }

  /**
   * Return the field formatter settings summary.
   */
  public function getSettingsSummary(array $definition): array {
    if (empty($definition['settings'])) {
      return [];
    }

    $this->getExcludedSettingsSummary($definition);

    $enforced = [
      'optionset',
      'cache',
      'skin',
      'view_mode',
      'override',
      'overridables',
      'style',
      'vanilla',
    ];

    $summary  = [];
    $enforced = $definition['enforced'] ?? $enforced;
    $settings = array_filter($definition['settings']);

    foreach ($definition['settings'] as $key => $setting) {
      $title   = Unicode::ucfirst(str_replace('_', ' ', $key));
      $vanilla = !empty($settings['vanilla']);

      // @todo remove deprecated breakpoints anytime before 3.x.
      if ($key == 'breakpoints') {
        continue;
      }

      if ($vanilla && !in_array($key, $enforced)) {
        continue;
      }

      if ($key == 'override' && empty($setting)) {
        unset($settings['overridables']);
      }

      if (is_bool($setting) && $setting) {
        $setting = 'yes';
      }
      elseif (is_array($setting)) {
        $setting = array_filter($setting);
        if (!empty($setting)) {
          $setting = implode(', ', $setting);
        }
      }

      if ($key == 'cache') {
        $setting = $this->getCacheOptions()[$setting];
      }

      if (empty($setting)) {
        continue;
      }

      if (isset($settings[$key]) && is_string($setting)) {
        $summary[] = $this->t('@title: <strong>@setting</strong>', [
          '@title'   => $title,
          '@setting' => $setting,
        ]);
      }
    }
    return $summary;
  }

  /**
   * Returns available fields for select options.
   */
  public function getFieldOptions(
    array $target_bundles = [],
    array $allowed_field_types = [],
    $entity_type = 'media',
    $target_type = ''
  ): array {
    $options = [];

    // Fix for Views UI not recognizing Media bundles, unlike Formatters.
    if (empty($target_bundles)) {
      $bundle_service = Blazy::service('entity_type.bundle.info');
      $target_bundles = $bundle_service->getBundleInfo($entity_type);
    }

    // Declutters options from less relevant options.
    $excludes = $this->getExcludedFieldOptions();

    foreach ($target_bundles as $bundle => $label) {
      if ($fields = $this->blazyManager()->loadByProperties([
        'entity_type' => $entity_type,
        'bundle' => $bundle,
      ], 'field_config', FALSE)) {
        foreach ((array) $fields as $field) {
          if (in_array($field->getName(), $excludes)) {
            continue;
          }
          if (empty($allowed_field_types)) {
            $options[$field->getName()] = $field->getLabel();
          }
          elseif (in_array($field->getType(), $allowed_field_types)) {
            $options[$field->getName()] = $field->getLabel();
          }

          if (!empty($target_type)
            && ($field->getSetting('target_type') == $target_type)) {
            $options[$field->getName()] = $field->getLabel();
          }
        }
      }
    }

    return $options;
  }

  /**
   * Declutters options from less relevant options, specific to captions.
   */
  protected function getExcludedFieldOptions(): array {
    // @todo figure out a more efficient way than blacklisting.
    // Do not exclude field_media_image  as needed for Main stage.
    $fields = 'document_size media_file id media_in_library mime_type source tweet_author tweet_id tweet_url media_video_embed_field instagram_shortcode instagram_url media_soundcloud media_oembed_video media_audio_file media_video_file media_facebook media_flickr file_url external_thumbnail local_thumbnail local_thumbnail_uri media_unsplash';
    $fields = explode(' ', $fields);

    $excludes = [];
    foreach ($fields as $exclude) {
      $excludes['field_' . $exclude] = 'field_' . $exclude;
    }

    $this->blazyManager->moduleHandler()->alter('blazy_excluded_field_options', $excludes);
    return $excludes;
  }

  /**
   * Exclude the field formatter settings summary as required.
   */
  protected function getExcludedSettingsSummary(array &$definition): void {
    $settings     = &$definition['settings'];
    $excludes     = empty($definition['excludes']) ? [] : $definition['excludes'];
    $plugin_id    = $definition['plugin_id'] ?? '';
    $blazy        = $plugin_id && strpos($plugin_id, 'blazy') !== FALSE;
    $image_styles = $this->getEntityAsOptions('image_style');
    $lightboxes   = $this->blazyManager->getLightboxes();

    if ($blazy) {
      $excludes['optionset'] = TRUE;
    }

    if (empty($settings['grid'])) {
      foreach (['grid', 'grid_medium', 'grid_small', 'visible_items'] as $key) {
        $excludes[$key] = TRUE;
      }
    }

    if ($lightboxes && !empty($settings['media_switch']) && !in_array($settings['media_switch'], $lightboxes)) {
      foreach (['box_style', 'box_media_style', 'box_caption'] as $key) {
        $excludes[$key] = TRUE;
      }
    }

    if (empty($settings['media_switch'])) {
      foreach (['box_style', 'box_media_style', 'box_caption'] as $key) {
        $excludes[$key] = TRUE;
      }
    }

    // Remove exluded settings.
    foreach ($excludes as $key => $value) {
      if (isset($settings[$key])) {
        unset($settings[$key]);
      }
    }

    foreach ($settings as $key => $setting) {
      if ($key == 'style' || $key == 'responsive_image_style' || empty($settings[$key])) {
        continue;
      }
      if (strpos($key, 'style') !== FALSE && isset($image_styles[$settings[$key]])) {
        $settings[$key] = $image_styles[$settings[$key]];
      }
    }
  }

}
