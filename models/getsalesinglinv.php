<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$query="select * from tbl_sale_invoice where sale_product_id = '".$data['sale_product_id']."'";

$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}

print json_encode($data);
?>