<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$acustomer_date = date("Y-m-d g:i a");

$acustomer_activestatus = 1;
$query = "INSERT INTO   tbl_aqua_customers(acustomer_name,	acustomer_email,acustomer_number,	acustomer_address,acustomer_type,acustomer_date,acustomer_activestatus)
    VALUES('".$data['acustomer_name']."','".$data['acustomer_email']."', '".$data['acustomer_number']."', '".$data['acustomer_address']."', '".$data['acustomer_type']."','".$acustomer_date."','".$acustomer_activestatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>