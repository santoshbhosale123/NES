<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$gcustomer_date = date("Y-m-d g:i a");
$gcustomer_activestatus = 1;
$query = "INSERT INTO  tbl_gogas_customers(gcustomer_name, gcustomer_type, gcustomer_email,gcustomer_number,	gcustomer_dob, gcustomer_state,	gcustomer_city,	gcustomer_pincode,	gcustomer_landmark,gcustomer_proof,	gcustomer_date,gcustomer_activestatus)
    VALUES('".$data['gcustomer_name']."','".$data['gcustomer_type']."','".$data['gcustomer_email']."', '".$data['gcustomer_number']."', '".$data['gcustomer_dob']."', '".$data['gcustomer_state']."','".$data['gcustomer_city']."','".$data['gcustomer_pincode']."','".$data['gcustomer_landmark']."','".$data['gcustomer_proof']."','".$gcustomer_date."','".$gcustomer_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>