(function ($, Drupal) {
    Drupal.behaviors.dropdown = {
      attach: function (context, settings) {
        $('.dropdown-toggle', context).each(function() {
          var clicked = false;
          $(this).click(function(e) {
            if (!clicked) {
              e.preventDefault();
              clicked = true;
              let $this = $(this);
              if ($this.attr('aria-expanded') === 'false') {
                $this.attr('aria-expanded', 'true');
              }
            } else {
              clicked = false;
              window.location = $(this).attr('href');
            }
          });
        });
      }
    };
  })(jQuery, Drupal);
  