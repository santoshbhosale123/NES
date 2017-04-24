<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);

$query = "UPDATE gproducts_sale SET sale_product_quantity='".$data['sale_product_quantity']."', sale_product_price='".$data['sale_product_price']."',sale_total_price='".$data['sale_total_price']."' WHERE sale_product_id='".$data['sale_product_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>