<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT tbl_aqua_invoice.*,tbl_aqua_customers.* FROM  tbl_aqua_invoice inner join tbl_aqua_customers on tbl_aqua_invoice.acustomer_id = tbl_aqua_customers.acustomer_id where tbl_aqua_invoice.invoice_activestatus = 1";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
array_push($data, $row);
}
print json_encode($data);

?>