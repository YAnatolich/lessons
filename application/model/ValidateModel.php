<?php
include ("ConnectModel.php");
class ValidateModel extends ConnectModel {
    
    
    public function validate($var){
          echo "validateModel";
       //   echo $var."<br/>";
         // echo $this->mysqli;
          
         echo $var = $this->mysqli->real_escape_string($var);
      //if (!$this->mysqli->query("INSERT into user (name) VALUES ('$var')")) {
    //printf("Ошибка: %s\n", $this->mysqli->sqlstate);
//}
          return $var;       
    }
}
