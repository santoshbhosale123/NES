<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "UPDATE tbl_gproducts SET 	product_price='".$data['product_price']."', product_company='".$data['product_company']."',product_tax='".$data['product_tax']."' WHERE product_id='".$data['product_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>