document.addEventListener('DOMContentLoaded', function() {
  var copyButtons = document.querySelectorAll('.copy-ip-button');
  copyButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var ip = button.parentNode.querySelector('.ip-block p').innerText.trim();
      copyToClipboard(ip);
    });
  });

  function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
      .then(function() {
        console.log('Text copied to clipboard: ' + text);
      })
      .catch(function(error) {
        console.error('Unable to copy text to clipboard: ' + error);
      });
  }
});
