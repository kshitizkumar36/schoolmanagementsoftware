<?php 




session_start();

if(!$_SESSION["ad_no"])
{
 header("location:index.php");
}
else
{



$ad_no="".$_SESSION["ad_no"]."";
include'class1.php';
$class1= new class1();

$s_data= $class1->getstudent($ad_no);

 ?>



 


<!DOCTYPE html>
<html>
<head>
	<?php include'include/headSection.php'; ?>
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
include 'include/academic_header.php';
	?>
<!-- end of navigation -->

<!-- banner -->
<?php
//include 'include/banner.php';
?>
<!-- end of banner -->





<section class="border border-danger p-3">
 				 	<div class="container mt-3">
 				 		<div class="row">
 				 			<div class="col-sm-3"></div>
 				 			<div class="col-sm-6 shadow	">
 				 				<span class="">
 				 	<a class="btn btn-danger form-control" href="logout.php?ad_no=<?php echo $ad_no; ?>">logout</a>
 				 					
 				 				</span>
 				 				<hr>

 				 				<!-- student name -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Student's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['name']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- student name ends -->

 				 				<!-- class starts -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Class</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['class']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- class ends -->

 				 				<!-- admission no -->
 				 					

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Admission Number</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['ad_no']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!--admission no ends  -->

 				 				<!-- roll number -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Roll Number</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['roll']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- roll number ends -->

 				 				<!-- Date of Birth -->

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>DOB</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['dob']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- date of birth ends -->
 				 				<!-- father -->

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Father's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['father']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- fether// -->

 				 				<!-- mother -->


 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Mother's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input disabled value="<?php echo $s_data['mother']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- mother// -->

 				 			</div>
 				 			<div class="col-sm-3">
 				 				
 				 			</div>
 				 		</div>
 				 	</div>

 				 	<hr>

 				 	<!-- marks view starts -->



 				 	<?php


 				 	
 				 	for($term=1; $term<4;$term++)
 				 	{
					 				 	$marks=$class1->result($ad_no,$term);
					 				 	if($marks!==0)
					 				 	{


					 				 	?>
					 				 	<hr>
					 				 	<div class="container">
					 				 	<label><?php echo $term; ?> Terminal examination</label>

					 				 		<table class="table">
											  <thead>
											    <tr>
											      <th scope="col">Subject</th>
											      <th scope="col">Obtained Marks(Internal)</th>
											      <th scope="col">Full Internal Marks</th>

											      <th scope="col">Obtained Marks(Written )</th>
											          <th scope="col">Full written Marks</th>
											    
											    </tr>
											  </thead>
											  <tbody>

											  	<?php
											  	foreach ($marks as $key ) 
											  	{
											  		?>
											  		 <tr>
											      <th ><?php echo $key['subject']; ?></th>
											      <td><?php echo $key['get_internal_marks']; ?></td>
											       <td><?php echo $key['full_internal_marks']; ?></td>

											      <td><?php echo $key['get_written_marks']; ?></td>
											      <td><?php echo $key['full_written_marks']; ?></td>
											    </tr>
											 

											  		<?php
											  	}


											  	?>
											   
											  </tbody>
											</table>

											<hr>
											<!-- total marks -->
											<?php
											$grading= $class1->grading($ad_no,$term);

											?>

											<div class="row">
												<div class="com-sm-6 col-6">
													<label>Total Marks</label>
												</div>
												<div class="com-sm-6 col-6">
													<input disabled value="<?php  echo $grading['total_marks']; ?>" class="form-control" name="">
												</div>
											</div>

											<div class="row">
												<div class="com-sm-6 col-6">
													<label>Percentage</label>
												</div>
												<div class="com-sm-6 col-6">
													<input disabled value="<?php  echo $grading['percentage']; ?>" class="form-control" name="">
												</div>
											</div>

											<div class="row">
												<div class="com-sm-6 col-6">
													<label>Grade</label>
												</div>
												<div class="com-sm-6 col-6">
													<input disabled value="<?php  echo $grading['grade']; ?>" class="form-control" name="">
												</div>
											</div>

											<div class="row">
												<div class="com-sm-6 col-6">
													<label>Rank in the class</label>
												</div>
												<div class="com-sm-6 col-6">
													<input disabled value="<?php  echo $grading['class_rank']; ?>" class="form-control" name="">
												</div>
											</div>
											<hr>



											<hr>

											<hr>
											<h5>xxxxxxxxxxxxxxxxxxxxxxxxx---------------End of <?php echo $term; ?> Marksheet---------------xxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h5>
											<hr>
											<hr>



					 				 		<?php
					 				 	}
					 				 	else
					 				 	{

					 				 	}


 				 }
 				 	?>

</div></section>




 				

<hr>
<!-- footer -->
<?php include 'include/footer.php';?>
<!-- end of footer -->


<!-- test -->

<!-- end of test -->



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


<?php

}
?>