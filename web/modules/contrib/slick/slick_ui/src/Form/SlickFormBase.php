<?php

namespace Drupal\slick_ui\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\blazy\Traits\EasingTrait;

/**
 * Provides base form for a slick instance configuration form.
 */
abstract class SlickFormBase extends EntityForm {

  use EasingTrait;

  /**
   * Defines the nice anme.
   *
   * @var string
   */
  protected static $niceName = 'Slick';

  /**
   * Defines machine name.
   *
   * @var string
   */
  protected static $machineName = 'slick';

  /**
   * The slick admin service.
   *
   * @var \Drupal\slick\Form\SlickAdminInterface
   */
  protected $admin;

  /**
   * The slick manager service.
   *
   * @var \Drupal\slick\SlickManagerInterface
   */
  protected $manager;

  /**
   * The form elements.
   *
   * @var array
   */
  protected $formElements;

  /**
   * The JS easing options.
   *
   * @var array
   */
  protected $jsEasingOptions;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    $instance->admin = $container->get('slick.admin');
    $instance->manager = $container->get('slick.manager');
    return $instance;
  }

  /**
   * Returns the slick admin service.
   */
  public function admin() {
    return $this->admin;
  }

  /**
   * Returns the slick manager service.
   */
  public function manager() {
    return $this->manager;
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $admin_css = $this->manager->configLoad('admin_css', 'blazy.settings');

    $form['#attributes']['class'][] = 'form--blazy form--slick form--optionset has-tooltip';

    // Change page title for the duplicate operation.
    if ($this->operation == 'duplicate') {
      $form['#title'] = $this->t('<em>Duplicate %name optionset</em>: @label', [
        '%name' => self::$niceName,
        '@label' => $this->entity->label(),
      ]);
      $this->entity = $this->entity->createDuplicate();
    }

    // Change page title for the edit operation.
    if ($this->operation == 'edit') {
      $form['#title'] = $this->t('<em>Edit %name optionset</em>: @label', [
        '%name' => self::$niceName,
        '@label' => $this->entity->label(),
      ]);
    }

    // Attach Slick admin library.
    if ($admin_css) {
      $form['#attached']['library'][] = 'slick_ui/slick.admin.vtabs';
    }

    return parent::form($form, $form_state);
  }

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::save().
   *
   * @todo revert #1497268, or use config_update instead.
   */
  public function save(array $form, FormStateInterface $form_state) {
    $optionset = $this->entity;

    // Prevent leading and trailing spaces in slick names.
    $optionset->set('label', trim($optionset->label()));
    $optionset->set('id', $optionset->id());

    $status        = $optionset->save();
    $label         = $optionset->label();
    $edit_link     = $optionset->toLink($this->t('Edit'), 'edit-form')->toString();
    $config_prefix = $optionset->getEntityType()->getConfigPrefix();
    $message       = ['@config_prefix' => $config_prefix, '%label' => $label];

    $notice = [
      '@config_prefix' => $config_prefix,
      '%label' => $label,
      'link' => $edit_link,
    ];

    if ($status == SAVED_UPDATED) {
      // If we edited an existing entity.
      // @todo #2278383.
      $this->messenger()->addMessage($this->t('@config_prefix %label has been updated.', $message));
      $this->logger(self::$machineName)->notice('@config_prefix %label has been updated.', $notice);
    }
    else {
      // If we created a new entity.
      $this->messenger()->addMessage($this->t('@config_prefix %label has been added.', $message));
      $this->logger(self::$machineName)->notice('@config_prefix %label has been added.', $notice);
    }

    $form_state->setRedirectUrl($this->entity->toUrl('collection'));
  }

}
