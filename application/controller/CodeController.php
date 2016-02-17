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
    public $mask_reg =  '/\d{1}/';
    
    function codeGenerate()
    {
     $arr1 = range('A','Z');
     $arr2 = range(0,9); 
      $arr3 = array_merge($arr1,$arr2);
      shuffle($arr3);
     
      
     
    
    do{
        shuffle($arr3);
        $arr4 = $arr3;
        array_splice($arr4, 10);
        $fl_array = preg_grep($this->mask_reg, $arr4);
    }while (empty($fl_array));
    //put your code here
    return $arr4;
}
}

class OnlyLetters extends CodeController{
    public function letters(){
        $arr1 = range('A','Z');
        shuffle($arr1);
        array_splice($arr1,10);
        $mask_reg = implode($this->codeGenerate());
 /*
  * Если будет лушчее решение, пришлите пожалуйста, мне очень интересно, как оно 
  * выглядит
  */         
$var = preg_replace_callback(
    "/\d{1}/",
    function ($match) {
        static $s = array(
            0 => "G",
            1 => "A",
            2 => "B",
            3 => "C",
            4 => "D",
            5 => "W",
            6 => "Z",
            7 => "E",
            8 => "H",
            9 => "I",
        );
            return $s[$match[0]];
        },
       $mask_reg
        );   
        return $var;
    }
}

class OnlyNumber extends CodeController{
     public function number(){
       echo "mask".$mask_reg = implode($this->codeGenerate());

        $var = preg_replace_callback(
    "/[A-Z]{1}/",
    function ($match) {
        static $s = array(
            "A" => "0",
            "B" => "0",
            "C" => "1",
            "D" => "1",
            "E" => "2",
            "F" => "2",
            "G" => "3",
            "H" => "3",
            "I" => "4",
            "K" => "4",
            "J" => "5",
            "K" => "5",
            "L" => "6",
            "M" => "6",
            "N" => "7",
            "O" => "7",
            "P" => "8",
            "Q" => "8",
            "P" => "9",
            "R" => "9",
            "S" => "0",
            "T" => "0",
            "U" => "1",
            "V" => "1",
            "W" => "2",
            "X" => "2",
            "Y" => "3",
            "Z" => "3"
        );
            return $s[$match[0]];
        },
       $mask_reg
        );   
        return $var;

    }
}

class OnlyCirillic extends CodeController{
     public function cirillic(){
       echo "mask".$mask_reg = implode($this->codeGenerate());

        $var = preg_replace_callback(
    "/[A-Z]{1}/",
    function ($match) {
        static $s = array(
            "A" => "А",
            "B" => "Б",
            "C" => "Ц",
            "D" => "Д",
            "E" => "Е",
            "F" => "Ф",
            "G" => "Г",
            "H" => "Х",
            "I" => "И",
            "K" => "К",
            "J" => "Ж",
            "L" => "K",
            "M" => "М",
            "N" => "Н",
            "O" => "О",
            "P" => "П",
            "Q" => "К",
            "R" => "Р",
            "S" => "С",
            "T" => "Т",
            "U" => "У",
            "V" => "В",
            "W" => "У",
            "X" => "Х",
            "Y" => "Й",
            "Z" => "З"
            );
            return $s[$match[0]];
        },
       $mask_reg
        );   
        return $var;

    }
    
    
}



$obj = new CodeController();
//echo "<br>".$obj->codeGenerate()."<br>";

$obj2 = new OnlyLetters();
$obj2->letters();
$obj3 = new OnlyNumber();
echo "asdfsdf".$obj3->number();

$obj3 = new OnlyCirillic();
echo "<br/>".$obj3->cirillic();