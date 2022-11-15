<?php

$id= $_GET['id'];
include'../db.php';
$query="DELETE FROM `vacancies` WHERE `id`='$id'";
$run= mysqli_query($connect,$query);
if($run)
{
	header("location:update_vacancies.php");
}



?>