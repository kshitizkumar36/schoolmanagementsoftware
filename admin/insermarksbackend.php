<?php 
session_start();
include'../db.php';
$subject= $_POST['subject'];
$ad_no= $_POST['ad_no'];
$terminal= $_POST['terminal'];
$class= $_POST['class'];


$internal_assessment= $_POST['internal_assessment'];
$internal_assessment_full=$_POST['internal_assessment_full'];

$written_marks= $_POST['written_marks'];
$written_marks_full= $_POST['written_marks_full'];



$query= " UPDATE `exam_marks` SET `get_internal_marks`='$internal_assessment',`full_internal_marks`='$internal_assessment_full',`get_written_marks`='$written_marks',`full_written_marks`='$written_marks_full' WHERE `ad_no`= '$ad_no'AND `subject`='$subject' AND `terminal`='$terminal'AND `class`='$class'";


$run= mysqli_query($connect,$query);
if($run)
{


	 $_SESSION["class"] =$class;
 $_SESSION["ad_no"] =$ad_no;
 $_SESSION["terminal"] =$terminal;
	header("location:start_entry.php");
}

 ?> 