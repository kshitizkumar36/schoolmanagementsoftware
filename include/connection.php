<?php

// $con=mysqli_connect("localhost","pcnayak","pcnayak","tadb");
$con=mysqli_connect('localhost','root','','tadb');
if (!$con) {
	echo "<script>alert('Database Connection Error.');</script>";
}


?>