<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

//$query="select tbl_aqua_orders.*,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_email,tbl_aqua_customers.acustomer_number,tbl_aqua_customers.acustomer_address,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where tbl_aqua_orders.order_id = '".$data['order_id']."'";

$query="select tbl_aqua_orders.*,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_email,tbl_aqua_customers.acustomer_number,tbl_aqua_customers.acustomer_address,tbl_aqua_customers.acustomer_id,tbl_jar_details.jar_id,tbl_jar_details.jar_type,tbl_jar_details.jar_price from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id  INNER JOIN tbl_jar_details On tbl_aqua_orders.jar_id = tbl_jar_details.jar_id where tbl_aqua_orders.order_id = '".$data['order_id']."'";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>