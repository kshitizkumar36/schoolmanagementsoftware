<!DOCTYPE html>
<html>
<head>
	<?php include'include/headSection.php'; include'db.php';?>
	<style type="text/css">
		.p-back
		{
			background: #4867aa;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4867aa, white);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4867aa, white); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	padding: 15px;
	color: #fff;
	border-radius: 10px;

		}
	</style>

</head>
<body>

	<?php

include 'include/uptoNavigation.php';

	?>











<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<h2><b>Mandatory Public Disclosure</b></h2>
		<br>

	</div>
	<h1>A:  <u>GENERAL INFORMATION :</u></h1>


	<div class="container border border-dark ">
		<!--  -->


	<!--  -->

<table class="table">

   <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Information</th>
      <th scope="col">Details</th>

    </tr>
  </thead>
  <tbody>


  	<?php
  	$query2="SELECT * FROM `mpd`";
  	$run= mysqli_query($connect,$query2);
  	$count= mysqli_num_rows($run);
  	if($count>0)



  	{


					  	while($data= mysqli_fetch_array($run))
					{
						?>

						  <tr>
					      <th scope="row"><?php print_r($data['id']); ?></th>
					      <td><?php print_r($data['info']); ?></td>
					      <td><?php print_r($data['details']); ?></td>
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->






<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1>B:  <u>DOCUMENTS AND INFORMATION :</u></h1>


	<div class="container border border-dark ">
		<!--  -->


	<!--  -->

<table class="table">
 <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Document/Information</th>
      <th scope="col">Links</th>

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
					      <td><?php print_r($data['docs_info']); ?></td>
					      <td>
					      	<a href="admin/pdf/<?php print_r($data['pdf']); ?>">View</a>
					      </td>
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->



<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1>C:  <u>RESULTS AND ACADEMICS :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	

	<!--  -->

<table class="table">

  <tbody>
 <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Document/Information</th>
      <th scope="col">Links</th>

    </tr>
  </thead>

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
					      <td><?php print_r($data['docs']); ?></td>
					      <td>	<a href="admin/pdf/<?php print_r($data['links']); ?>">View</a></td>
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->


<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1>D:  <u> STAFF (TEACHING):</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	

	<!--  -->

<table class="table">
 <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Information</th>
      <th scope="col">Details</th>

    </tr>
  </thead>
  <tbody>
<?php  
$query1="SELECT * FROM `pgttgtprt` WHERE `id`=1";
$r= mysqli_query($connect,$query1);
$data= mysqli_fetch_array($r);

?>

  	 <tr>
  	 	<td>1</td>
					   <td>Principal</td>
					   <td><?php  echo $data['principal']; ?></td>
					      
					     
					    </tr>

				     <tr>
				  	 	<td>2</td>
				  	 	<td>Total Number of Teachers</td>
				        <td><?php  echo $data['totalteacher']; ?></td>
				      </tr>
				       <tr>
				  	 	<td></td>
				  	 	<td>PGT</td>
				        <td><?php  echo $data['pgt']; ?></td>
				      </tr>
				       <tr>
				  	 	<td></td>
				  	 	<td>TGT</td>
				        <td><?php  echo $data['tgt']; ?></td>
				      </tr>
				       <tr>
				  	 	<td></td>
				  	 	<td>PRT</td>
				        <td><?php  echo $data['prt']; ?></td>
				      </tr>


  	<?php
  	$query2="SELECT * FROM `staff_teaching`";
  	$run= mysqli_query($connect,$query2);
  	$count= mysqli_num_rows($run);
  	if($count>0)



  	{

  		$ic=3;
					  	while($data= mysqli_fetch_array($run))
					{
						?>

						  <tr>
					      <th scope="row"><?php echo $ic;  ?></th>
					      <td><?php print_r($data['info']); ?></td>
					      <td><?php print_r($data['details']); ?></td>
					      
					     
					    </tr>
						<?php
						$ic++;
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1><u>CLASS X :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	

	<!--  -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Year</th>
      <th scope="col">NO OF REGISTERED STUDENTS</th>
      <th scope="col">NO OF STUDENTS PASSED</th>
          <th scope="col">PASS PERCENTAGE</th>
              <th scope="col">REMARKS</th>

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
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->




<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1><u>CLASS XII :</u></h1>


	<div class="container border border-dark ">
		<!--  -->
	

	<!--  -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Year</th>
      <th scope="col">NO OF REGISTERED STUDENTS</th>
      <th scope="col">NO OF STUDENTS PASSED</th>
          <th scope="col">PASS PERCENTAGE</th>
              <th scope="col">REMARKS</th>

    </tr>
  </thead>
  <tbody>


  	<?php
  	$query2="SELECT * FROM `class12result`";
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
					      <td><?php print_r($data['registered_students']); ?></td>
					        <td><?php print_r($data['students_passed']); ?></td>
					          <td><?php print_r($data['pass_percentage']); ?></td>
					            <td><?php print_r($data['remarks']); ?></td>
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->



<!-- kshitiz conding starts -->

<div class="container">
	<div class="text-center">
		<br>

	</div>
	<h1>E:  <u> SCHOOL INFRASTRUCTURE:</u></h1>


	<div class="container border border-dark ">
	

	<!--  -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">INFORMATION</th>
      <th scope="col">DETAILS</th>

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
					      <td><?php print_r($data['info']); ?></td>
					      <td><?php print_r($data['detail']); ?></td>
					      
					     
					    </tr>
						<?php
					}





}

  	?>
  
    
  </tbody>
</table>

	<!--  -->

	</div>
</div>





<!-- ends -->


<hr>
<!-- footer -->
<?php include 'include/footer.php';?>







<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript" src="js/jquery2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.slick').slick({
	  	arrows:false,
	  	autoplay:true,
	  	swipe:true
	  });
	});
</script>

<!-- counter -->
<script type="text/javascript">
	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
<!-- end of counter -->

</body>
</html>