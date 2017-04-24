<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
//print_r($data);
//exit();
$query="update tbl_aqua_orders set order_reminder = 1 where order_id = '".$data['order_id']."'";

 if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
//echo json_encode($data);
?>