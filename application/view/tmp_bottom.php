</div>
<div id="spacer"> </div>
</div>
    <div id="footer">Подвал</div>
    
    <!--script src="/public/js/node_modules/node-static/js/server.js"></script-->
   <button onclick="loadPhones()">Загрузить phones.json!</button>

  <script>
    function loadPhones() {
      var xhr = new XMLHttpRequest();

      xhr.open('GET', '/public/js/phones.json', false);
      xhr.send();

      if (xhr.status != 200) {
        // обработать ошибку
        alert('Ошибка ' + xhr.status + ': ' + xhr.statusText);
      } else {
        // вывести результат
        alert(xhr.responseText);
      }
    }
  </script>

</body>
</html>
