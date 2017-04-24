<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$inwards_date = date("Y-m-d g:i a");

$inwards_activestatus = 1;
$query = "INSERT INTO tbl_gas_inwards(product_quantity,total_price,product_date, 	distributor_name,product_id,vehicle_id,inwards_activestatus)VALUES('".$data['pquantity']."','".$data['tprice']."','".$inwards_date."','".$data['distributor_name']."', '".$data['product']."','".$data['vehicle']."','".$inwards_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";


    	$checkquery = "select * from  tbl_gproducts_trasaction where product_id = '".$data['product']."'";
    		$result = mysqli_query($connection,$checkquery);

    		if(mysqli_num_rows($result)>0){

    			$updatequery = "UPDATE tbl_gproducts_trasaction SET tproduct_quantity= tproduct_quantity + '".$data['pquantity']."', transaction_date='".$inwards_date."' where product_id = '".$data['product']."'";
    		mysqli_query($connection,$updatequery);

    		}else{


    	$insertquery = "INSERT INTO tbl_gproducts_trasaction(tproduct_quantity,product_id,transaction_date)VALUES('".$data['pquantity']."','".$data['product']."','".$inwards_date."')";
    		mysqli_query($connection,$insertquery);
    	}
    }
	
echo json_encode($data);

 	?>