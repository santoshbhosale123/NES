<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  tbl_new_connection ";
$query="select tbl_new_connection.connection_id, tbl_new_connection.connection_type, tbl_new_connection.connection_cylinder_deposit, tbl_new_connection.connection_depreciation,tbl_new_connection.connection_tprice,tbl_new_connection.connection_hotplate,tbl_new_connection.connection_passbook,tbl_new_connection.connection_stamp,tbl_new_connection.connection_tube,tbl_new_connection.connection_lighter,tbl_new_connection.connection_date ,tbl_gogas_customers.gcustomer_name,tbl_gogas_customers.gcustomer_id from tbl_new_connection INNER JOIN tbl_gogas_customers On tbl_new_connection.gcustomer_id = tbl_gogas_customers.gcustomer_id where tbl_new_connection.connection_activestatus = 1";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>