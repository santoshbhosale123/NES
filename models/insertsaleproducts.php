<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$saleproduct_date = date("Y-m-d g:i a");

$sale_activestatus = 1;
$query = "INSERT INTO gproducts_sale(sale_product_quantity,sale_product_price,sale_total_price,product_id,sale_product_date,gcustomer_id,sale_activestatus)VALUES('".$data['product_quantity']."','".$data['Product_price']."','".$data['Product_tprice']."','".$data['product']."','".$saleproduct_date."','".$data['gcustomer_id']."','".$sale_activestatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";

        $updatequery = "UPDATE tbl_gproducts_trasaction SET tproduct_quantity = tproduct_quantity - '".$data['product_quantity']."', transaction_date='".$saleproduct_date."' where product_id = '".$data['product']."'";
    		mysqli_query($connection,$updatequery);

    	
    }
	
echo json_encode($data);
 	?>