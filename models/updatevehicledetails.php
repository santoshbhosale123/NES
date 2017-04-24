<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE tbl_avehicle_details SET 	vehicle_owner_name='".$data['vehicle_owner_name']."', vehicle_number='".$data['vehicle_number']."' ,vehicle_contact_number='".$data['vehicle_contact_number']."' WHERE vehicle_id='".$data['vehicle_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>