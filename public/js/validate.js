function Validate(val1) {
  this._val1 = val1;
}

Animal.prototype.trueMail = function() {
  alert( this._val1 );
}

var animal = new Animal("Зверь");
animal.trueMail(); // Зверь