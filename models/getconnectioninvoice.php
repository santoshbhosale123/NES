<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);



$query="select tbl_new_connection.*,tbl_gogas_customers.gcustomer_name,tbl_gogas_customers.gcustomer_email,tbl_gogas_customers.gcustomer_number,tbl_gogas_customers.gcustomer_state,tbl_gogas_customers.gcustomer_city,tbl_gogas_customers.gcustomer_pincode,tbl_gogas_customers.gcustomer_landmark,tbl_gogas_customers.gcustomer_id from tbl_new_connection INNER JOIN tbl_gogas_customers On tbl_new_connection.gcustomer_id = tbl_gogas_customers.gcustomer_id where tbl_new_connection.connection_id = '".$data['connection_id']."'";

$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}

print json_encode($data);

?>