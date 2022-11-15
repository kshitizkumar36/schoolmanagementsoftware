<?php include'admin_header.php';include'../db.php'; ?>




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<h2><b>CLASS X</b></h2>
		<br>

	</div>
	<h1><u>CLASS X :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	<b>Fill the following forms</b>
	<!--  -->











		<!--  -->
	<div class="row">
		<div class="col-sm-6 col-6">
		<form method="post">
			<input type="text" placeholder="Year " class="form-control" name="year"required="required">
		</div>
		<div class="col-sm-6 col-6">
		<input type="text" placeholder="No of Registered Students" class="form-control" name="registered_users"required="required">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-sm-6 col-6">
			<input type="text" placeholder="No of Students passed " class="form-control" name="passed_students"required="required">
		</div>
		<div class="col-sm-6 col-6">
		<input type="text" placeholder="Pass percentage" class="form-control" name="pass_percentage"required="required">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-12 col-12">
			<input type="text" placeholder="Remark " class="form-control" name="remark"required="required">
		</div>
	
	</div>


<hr>


	<input type="submit" class="form-control btn btn-primary"  name="submit">
</form>

<?php

if(isset($_POST['submit']))
{

	$year= $_POST['year'];
	$registered_students= $_POST['registered_users'];
	$passed_students= $_POST['passed_students'];
	$pass_percentage= $_POST['pass_percentage'];	
    $remark= $_POST['remark'];
	$query="INSERT INTO `class10result`( `year`, `registerd_students`, `students_passed`, `pass_percentage`, `remarks`) VALUES ('$year','$registered_students','$passed_students','$pass_percentage','$remark')";
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
      <th scope="col">YEAR</th>
      <th scope="col">NO OF REGISTERED STUDENTS</th>
      <th scope="col">NO OF STUDENTS PASSED</th>
        <th scope="col">PASS PERCENTAGE</th>
          <th scope="col">REMARKS</th>
            <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>


  	<?php
  	$query2="SELECT * FROM `class10result`";
  	$run= mysqli_query($connect,$query2);
  	$count= mysqli_num_rows($run);
  	if($count>0)



  	{


					  	while($data= mysqli_fetch_array($run))
					{
						?>

						  <tr>
					      <th scope="row"><?php print_r($data['id']); ?></th>
					      <td><?php print_r($data['year']); ?></td>
					      <td><?php print_r($data['registerd_students']); ?></td>
					      <td><?php print_r($data['students_passed']); ?></td>
					      <td><?php print_r($data['pass_percentage']); ?></td>
					      <td><?php print_r($data['remarks']); ?></td>
					        <td>
					      	<form method="post" action="mdcaremove.php">
					      		<input type="hidden" value="<?php print_r($data['id']); ?>" name="id">
					      		<input type="submit" value="X" class="text-danger" name="10remove">
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