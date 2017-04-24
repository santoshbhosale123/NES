<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE tbl_aqua_customers SET acustomer_name='".$data['acustomer_name']."', acustomer_number='".$data['acustomer_number']."',	acustomer_address='".$data['acustomer_address']."',acustomer_type='".$data['acustomer_type']."' WHERE acustomer_id='".$data['acustomer_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>