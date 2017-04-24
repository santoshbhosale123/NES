<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="$query="SELECT DISTINCT tbl_new_connection.gcustomer_id,tbl_gogas_customers.gcustomer_name FROM  tbl_new_connection INNER JOIN tbl_gogas_customers On tbl_new_connection.gcustomer_id = tbl_gogas_customers.gcustomer_id;
//$query="select tbl_gas_inwards.inwards_id,sum(tbl_gas_inwards.product_quantity) as product_quantity ,sum(tbl_gas_inwards.total_price) as total_price,tbl_gas_inwards.product_date,tbl_gas_inwards.distributor_name,tbl_gas_inwards.product_id,tbl_gas_inwards.vehicle_id,tbl_gproducts.product_name,tbl_gproducts.product_id,tbl_gvehicle_details.gvehicle_id,tbl_gvehicle_details.gvehicle_owner_name from tbl_gas_inwards INNER JOIN tbl_gproducts On tbl_gas_inwards.product_id = tbl_gproducts.product_id INNER JOIN tbl_gvehicle_details ON tbl_gas_inwards.vehicle_id = tbl_gvehicle_details.gvehicle_id where inwards_activestatus = 1 GROUP BY(tbl_gas_inwards.product_id)";


$query="select tbl_gas_inwards.inwards_id,tbl_gas_inwards.product_quantity,tbl_gas_inwards.total_price,tbl_gas_inwards.product_date,tbl_gas_inwards.distributor_name,
tbl_gas_inwards.product_id,tbl_gas_inwards.vehicle_id,tbl_gproducts.product_name,
tbl_gproducts.product_id,tbl_gvehicle_details.gvehicle_id,tbl_gvehicle_details.gvehicle_owner_name from tbl_gas_inwards INNER JOIN tbl_gproducts On tbl_gas_inwards.product_id = tbl_gproducts.product_id INNER JOIN tbl_gvehicle_details ON tbl_gas_inwards.vehicle_id = tbl_gvehicle_details.gvehicle_id where inwards_activestatus = 1";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>