<?php 
session_start();
$class= $_POST['class'];
$ad_no= $_POST['ad_no'];
$dob= $_POST['dob'];

include'db.php';
$query="SELECT * FROM `student_table` WHERE `ad_no`='$ad_no'";
$run= mysqli_query($connect,$query);
$data= mysqli_fetch_array($run);
if($dob==$data['dob'])
{
	$_SESSION["ad_no"]= $ad_no;
	header("location:view_result.php");
}

 ?>