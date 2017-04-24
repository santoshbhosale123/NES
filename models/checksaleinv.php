<?php


$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "select * from tbl_sale_invoice where sale_product_id = '".$data['sale_product_id']."'";
$result = mysqli_query($connection,$query);
   if(!$result)
    {
        die('Error : '.mysqli_error());
    }else{
    	if(mysqli_num_rows($result)>0){
    		echo"1";
    	}
    	else{
    		echo"0";
    	}

    }
    //echo json_encode($data);

    ?>