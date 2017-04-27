<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  tbl_new_connection ";
$query="select tbl_marks.marks_id,tbl_marks.test_type,tbl_marks.Marathi,tbl_marks.Hindi,tbl_marks.English,tbl_marks.Maths,tbl_marks.GSci,tbl_marks.SoSci,tbl_marks.MAT,tbl_marks.Computer,tbl_student.stud_name,tbl_student.stud_rollno,tbl_student.stud_id FROM tbl_marks INNER JOIN tbl_student on tbl_marks.stud_id=tbl_student.stud_id WHERE tbl_marks.test_type='UnitII' order by tbl_student.stud_rollno ASC";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>