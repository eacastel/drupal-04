(function ($, Drupal, drupalSettings) {
    Drupal.behaviors.customPage = {
      attach: function (context, settings) {
        var webform = $('.webform-submission-endos-smp-signup-form-form', context);
        var webformButton = webform.find('.webform-button--submit');
        var addToCartButton = $('.button--add-to-cart');
  
        // Hide the Add to Cart button
        addToCartButton.hide();
  
        webformButton.on('click', function (e) {
          e.preventDefault();
        
          // Validate the form
          if (!webform[0].checkValidity()) {
            $('<input type="submit">').hide().appendTo(webform).click().remove();
            return;
          }
        
          var formData = webform.serialize();
        
          // Submit the form
          $.ajax({
            type: 'POST',
            url: '/form/endos-smp-signup-form',  
            data: formData,
            success: function (data, status) {
              if (status === 'success') {
                var productId = drupalSettings.customPage.productId;
                var quantity = 1;
                // Adjust the URL to use product variation ID and default order type
                var url = '/cart/add/' + productId + '/default?quantity=' + quantity;
        
                $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: 'json',
                  success: function (response) {
                    if (response) {
                      window.location.href = '/cart';
                    }
                  },
                  error: function (error) {
                    console.error('Error:', error);
                  }
                });
              }
            }
          });
        });
      }
    };
  })(jQuery, Drupal, drupalSettings);
  