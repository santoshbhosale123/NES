<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();


$query="select tbl_gproducts.product_name,tbl_gproducts_trasaction.tproduct_quantity,tbl_gproducts_trasaction.transaction_date from tbl_gproducts INNER JOIN tbl_gproducts_trasaction On tbl_gproducts.product_id = tbl_gproducts_trasaction.product_id  where product_activestatus = 1";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>