
<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT SUM(order_quantity) AS order_total,
MONTHNAME(order_delivery_date ) AS order_month
FROM tbl_aqua_orders GROUP BY MONTHNAME(order_delivery_date ) ";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}

print json_encode($data);

?>