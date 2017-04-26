<?php


$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$query = "update tbl_gogas_customers set gcustomer_activestatus = 0 where gcustomer_id = '".$data['gcustomer_id']."'";
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
    //echo json_encode($data);

    ?>