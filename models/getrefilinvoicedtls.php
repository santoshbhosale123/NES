<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT tbl_refil_invoice.*,tbl_gogas_customers.* FROM  tbl_refil_invoice inner join tbl_gogas_customers on tbl_refil_invoice.gcustomer_id = tbl_gogas_customers.gcustomer_id";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
array_push($data, $row);
}
print json_encode($data);

?>