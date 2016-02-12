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
echo $_POST["answer"];


include("../../application/model/ValidateModel.php");

$var2 = new ValidateModel;
$var2->validate("2''''';;'DROP table *'");

include("../../application/view/tmp_bottom.php");
