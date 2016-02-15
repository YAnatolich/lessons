<?php
class ConnectModel{
     public $mysqli2, $mysqli;
function __construct(){
   
        $this->mysqli = new mysqli("localhost", "root", "NtvysqGfk", "1c");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

/* изменение набора символов на utf8 */
if (!$this->mysqli->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $this->mysqli->error);
} else {
    printf("Сообщение выведено из ConnectModel.Текущий набор символов: %s\n", $this->mysqli->character_set_name());
}

//$mysqli- >close();  
//return $this->mysqli;
    }
 
}