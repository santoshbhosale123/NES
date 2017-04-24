<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$rinvoice_date = date("Y-m-d g:i a");


$rinvoice_status = '0';
$query = "INSERT INTO  tbl_refil_invoice(rinvoice_tax, rinvoice_amount, rinvoice_date, rinvoice_status, 	refil_id, gcustomer_id)
    VALUES('".$data['rinvoice_tax']."', '".$data['rinvoice_amount']."','".$rinvoice_date."','".$rinvoice_status."', '".$data['refil_id']."','".$data['gcustomer_id']."')";
   //print_r(mysqli_query($connection,$query));
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
	echo json_encode($data);
 	?>