<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE  tbl_refil_details SET refil_payment_details='".$data['refil_payment_details']."', refil_amount='".$data['refil_amount']."' WHERE 	refil_id='".$data['refil_id']."' AND refil_date = '".$data['refil_date']."' ";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>