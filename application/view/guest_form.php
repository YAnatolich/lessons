<form action="GuestController.php" method="POST" onsubmit="return Validate();">

    <input id="username" name="username" value="Введите имя" >Введите имя 
    <div id="err"></div>
    <input id="email" name="email" value="ya@sadf.ru">Введите мыло
    <div id="err1"></div>
    <textarea id="txt" name="txt" value="sdfsdfasfd">
    </textarea>Введите ваше сообщение
    <div id="err2"></div>
    <p><input  id="button_from" type="submit"></p>
 </form> 
<!--p id="dataset-test" data-name="Поддерживается атрибут dataset">
  Атрибут dataset не поддерживается
</p>

<script type="text/javascript">
  // удобный доступ к данным через dataset
  // браузерами пока не поддерживается
  var datasetTest = document.getElementById('dataset-test');
  if(datasetTest.dataset) {
    datasetTest.innerHTML = datasetTest.dataset.name;
  }
</script-->
 <script src="/public/js/validate.js"></script>
