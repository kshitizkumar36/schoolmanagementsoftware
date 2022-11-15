<?php include'admin_header.php';include'../db.php'; ?>




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<h2><b>D: STAFF (TEACHING)</b></h2>
		<br>

	</div>
	<h1>D:  <u>STAFF(TEACHING) :</u></h1>

<?php  
$query1="SELECT * FROM `pgttgtprt` WHERE `id`=1";
$r= mysqli_query($connect,$query1);
$data= mysqli_fetch_array($r);

?>

<!-- col 1 -->

<form class="border border-danger p-4" method="post">
	<label>Principal</label>
	<input type="text" class="form-control" placeholder="<?php echo $data['principal']; ?>" name="principal">
	<hr>
	<label>Total number of teachers</label>
	<input type="text" class="form-control" placeholder="<?php echo $data['totalteacher']; ?>" name="tno"required="required">
	<hr>
	<label>PGT</label>
	<input type="text" class="form-control" placeholder="<?php echo $data['pgt']; ?>" name="pgt"required="required">
	<hr>
	<label>TGT</label>
	<input type="text" class="form-control" placeholder="<?php echo $data['tgt']; ?>" name="tgt"required="required">
	<hr>
	<label>PRT</label>
	<input type="text" class="form-control" placeholder="<?php echo $data['prt']; ?>" name="prt"required="required">
	<hr>
	<input type="submit" placeholder="Update information" class="form-control btn btn-success" name="up">
</form>
<?php 
	if(isset($_POST['up']))
	{
		$principal= $_POST['principal'];
		$tno= $_POST['tno'];
		$pgt= $_POST['pgt'];
		$tgt= $_POST['tgt'];
		$prt= $_POST['prt'];
		$query="UPDATE `pgttgtprt` SET `principal`='$principal', `totalteacher`='$tno',`pgt`='$pgt',`tgt`='$tgt',`prt`='$prt' WHERE `id`=1";
		$run= mysqli_query($connect,$query);
	}



 ?>

<!-- end col 1 -->

<h2 class="text-danger">Enter Information starting from 3rd number</h2>
	<div class="container border border-dark ">
		<!--  -->
	<div class="row">
	
		<div class="col-sm-6 col-6">
			<b>INFORMATION</b>
		</div>

		<div class="col-sm-6 col-6">
			<b>DETAILS.</b>
		</div>






	</div>

	<!--  -->











		<!--  -->
	<div class="row">

		<div class="col-sm-6 col-6">
		<form method="post">

			<input type="text" placeholder="Enter Documents Name " class="form-control" name="info"required="required">
		</div>

		<div class="col-sm-6 col-6">
		<input type="text" placeholder="Enter  Documents Links" class="form-control" name="details"required="required">
		</div>



		


	</div>
	<hr>
	<input type="submit" class="form-control btn btn-primary"  name="submit">
</form>

<?php

if(isset($_POST['submit']))
{
	$info= $_POST['info'];
	$details= $_POST['details'];
	$query="INSERT INTO `staff_teaching`(`info`, `details`) VALUES ('$info','$details')";
	$run=  mysqli_query($connect,$query);


}




?>
	<!--  -->


	</div>
</div>





<!-- ends -->



<hr>
<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">INFORMATION</th>
      <th scope="col">DETAILS</th>
      <th scope="col">REMOVE</th>
    </tr>
  </thead>
  <tbody>


  	<?php
  	$query2="SELECT * FROM `staff_teaching`";
  	$run= mysqli_query($connect,$query2);
  	$count= mysqli_num_rows($run);
  	if($count>0)



  	{


					  	while($data= mysqli_fetch_array($run))
					{
						?>

						  <tr>
					      <th scope="row"><?php print_r($data['id']); ?></th>
					      <td>
					      		<form method="post" action="update.php">
					      		<input type="text" class="form-control" value="<?php print_r($data['info']); ?>" name="info">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="update information" name="dinfosub">
					      	</form>


					      </td>
					      <td>
					      	
					      	<form method="post" action="update.php">
					      		 		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      	<input type="text" class="form-control" value="<?php print_r($data['details']); ?>" name="details">
					      		<input type="submit" value="update Details" name="ddetailssub">
					      	</form>





					      </td>
					      <td>
					      	<form method="post" action="mdcaremove.php">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="X" class="text-danger" name="dremove">
					      	</form>

					
					      </td>
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>
	</div>