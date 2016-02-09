//without full validate
function Validate(val1) {
  this._val1 = val1;
  this._email = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
//i take this regular expression from site http://emailregex.com/ it's very complex
}

Validate.prototype.trueMail = function() {
  alert( this._val1 );
  var val3 = "sdasdffasaf.com";
  if ( this._email.test(val3) ) {
alert("bugaga");

}else alert("false");
}
var mail = new Validate("Зверь");
mail.trueMail(); // Зверь

email.onblur = function() { 
  if (isNaN(this.value)) { // введено не число
    // показать ошибку
    this.className = "error";
    error.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.'
  }
};
email.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "";
    error.innerHTML = "";
  }
};
