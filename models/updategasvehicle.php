<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE  tbl_gvehicle_details SET gvehicle_owner_name='".$data['gvehicle_owner_name']."', gvehicle_number='".$data['gvehicle_number']."', gvehicle_contact_number='".$data['gvehicle_contact_number']."' WHERE gvehicle_id='".$data['gvehicle_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>