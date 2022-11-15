<?php include'admin_header.php';include'../db.php'; ?>




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<h2><b>RESULT AND ACADEMICS</b></h2>
		<br>

	</div>
	<h1>C:  <u>RESULT AND ACADEMICS :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	<div class="row">
	
		<div class="col-sm-6 col-6">
			<b>DOCUMENTS/INFORMATION</b>
		</div>

		<div class="col-sm-6 col-6">
			<b>LINKS OF DOCUMENTS ON YOUR SCHOOL'S WEBSITE.</b>
		</div>






	</div>

	<!--  -->











		<!--  -->
	<div class="row">

		<div class="col-sm-6 col-6">
				<form method="post" enctype="multipart/form-data">

			<input type="text" placeholder="Enter name of DOCUMENTS and information " class="form-control" name="info"required="required">
		</div>

		<div class="col-sm-6 col-6">
		<!-- <input type="text" placeholder="Enter link of info" class="form-control" name="detail"required="required"> -->


		 <input class="form-control" type="file" name="pdf_file"
                 class="form-control" 
                 >
		</div>



		


	</div>
	<hr>
	<input type="submit" class="form-control btn btn-primary"  name="submit">
</form>


<?php
 
if(isset($_POST['submit']))
{



	$info= $_POST['info'];
	


$pdff= $_FILES['pdf_file']['name'];
$pdf= "name_".$pdff;



	$insertquery="INSERT INTO `result_academics`(`docs`, `links`) VALUES ('$info','$pdf')";
		
		$iquery = mysqli_query($connect, $insertquery);

		if($iquery)
		{
		 move_uploaded_file($_FILES['pdf_file']['tmp_name'], "pdf/$pdf");	
		}

		?>
			<div class=
			"alert alert-danger alert-dismissible
			fade show text-center">
			<a class="close" data-dismiss="alert"
				aria-label="close">×</a>
			<strong>Failed!</strong>
				File must be uploaded in PDF format!
			</div>
		<?php
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
  	$query2="SELECT * FROM `result_academics`";
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
					      		<input type="text" class="form-control" value="<?php print_r($data['docs']); ?>" name="docs">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="update information" name="docscupdate">
					      	</form>


					      </td>
					      <td>




					      	<a href="pdf/<?php print_r($data['links']); ?>">View</a>
					      		<hr>

					      		<form method="post" enctype="multipart/form-data">
									
								

								<input type="hidden" value="<?php print_r($data['id']); ?>" name="id"><label>Change pdf</label>
								 <input class="form-control" type="file" name="pdf_file"
						                 class="form-control" 
						                 >
								
							
							
											<input type="submit" value="Change Pdf "  name="change">
								</form>


<?php
 
if(isset($_POST['change']))
{
	$id= $_POST['id'];
$pdff= $_FILES['pdf_file']['name'];
$pdf= "name_".$pdff;
$insertquery="UPDATE `result_academics` SET `links`='$pdf' WHERE `id`='$id'";

		// $insertquery ="INSERT INTO `docs_info`( `docs_info`, `pdf`) VALUES ('$docs','$pdf')";
		$iquery = mysqli_query($connect, $insertquery);

		if($iquery)
		{
		 move_uploaded_file($_FILES['pdf_file']['tmp_name'], "pdf/$pdf");	
		}

		?>
			<div class=
			"alert alert-success alert-dismissible
			fade show text-center">
			<a class="close" data-dismiss="alert"
				aria-label="close">×</a>
			<strong>success!</strong>
				File updated!
			</div>
		<?php
		}











?>



					      

					      


					  



					      </td>
					      <td>
					      	<form method="post" action="mdcaremove.php">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="X" class="text-danger" name="cremove">
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