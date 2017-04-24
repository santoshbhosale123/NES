<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$vehicle_date = date("Y-m-d g:i a");

$vehicle_activestatus = 1; 
$query = "INSERT INTO   tbl_avehicle_details(vehicle_owner_name,vehicle_number,vehicle_contact_number,vehicle_date,vehicle_activestatus)
    VALUES('".$data['vowner_name']."', '".$data['vehicle_number']."','".$data['vehicle_contact_number']."', '".$vehicle_date."', '".$vehicle_activestatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>