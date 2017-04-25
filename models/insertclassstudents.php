<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

/*date_default_timezone_set('Asia/Kolkata');
$jardetails_date = date("Y-m-d g:i a");

$jar_activestatus = 1;*/
$query = "INSERT INTO tbl_student(stud_name,stud_rollno,stud_standard ,stud_parent_No,stud_address,stud_dob,teacher_id)
    VALUES('".$data['stud_name']."','".$data['stud_rollno']."','".$data['stud_standard']."','".$data['stud_parent_No']."','".$data['stud_address']."','".$data['stud_dob']."','".$data['tid']."')";
    
     if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>