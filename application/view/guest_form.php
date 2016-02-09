<form action="GuestController.php" method="POST">

    <input id="username" name="name" >Введите имя 
    <div id="error"></div>
    <input id="email" name="email" value="input name">Введите мыло
    <div id="error1"></div>
    <textarea id="txt">
    </textarea>Введите ваше сообщение
 
  <p><input type="submit"></p>sdfsdf
 </form> 
<p id="dataset-test" data-name="Поддерживается атрибут dataset">
  Атрибут dataset не поддерживается
</p>

<script type="text/javascript">
  // удобный доступ к данным через dataset
  // браузерами пока не поддерживается
  var datasetTest = document.getElementById('dataset-test');
  if(datasetTest.dataset) {
    datasetTest.innerHTML = datasetTest.dataset.name;
  }
</script> <script src="/public/js/validate.js"></script>