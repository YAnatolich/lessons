//without full validate
function Validate(val1) {
  this._val1 = val1;
}

Validate.prototype.trueMail = function() {
  alert( this._val1 );
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
