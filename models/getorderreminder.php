<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT * FROM tbl_aqua_orders where order_reminder = 1 and order_delivery_date >= CURDATE() order by order_delivery_date,order_delivery_time";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>