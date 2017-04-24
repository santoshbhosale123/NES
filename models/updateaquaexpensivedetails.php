<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE tbl_aquaexpensives SET person_name='".$data['person_name']."',exp_desc='".$data['exp_desc']."',exp_amount='".$data['exp_amount']."'WHERE aquaexpensive_id='".$data['aquaexpensive_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>