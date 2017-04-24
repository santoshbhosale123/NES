<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_teacher SET teacher_name='".$data['teacher_name']."',teacher_standard='".$data['teacher_standard']."', teacher_number='".$data['teacher_number']."',teacher_role='".$data['teacher_role']."' WHERE teacher_id='".$data['teacher_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>