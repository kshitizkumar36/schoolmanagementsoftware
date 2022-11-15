<?php

$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `gallery` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:manage_gallery.php");
}



?>