<?php

namespace Drupal\custom_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class CheckoutController extends ControllerBase {

  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, world!'),
    ];
  }
  
}
