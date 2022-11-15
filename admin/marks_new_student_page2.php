<?php 
session_start();
$name=$_POST['sname'];
$class= $_POST['class'];
$ad_no= $_POST['adno'];
$dob=$_POST['dob'];
$father=$_POST['father'];
$mother= $_POST['mother'];
$terminal= $_POST['exam_cat'];
$roll= $_POST['roll'];


include'../db.php';
$query="INSERT INTO `student_table`( `name`, `ad_no`,`roll`, `class`, `dob`, `father`, `mother`) VALUES ('$name','$ad_no','$roll','$class','$dob','$father','$mother')";
$run= mysqli_query($connect,$query);


if($run)
{
	header("location:marks_new_student.php");
}
// get all subject

