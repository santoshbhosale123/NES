<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$order_date = date("d-m-Y g:i a");

$ddate = $data['order_date'];
$newdelivery_date = date("Y-m-d",strtotime($ddate));
$order_status = '0';
$order_reminder = '0';
$order_activestatus = 1;
$query = "INSERT INTO tbl_aqua_orders(order_quantity, order_price, order_delivery_address,order_delivery_date,order_delivery_time,vehicle_name,aqua_payment_details,check_neft_id,bank_name,ifsc_code,aqua_amount,order_status, order_reminder,order_date,jar_id, acustomer_id,order_activestatus) VALUES('".$data['order_quantity']."', '".$data['order_price']."','".$data['order_address']."', '".$newdelivery_date."', '".$data['order_time']."','".$data['vehicle']."','".$data['aqua_payment_details']."','".$data['check_neft_id']."','".$data['bank_name']."','".$data['ifsc_code']."','".$data['aqua_amount']."','".$order_status."','".$order_reminder."','".$order_date."','".$data['jar_id']."','".$data['customer_id']."','".$order_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>