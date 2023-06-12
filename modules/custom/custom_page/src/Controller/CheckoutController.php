<?php

namespace Drupal\custom_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class CheckoutController extends ControllerBase {

  public function content() {
    $product_id = 2;

    $webform = \Drupal\webform\Entity\Webform::load('endos_smp_signup_form');
    $webform = \Drupal::entityTypeManager()
      ->getViewBuilder('webform')
      ->view($webform);

    $product = \Drupal\commerce_product\Entity\Product::load($product_id);
    $product_display = \Drupal::entityTypeManager()
      ->getViewBuilder('commerce_product')
      ->view($product);

    $build = [
      'webform' => $webform,
      'product' => $product_display,
    ];

    // Attach the library and set the drupalSettings.
    $build['#attached']['library'][] = 'custom_page/form_submit';
    $build['#attached']['drupalSettings']['customPage']['productId'] = $product_id;

    return $build;
  }
}
