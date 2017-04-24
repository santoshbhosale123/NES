<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  gproducts_sale";
$query="select gproducts_sale.*,tbl_gogas_customers.*,tbl_gproducts.product_name,tbl_gproducts.product_id from gproducts_sale INNER JOIN tbl_gproducts On gproducts_sale.product_id = tbl_gproducts.product_id INNER JOIN tbl_gogas_customers On gproducts_sale.gcustomer_id = tbl_gogas_customers.gcustomer_id where sale_activestatus = 1";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>