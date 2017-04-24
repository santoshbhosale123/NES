<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$invoice_date = date("Y-m-d g:i a");

$invoice_status = '0';
$invoice_activestatus = 1;
$query = "INSERT INTO  tbl_aqua_invoice(invoice_tax, invoice_amount, invoice_date, invoice_status, order_id, acustomer_id,invoice_activestatus)
    VALUES('".$data['invoice_tax']."', '".$data['invoice_amount']."','".$invoice_date."','".$invoice_status."', '".$data['order_id']."','".$data['acustomer_id']."','".$invoice_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
	echo json_encode($data);
 	?>