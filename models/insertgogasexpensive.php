<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$expensive_date = date("Y-m-d g:i a");
$expensive_activestatus = 1;
$query = "INSERT INTO tbl_gogasexpensives(person_name, exp_desc,exp_amount,exp_date,exp_activestatus) VALUES('".$data['person_name']."','".$data['exp_desc']."','".$data['exp_amount']."','".$expensive_date."','".$expensive_activestatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>