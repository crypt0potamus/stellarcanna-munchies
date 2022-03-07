"use strict";

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('save_scc_address').addEventListener('click', function (e) {
    var address = document.getElementById('scc-address').value;
    var nonce = document.getElementById('_wpnonce').value;
    var formData = new FormData();
    formData.append('action', 'scc_validate_address');
    formData.append('nonce', nonce);
    formData.append('address', address);
    fetch(ajaxurl, {
      method: 'post',
      body: formData
    }).then(function (res) {
      return res.json();
    }).then(function (res) {
      var messageArea = document.getElementById('scc-message-area');
      messageArea.innerHTML = '';
      messageArea.innerHTML = res.data;

      if (!res.success) {
        messageArea.style.color = 'red';
      } else {
        messageArea.style.color = 'green';
        var img = document.createElement('img');
        img.id = 'scc-indicator';
        img.src = 'https://id.lobstr.co/' + address + '.png';
        document.getElementById('scc-message-area').insertAdjacentElement('beforeBegin', img);
      }
    });
  });
});