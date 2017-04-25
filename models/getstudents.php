<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$query="SELECT * FROM tbl_student where teacher_id = '".$data['teacher_id']."' order by stud_rollno ASC";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	 $data1[]=$row;
      //array_push($data,$row);
}
print json_encode($data1);

?>