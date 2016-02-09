//without full validate
var regemail = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
// i used this regular expression from site http://emailregex.com/

email.onblur = function() { 
  
   if(!regemail.test(email.value)){ // input do not email
    // показать ошибку
    this.className = "error";
    err1.innerHTML = 'Вы ввели неккоректный e-mail. Исправьте, пожалуйста.';
  
  }
};

email.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "";
    err1.innerHTML = "";
  }
};
username.onblur = function() { 
  if (!this.value) { // введено не число
    // показать ошибку
    this.className = "error";
    err.innerHTML = '.Вы ввели не число Исправьте, пожалуйста.';
  }
};;
username.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "";
    err.innerHTML = "";
  }
};

txt.onblur = function() { 
    var val = this.value;
    val = val.trim();
  if (!val) { // введено не число
    // показать ошибку
    this.className = "error";
    err2.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.';
  }
}; ;
txt.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "";
    err2.innerHTML = "";
  }
};

function Validate(){
    var v_email = email.value.trim();
    var u_name = username.value.trim();
    var v_txt = txt.value.trim();
    var mark = true;
  
    if(email.className == "error" || v_email == ""){
       
       if(email.className != "error"){
           email.className = "error";
       }
       
    err1.innerHTML = 'Вы ввели некорректный email. Исправьте, пожалуйста.';
      mark = false;
    }
    
    if(username.className == "error" || u_name == ""){
        if(username.className != "error"){
           username.className = "error";
       }
       
    err.innerHTML = 'Вы не ввели имя пользователя. Исправьте, пожалуйста.';
       mark = false;
    }
    
    if(txt.className == "error" || v_txt == ""){
         if(txt.className != "error"){
           txt.className = "error";
       }
       
    err2.innerHTML = 'Вы оставили пустое поле. Исправьте, пожалуйста.';
        mark = false;
    }
    
   return mark;
   
}