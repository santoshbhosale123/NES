<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE  tbl_new_connection SET connection_cylinder_deposit='".$data['connection_cylinder_deposit']."', connection_depreciation='".$data['connection_depreciation']."' ,connection_hotplate='".$data['connection_hotplate']."',connection_passbook='".$data['connection_passbook']."',connection_stamp='".$data['connection_stamp']."',connection_tube='".$data['connection_tube']."',	connection_lighter='".$data['connection_lighter']."' WHERE 	gcustomer_id='".$data['gcustomer_id']."' AND connection_date = '".$data['connection_date']."' ";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>