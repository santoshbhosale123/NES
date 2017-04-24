<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE tbl_aqua_orders SET customer_name='".$data['customer_name']."', order_delivery_address	='".$data['order_delivery_address']."',order_quantity='".$data['	order_quantity']."',order_delivery_time='".$data['order_delivery_time']."',order_delivery_date='".$data['order_delivery_date']."',vehicle_name='".$data['vehicle_name']."' WHERE order_id='".$data['order_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>