<?php

$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `notice` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:update_notice.php");
}



?>