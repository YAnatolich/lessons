<?php
include("../../application/view/tmp_head.php");
include("../../application/view/tmp_lft_colon.php");
include("../../application/view/tmp_r_colon.php");
include("../../application/view/tmp_content.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../../application/view/guest_form.php";
if(isset($_POST["username"])){
$username = $_POST["username"];
}
if(isset($_POST["email"])){
$email = $_POST["email"];}
if(isset($_POST["txt"]))
{$txt = $_POST["txt"];}
echo $_SERVER["REMOTE_ADDR"];




include("../../application/model/ValidateModel.php");

$var2 = new ValidateModel;
$var2->validate("2''''';;");
if (!$var2->mysqli->query("INSERT into user ('$username',) VALUES ('$var2')")) {
    printf("Ошибка: %s\n", $this->mysqli->sqlstate);
    
}

include("../../application/view/tmp_bottom.php");
