<form action="GuestController.php" method="POST" onsubmit="return Validate();">

    <input id="username" name="name" placeholder="Введите имя" >Введите имя 
    <div id="err"></div>
    <input id="email" name="email" placeholder="Введите email">Введите мыло
    <div id="err1"></div>
    <textarea id="txt">
    </textarea>Введите ваше сообщение
    <div id="err2"></div>
    <p><input  id="button_from" type="submit"></p>sdfsdf
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