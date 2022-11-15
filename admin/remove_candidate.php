<?php 

$id= $_GET['id'];
include'../db.php';

$query="DELETE FROM `student_table` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:marks_new_student.php");
}



 ?>