//without full validate
function Validate(val1) {
  this._val1 = val1;
  this._email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
//i take this regular expression from site http://emailregex.com/ it's very complex
}

Validate.prototype.trueMail = function(val) {
  var eml = document.getElementById("email");
  var val3 = "sdasdff@asaf.com";
  eml = eml.value.trim();
  
  if ( this._email.test(eml) ) {//function test (using regular expression).
alert("bugaga");
}else {
    alert("trueMail");
    alert(this.className);
val.className = "error";
error_username.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.';
}
};

Validate.prototype.trueName = function (){
  var name = document.getElementById("username");
  name = name.value.trim();
  if(name == ""){
     alert("empty input, it's so bad"); 
    }    
  alert("username" + name.value);
  
};

Validate.prototype.trueText = function(){
    var text1 = document.getElementById("txt");
    text1 = text1.value;
    if(text1 == ""){
        alert ("cool");
    }
    alert("text" + text1);
    
};

Validate.prototype.offError = function(val){
    if (val.className == 'error') { // сбросить состояние "ошибка", если оно есть
    val.className = "";
    error_username.innerHTML = "";
    }
};


var mail = new Validate("Зверь");
//mail.trueText(); // Зверь

email.onblur = mail.trueMail(email);
email.onfocus = mail.offError(email);
