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
include("../../application/model/ValidateModel.php");

$var2 = new ValidateModel;


if(isset($_POST["username"])){
$username = $var2->validate($_POST["username"]);
}
if(isset($_POST["email"])){
$email = $var2->validate($_POST["email"]);}
if(isset($_POST["txt"]))
{$txt = $var2->validate($_POST["txt"]);}
//echo $_SERVER["REMOTE_ADDR"];



$ip_user = $_SERVER['REMOTE_ADDR'];
$data_today = date('Y-n-j');
//echo $data_today;

if (!$var2->mysqli->query("INSERT into `user` (`name`,`email`, `ip_user`, `date_registrate`) "
        . "VALUES ('$username','$email','$ip_user', '$data_today')")) {
    printf("Ошибка: %s\n", $var2->mysqli->sqlstate);
    
}
$id_insert = $var2->mysqli->insert_id; 
if (!$var2->mysqli->query("INSERT into `msg_from_usr` (`data_post`, `text`, `id_user`)"
        . "VALUES ('$data_today','$txt', '$id_insert')")) {
    printf("Ошибка: %s\n", $var2->mysqli->sqlstate);
}


include("../../application/view/tmp_bottom.php");
