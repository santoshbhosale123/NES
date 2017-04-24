<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
//print_r($data);
date_default_timezone_set('Asia/Kolkata');
$update_date = date("d-m-Y g:i a");


$queryqty = "select product_quantity from tbl_gas_inwards WHERE inwards_id ='".$data['inwards_id']."'";

$result = mysqli_query($connection,$queryqty);

while ($row = mysqli_fetch_assoc($result)){

    $oldquantity = $row['product_quantity'];
    // $data[]=$row;
 //array_push($data, $row);
}
  $oldquantity;

	
$query = "UPDATE tbl_gas_inwards SET product_quantity ='".$data['product_quantity']."',
total_price='".$data['total_price']."', distributor_name='".$data['distributor_name']."' WHERE inwards_id='".$data['inwards_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : '.mysqli_error());
    }else{
    	echo"success";

        echo $calculatedqty = $data['product_quantity'] - $oldquantity;

    	$query1 = "UPDATE tbl_gproducts_trasaction SET tproduct_quantity = tproduct_quantity + '".$calculatedqty."', transaction_date='".$update_date."' WHERE product_id='".$data['product_id']."'";
    		mysqli_query($connection,$query1);
    }
	

 	?>