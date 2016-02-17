<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CodeController
 *
 * @author jar
 */
class CodeController {
    public $mask_reg =  '/\d+/';
    function codeGenerate()
    {
      $arr1 = range('A','Z');
      $arr2 = range(0,9);
      foreach ($arr1 as $key){
          echo $key;
      } 
      echo "<br/>";
      foreach ($arr2 as $key){
          echo $key;
      }  
      echo "<br/>";
      $arr3 = array_merge($arr1,$arr2);
      shuffle($arr3);
     
      foreach ($arr3 as $key){
          echo $key;
      
    }
  $arr4[0] = "1";
    echo $fl_array = preg_grep($this->mask_reg, $arr4);
    foreach ($fl_array as $key){
          echo $key;
      
    }
    if (empty($fl_array)){
        echo "empty_empty";
    }
    //put your code here
}
}
$obj = new CodeController();
$obj->codeGenerate();