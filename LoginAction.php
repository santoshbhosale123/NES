<?php
		// check username or password from database
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$dataa = json_decode($jsondata, true);

$teacheruname = $dataa['username'];
$teacherpass = $dataa['password'];
$encpass = md5($teacherpass);

$query="SELECT * FROM tbl_teacher where teacher_username = '".$teacheruname."' and teacher_password = '".$encpass."'";
$result = mysqli_query($connection,$query);
//print_r($result);
$uname = "";
$upass = "";
$urole = "";
$uid = "";
if(mysqli_num_rows($result)>0){
while ($row = mysqli_fetch_assoc($result)){
	$data[]=$row;
	//$uid .= $row['teacher_id'];
	//$uname .= $row['teacher_username'];
	//$upass .= $row['teacher_password'];
	//$urole .= $row['teacher_role'];

}
//echo $uid;
//echo $uname;
//echo $urole;
echo json_encode($data);
}else{
	echo"Error";
}

		     ?>