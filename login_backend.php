<?php

if(isset($_POST['login']))
{
  $id= $_POST['id'];
  $pass= $_POST['pwd'];

  include'db.php';

  $query="SELECT * FROM `admin` WHERE `user`='$id' AND `pass`='$pass'";
  $run= mysqli_query($connect,$query);
  $count= mysqli_num_rows($run);
  if($count>0)
  {
    header("location:admin/index.php");
  }
  else
  {
    header("location:login.php");
  }
}

?>

