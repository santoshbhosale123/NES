<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
//date_default_timezone_set('Asia/Kolkata');
$marks_date = date("Y-m-d g:i a");
//$connection_activestatus = 1;
//print_r($data);
$query = "INSERT INTO tbl_marks(test_type,Marathi,Hindi,English,Maths,GSci,SoSci,MAT,Computer,marks_date,stud_id)
    VALUES('".$data['test_type']."','".$data['Marathi']."','".$data['Hindi']."','".$data['English']."','".$data['Maths']."', '".$data['GSci']."', '".$data['SoSci']."','".$data['MAT']."','".$data['Computer']."','".$marks_date."','".$data['stud_name']."')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>