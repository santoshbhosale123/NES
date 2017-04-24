<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$jsondata=file_get_contents("php://input");
$postdata = json_decode($jsondata, true);

$startdt=$postdata['startdt'];
$enddt=$postdata['enddt'];

if($postdata['startdt']!="") {
	if($postdata['enddt']!=""){
		$query="select tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id ,sum(tbl_aqua_orders.order_quantity) as order_quantity,sum(tbl_aqua_orders.order_price) as order_price,tbl_aqua_orders.aqua_payment_details,tbl_aqua_orders.aqua_amount,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_delivery_date from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1 and order_delivery_date between '".$startdt."' and '".$enddt."' GROUP by tbl_aqua_customers.acustomer_id";
		
	}else{

		$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_delivery_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1";
		
	}
}else{
	$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_delivery_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1";
}



$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>