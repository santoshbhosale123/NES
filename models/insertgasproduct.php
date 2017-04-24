<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$gproduct_date = date("Y-m-d g:i a");
$activeastatus = 1;
$query = "INSERT INTO tbl_gproducts(product_name,product_category,product_company,product_price,product_tax,product_date,product_activestatus)VALUES('".$data['product_name']."','".$data['Product_category']."','".$data['Product_company']."','".$data['product_prize']."','".$data['product_tax']."','".$gproduct_date."','".$activeastatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>