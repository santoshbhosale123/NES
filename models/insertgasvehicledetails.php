<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$gvehicle_date = date("Y-m-d g:i a");
$gvehicle_status = 1;
$query = "INSERT INTO  tbl_gvehicle_details(gvehicle_owner_name,gvehicle_number,gvehicle_contact_number,gvehicle_date,gvehicle_activestatus)
    VALUES('".$data['vowner_name']."', '".$data['vehicle_number']."','".$data['vehicle_contact_number']."', '".$gvehicle_date."', '".$gvehicle_status."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>