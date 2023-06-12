(function ($, Drupal, drupalSettings) {
    var isEventAttached = false;
  
    Drupal.behaviors.addToCart = {
      attach: function (context, settings) {
        if (!isEventAttached) {
          var addToCartButton = $('.button--add-to-cart');
  
          addToCartButton.on('click', function (e) {
            e.preventDefault();
  
            var productId = 2;  // Set your product ID here.
            var variationId = $('#edit-purchased-entity-0-variation').val();
  
            var url = '/cart/add/' + productId + '/' + variationId + '?_wrapper_format=drupal_ajax';
  
            $.get(url, function (response) {
              if (response[0].command === 'commerceEmbedCheckoutForm') {
                window.location.href = '/cart';
              }
            });
          });
  
          isEventAttached = true;
        }
      }
    };
  })(jQuery, Drupal, drupalSettings);
  