<?php

include'../db.php';
include'class1.php';
$class1= new class1();


echo $terminal= $_POST['terminal'];
echo $ad_no= $_POST['ad_no'];
echo $class= $_POST['class'];



$query1="DELETE FROM `exam_marks` WHERE `ad_no`='$ad_no' AND `class`='$class' AND `terminal`='$terminal'";
$run1= mysqli_query($connect,$query1);

$query2="DELETE FROM `grades_terminalwise` WHERE `ad_no`='$ad_no' AND `class`='$class' AND `terminal`='$terminal'";
$run2= mysqli_query($connect,$query2);


header("location:remove_result.php");

?>