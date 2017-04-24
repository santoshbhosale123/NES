<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();


$query="select DISTINCT tbl_gas_inwards.product_id,tbl_gproducts.product_name from tbl_gas_inwards INNER JOIN tbl_gproducts on tbl_gas_inwards.product_id = tbl_gproducts.product_id WHERE tbl_gas_inwards.inwards_activestatus = 1 and tbl_gproducts.product_activestatus = 1;
";



$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>