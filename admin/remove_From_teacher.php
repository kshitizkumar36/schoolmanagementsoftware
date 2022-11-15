<?php

$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `teacher` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:teacher_info.php");
}



?> 