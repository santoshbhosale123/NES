<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT tbl_gproducts_trasaction.tproduct_quantity FROM tbl_gproducts_trasaction inner join tbl_gproducts on tbl_gproducts_trasaction.product_id = tbl_gproducts.product_id where tbl_gproducts.product_category = 'pipe' and tbl_gproducts.product_activestatus = 1";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>