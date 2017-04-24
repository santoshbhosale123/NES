<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

$query="SELECT max(sinvoice_id) as sinvoice_id FROM tbl_sale_invoice";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
array_push($data, $row);
}
print json_encode($data);

?>