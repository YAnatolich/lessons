<?php
include ("ConnectModel.php");
class ValidateModel extends ConnectModel {
    
    public function validate($var){
          
         $var = $this->mysqli->real_escape_string($var);
          return $var;       
    }
}
