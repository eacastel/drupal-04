document.addEventListener('DOMContentLoaded', function() {
    var copyButtons = document.querySelectorAll('.copy-ip-button');
    copyButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var ip = button.parentNode.querySelector('.ip-block').innerText.trim();
        copyToClipboard(ip);
      });
    });
  
    function copyToClipboard(text) {
      var tempElement = document.createElement('textarea');
      tempElement.value = text;
      document.body.appendChild(tempElement);
      tempElement.select();
      document.execCommand('copy');
      document.body.removeChild(tempElement);
    }
  });
  