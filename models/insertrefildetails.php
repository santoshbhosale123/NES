<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$refil_date = date("Y-m-d g:i a");

$query = "INSERT INTO  tbl_refil_details(refil_cylinder_type,refil_payment_details,check_neft_id,bank_name,ifsc_code,refil_amount,refil_date, gcustomer_id)
    VALUES('".$data['type']."','".$data['refil_payment_details']."','".$data['check_neft_id']."','".$data['bank_name']."','".$data['ifsc_code']."','".$data['amount']."','".$refil_date."','".$data['customer']."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>