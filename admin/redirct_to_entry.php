<?php

session_start();
include'../db.php';
include'class1.php';
$class1= new class1();


$terminal= $_POST['terminal'];
$ad_no= $_POST['ad_no'];
$class= $_POST['class'];



$subjects= $class1->class_subject($class);

foreach ($subjects as $key )
 {
	
 	$sub= $key['subject'];
	$query="INSERT INTO `exam_marks`(`ad_no`, `terminal`, `class`, `subject`) VALUES ('$ad_no','$terminal','$class','$sub')";
	$run= mysqli_query($connect,$query);

}

$query2="INSERT INTO `grades_terminalwise`(`terminal`, `ad_no`,`class`) VALUES ('$terminal','$ad_no','$class')";
$run2= mysqli_query($connect,$query2);

$_SESSION["class"]= $class;
$_SESSION["ad_no"]= $ad_no;
$_SESSION["terminal"]= $terminal;
header("location:start_entry.php");



?>