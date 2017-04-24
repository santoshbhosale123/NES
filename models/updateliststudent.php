<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_student SET stud_name='".$data['stud_name']."',stud_rollno='".$data['stud_rollno']."', stud_parent_No='".$data['stud_parent_No']."',stud_address='".$data['stud_address']."' WHERE stud_id='".$data['stud_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>