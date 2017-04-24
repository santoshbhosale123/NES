<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT tbl_connection_invoice.*,tbl_gogas_customers.*,tbl_new_connection.* FROM  tbl_connection_invoice inner join tbl_gogas_customers on tbl_connection_invoice.gcustomer_id = tbl_gogas_customers.gcustomer_id inner join tbl_new_connection on tbl_connection_invoice.connection_id = tbl_new_connection.connection_id where cinvoice_activestatus = 1";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
array_push($data, $row);
}
print json_encode($data);

?>