<?php include'admin_header.php';include'../db.php'; ?>




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<h2><b>E: SCHOOL INFRASTRUCTURE</b></h2>
		<br>

	</div>
	<h1>E:  <u>SCHOOL INFRASTRUCTURE:</u></h1>


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
	$query="INSERT INTO `school_infra`(`info`, `detail`) VALUES ('$info','$details')";
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
  	$query2="SELECT * FROM `school_infra`";
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
					      		<input type="submit" value="update information" name="einfoup">
					      	</form>


					      </td>
					      <td>
					      	
					      	<form method="post" action="update.php">
					      		 		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      	<input type="text" class="form-control" value="<?php print_r($data['detail']); ?>" name="detail">
					      		<input type="submit" value="update Details" name="edetup">
					      	</form>





					      </td>
					      <td>
					      	<form method="post" action="mdcaremove.php">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="X" class="text-danger" name="eremove">
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