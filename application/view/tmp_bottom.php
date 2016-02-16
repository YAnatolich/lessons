</div>
<div id="spacer"> </div>
</div>
    <div id="footer">
         <button id="button" onclick="loadPhones()">Загрузить phones.json!</button>

 
        Подвал</div>
    
    <!--script src="/public/js/node_modules/node-static/js/server.js"></script-->
  <script>
    function loadPhones() {
      var xhr = new XMLHttpRequest();

      xhr.open('GET', '/public/js/phones.json', true);
      xhr.send();

xhr.onreadystatechange = function() { // (3)
  if (xhr.readyState != 4) return;

  button.innerHTML = 'Готово!';

  if (xhr.status != 200) {
    alert(xhr.status + ': ' + xhr.statusText);
  } else {
    alert(xhr.responseText);
  }

}

button.innerHTML = 'Загружаю...'; // (2)
button.disabled = true;
    }
  </script>
 
</body>
</html>
