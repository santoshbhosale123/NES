<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  tbl_new_connection ";
$query="select tbl_refil_details.refil_id,tbl_refil_details.refil_cylinder_type,tbl_refil_details.refil_payment_details,tbl_refil_details.refil_amount,tbl_refil_details.refil_date,tbl_gogas_customers.gcustomer_name from tbl_refil_details INNER JOIN tbl_gogas_customers On tbl_refil_details.gcustomer_id = tbl_gogas_customers.gcustomer_id";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>