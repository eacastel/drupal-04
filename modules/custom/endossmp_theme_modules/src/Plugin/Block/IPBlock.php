<?php

namespace Drupal\endossmp_theme_modules\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a custom IP block.
 *
 * @Block(
 *   id = "ip_block",
 *   admin_label = @Translation("IP Block"),
 *   category = @Translation("Custom Blocks")
 * )
 */
class IPBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $ip = $this->configuration['ip'] ?? '';
    
    return [
      '#markup' => '<div class="ip-block">' . $ip . '<button class="copy-ip-button">Copy IP</button></div>',
      '#attached' => [
        'library' => [
          'endossmp_theme/ipblock',
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $ip = $this->configuration['ip'] ?? '';

    $form['ip'] = [
      '#type' => 'textfield',
      '#title' => $this->t('IP Address'),
      '#default_value' => $ip,
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $this->configuration['ip'] = $form_state->getValue('ip');
  }

}
