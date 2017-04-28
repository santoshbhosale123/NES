<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_marks SET 	Marathi='".$data['Marathi']."',	Hindi='".$data['Hindi']."',English='".$data['English']."',Maths='".$data['Maths']."',GSci='".$data['GSci']."',SoSci='".$data['SoSci']."',MAT='".$data['MAT']."',Computer='".$data['Computer']."' WHERE marks_id='".$data['marks_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>