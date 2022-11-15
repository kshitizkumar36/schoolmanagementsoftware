<?php include'admin_header.php'; ?>


<div class="container">
	<form method="post">
		<label>Enter old password</label>
		<input type="text" class="form-control" placeholder="Enter Old password" name="oldp">
		<hr>
		<label>Enter New password</label>
		<input type="text" class="form-control" placeholder="Enter New password" name="newp">
		<hr>
		<label>Confirm password</label>
		<input type="text" class="form-control" placeholder="Confirm password" name="cp">
		<hr>
		<input type="submit" class="form-control btn btn-primary" name="p" value="Update password" name="">
	</form>
</div>

<?php 

	if(isset($_POST['p']))
	{
		$oldp= $_POST['oldp'];
		$newp= $_POST['newp'];
		$cp= $_POST['cp'];


		include'../db.php';
		$query="SELECT * FROM `admin` WHERE `id`=1";
		$run= mysqli_query($connect,$query);
		$data= mysqli_fetch_array($run);
		if($oldp== $data['pass'] );
		{
			if($newp== $cp)
			{

				$query2="UPDATE `admin` SET `pass`='$newp' WHERE `id`=1";
				$run2= mysqli_query($connect,$query2);
				if($run2)
				{
					header("location:index.php");
				}
			}
			else

			{
				header("location:changepwd.php");
			}
		}

	}
 ?>