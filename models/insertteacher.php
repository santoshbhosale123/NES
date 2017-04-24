<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$teacher_date = date("Y-m-d g:i a");
$password = $data['password'];
$pass=md5($password);

$query="INSERT INTO tbl_teacher(teacher_username,teacher_name,teacher_standard,teacher_email,teacher_number,teacher_password,teacher_role, teacher_date)
    VALUES('".$data['username']."','".$data['fullname']."','".$data['teacher_standard']."','".$data['email']."', '".$data['phone']."','".$pass."','".$data['userrole']."', '".$teacher_date."')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>