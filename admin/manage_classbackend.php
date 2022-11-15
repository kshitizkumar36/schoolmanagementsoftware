<?php 

$class=$_POST['class'];
$subject= $_POST['subject'];

include'../db.php';
$query="INSERT INTO `class_subject`( `class`, `subject`) VALUES ('$class','$subject')";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:manage_class.php");
}

 ?>