<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  tbl_aqua_orders order by order_delivery_date,order_delivery_time ";
$query="select tbl_aqua_orders.*,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1 order by order_delivery_date DESC";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>