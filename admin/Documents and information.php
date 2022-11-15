<?php include'admin_header.php';include'../db.php'; ?>




<!-- kshitiz conding starts -->
 
<div class="container">
	<div class="text-center">
		<h2><b>DOCUMENTS AND INFORMATION</b></h2> 
		<br>

	</div>
	<h1>B:  <u>DOCUMENTS AND INFORMATION :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	<div class="row">
	
		<div class="col-sm-6 col-6">
			<b>DOCUMENTS/INFORMATION</b>
		</div>

		<div class="col-sm-6 col-6">
			<b>Upload PDF file</b>
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
	<input type="submit" class="form-control btn btn-primary"  name="jma">
</form>

<?php
 
if(isset($_POST['jma']))
{
	$docs= $_POST['info'];

	// $query="INSERT INTO `docs_info`( `docs_info`, `links`) VALUES ('$docs','$links')";
	// $run=  mysqli_query($connect,$query);

 

$pdff= $_FILES['pdf_file']['name'];
$pdf= "name_".$pdff;



		// $file_name = $_FILES['pdf_file']['name'];
		// $file_tmp = $_FILES['pdf_file']['tmp_name'];

		
          // move_uploaded_file($file_tmp,"pdf/".$file_name);

		$insertquery ="INSERT INTO `docs_info`( `docs_info`, `pdf`) VALUES ('$docs','$pdf')";
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
      <th scope="col">DOCUMENTS</th>
      <th scope="col">REMOVE</th>
    </tr>
  </thead>
  <tbody>


  	<?php
  	$query2="SELECT * FROM `docs_info`";
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
					      		<input type="text" class="form-control" value="<?php print_r($data['docs_info']); ?>" name="docs">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="update information" name="docsupdate">
					      	</form>


					      </td>
					      <td>
					      		<a href="pdf/<?php print_r($data['pdf']); ?>"><?php print_r($data['pdf']); ?></a>
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
$insertquery="UPDATE `docs_info` SET `pdf`='$pdf' WHERE `id`='$id'";

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
					      		<input type="submit" value="X" class="text-danger" name="removedocs">
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