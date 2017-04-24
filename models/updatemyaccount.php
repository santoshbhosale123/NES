<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);
$query = "UPDATE tbl_teacher SET teacher_username='".$data['username']."',teacher_name='".$data['fullname']."',teacher_email='".$data['email']."',teacher_number='".$data['phone']."' WHERE teacher_id='".$data['teacher_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>