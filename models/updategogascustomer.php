<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE tbl_gogas_customers SET gcustomer_name='".$data['gcustomer_name']."', gcustomer_number='".$data['gcustomer_number']."',gcustomer_city='".$data['gcustomer_city']."',gcustomer_landmark='".$data['gcustomer_landmark']."' WHERE gcustomer_id='".$data['gcustomer_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>