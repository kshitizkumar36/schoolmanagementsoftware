<?php 
session_start();
$ad_no= "".$_SESSION["adno"]."";
$class= "". $_SESSION["class"] ."";
include('admin_header.php');
include'class1.php';
$class1= new class1();
 ?>


 <div class="container">
 	<div class="row">
 		<div class="col-sm-3"></div>
 		<div class="col-sm-6 border mt-4 p-3">

 			<?php
 			$subject_data= $class1->student_marks($ad_no);
 			if($subject_data==0)
 			{
 				// result view start
 				?>

 				<?php
 				$s_data=$class1->getdetails($ad_no);

 				?>

 				 	<div class="container">
 				 		<div class="row">
 				 			<div class="col-sm-3"></div>
 				 			<div class="col-sm-6 shadow	">

 				 				<!-- student name -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Student's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['name']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- student name ends -->

 				 				<!-- class starts -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Class</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['class']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- class ends -->

 				 				<!-- admission no -->
 				 					

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Admission Number</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['ad_no']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!--admission no ends  -->

 				 				<!-- roll number -->
 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Roll Number</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['roll']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- roll number ends -->

 				 				<!-- Date of Birth -->

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>DOB</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['dob']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>

 				 				<!-- date of birth ends -->
 				 				<!-- father -->

 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Father's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['father']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- fether// -->

 				 				<!-- mother -->


 				 				<div class="row">
 				 					<div class="col-sm-4 col-6">
 				 						<label>Mother's Name</label>
 				 					</div>

 				 					<div class="col-sm-8 col-6">
 				 						<input type="text" value="<?php echo $s_data['mother']; ?>" class="form-control" name="">
 				 					</div>
 				 				</div>
 				 				<!-- mother// -->

 				 			</div>
 				 			<div class="col-sm-3"></div>
 				 		</div>
 				 	</div>

 				 	<hr>

 				 	<!-- marks view starts -->

 				 	<?php
 				 	// get marks data and exams data
 				 	$terms=1;
 				 	$fst_term_data= $class1->get_exam_data($ad_no,$terms);



 				 	?>
 				 	<label>1st Terminal examination</label>

 				 		<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Subject</th>
						      <th scope="col">Internal Assessment</th>
						      <th scope="col">Written Exam</th>
						        <th scope="col">Obtained  marks</th>
						          <th scope="col">Total Marks</th>
						    
						    </tr>
						  </thead>
						  <tbody>

						  	<?php
						  	foreach ($fst_term_data as $key ) 
						  	{
						  		?>
						  		 <tr>
						      <th ><?php echo $key['subjects']; ?></th>
						      <td><?php echo $key['internal_marks']; ?></td>
						      <td><?php echo $key['written_marks']; ?></td>
						      <td>ptani</td>
						      <td><?php echo $key['written_full_marks']; ?></td>
						    </tr>
						 

						  		<?php
						  	}


						  	?>
						   
						  </tbody>
						</table>


						<!-- total marks -->

						<?php
						$class1->mathematics($ad_no,$terms);

						$grading=$class1->getgrades($ad_no,$terms);



						?>

						<div class="row">
							<div class="com-sm-6 col-6">
								<label>Total Marks</label>
							</div>
							<div class="com-sm-6 col-6">
								<input type="number" value="<?php  echo $grading['total_marks']; ?>" class="form-control" name="">
							</div>
						</div>

						<div class="row">
							<div class="com-sm-6 col-6">
								<label>Percentage</label>
							</div>
							<div class="com-sm-6 col-6">
								<input type="number" value="<?php  echo $grading['percentage']; ?>" class="form-control" name="">
							</div>
						</div>

						<div class="row">
							<div class="com-sm-6 col-6">
								<label>Grade</label>
							</div>
							<div class="com-sm-6 col-6">
								<input type="number" value="<?php  echo $grading['grade']; ?>" class="form-control" name="">
							</div>
						</div>

						<div class="row">
							<div class="com-sm-6 col-6">
								<label>Rank in the class</label>
							</div>
							<div class="com-sm-6 col-6">
								<input type="number" value="" class="form-control" name="">
							</div>
						</div>
						<hr>
						<input type="submit" class="form-control btn btn-success" value="Update" name="">


						<!-- end total marks -->

 				 	<!-- marks view ends -->

 				 		<?php
 				 	// get marks data and exams data
 				 	$terms=2;
 				 	$fst_term_data= $class1->get_exam_data($ad_no,$terms);

 				 	if($fst_term_data== 0)
 				 	{

 				 	}
 				 	else
 				 	{
 				 		?>
 				 		<label>2nd Terminal examination</label>

 				 		<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Subject</th>
						      <th scope="col">Internal Assessment</th>
						      <th scope="col">Written Exam</th>
						    
						    </tr>
						  </thead>
						  <tbody>

						  	<?php
						  	foreach ($fst_term_data as $key ) 
						  	{
						  		?>
						  		 <tr>
						      <th ><?php echo $key['subjects']; ?></th>
						      <td><?php echo $key['internal_marks']; ?></td>
						      <td><?php echo $key['written_marks']; ?></td>
						      <td><?php echo $key['written_full_marks']; ?></td>
						    </tr>
						 

						  		<?php
						  	}


						  	?>
						   
						  </tbody>
						</table>



 				 		<?php
 				 	}
 				 	



 				 	?>




 				 		<?php
 				 	// get marks data and exams data
 				 	$terms=3;
 				 	$fst_term_data= $class1->get_exam_data($ad_no,$terms);

 				 	if($fst_term_data== 0)
 				 	{

 				 	}
 				 	else
 				 	{
 				 		?>
 				 		<label>Final examination</label>

 				 		<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Subject</th>
						      <th scope="col">Internal Assessment</th>
						      <th scope="col">Written Exam</th>
						        <th scope="col">Obtained  marks</th>
						          <th scope="col">Total Marks</th>
						    
						    </tr>
						  </thead>
						  <tbody>

						  	<?php
						  	foreach ($fst_term_data as $key ) 
						  	{
						  		?>
						  		 <tr>
						      <th ><?php echo $key['subjects']; ?></th>
						      <td><?php echo $key['internal_marks']; ?></td>
						      <td><?php echo $key['written_marks']; ?></td>
						      <td>ptani</td>
						      <td><?php echo $key['written_full_marks']; ?></td>
						    </tr>
						 

						  		<?php
						  	}


						  	?>
						   
						  </tbody>
						</table>

 				 		<?php
 				 	}
 				 	



 				 	?>




 				<?php
 				// result view ends
 			}
 			else
 			{


		 			$subject= $subject_data;
		 			
		 			?>
		 			
		 			<form method="post" action="insermarksbackend.php">
		 				<label>Insert Marks of <?php 	echo $subject ;?></label>

		 				<hr>
		 				<div class="row">
		 					<div class="col-sm-6">
		 					<label>Internal Assessment</label>

		 						<input type="number" class="form-control" placeholder=" Internal Assessment of  <?php 	echo $subject; ?> " name="internal_assessment">
		 					</div>

		 					<div class="col-sm-6">
		 						<label>Internal Assessment Full Marks</label>
		 						<input type="number" class="form-control" placeholder=" Full marks  " name="internal_assessment_full">
		 					</div>
		 				</div>
		 				<hr>
		 				<div class="row">
		 					<div class="col-sm-6">
		 						<label>Written Exam</label>
		 						<input type="number" class="form-control" placeholder=" Written Marks of  <?php 	echo $subject; ?> " name="written_marks">
		 				
		 					</div>
		 					<div class="col-sm-6">
		 						<label>Written Exam Full Marks</label>
		 						<input type="number" class="form-control" placeholder=" Full marks  " name="written_marks_full">
		 					</div>
		 				</div>

		 				
		 					<hr>
		 					
		 				<input type="hidden" value="<?php echo $subject; ?>" name="subject">
		 				<input type="hidden" value="<?php echo $ad_no; ?>" name="ad_no">

		 				<hr>
		 				<input type="submit" value="Insert and Next" class="form-control btn btn-primary" name="">
		 			</form>

		 	<?php

		 		}
		 	?>
 		

 		</div>
 		<div class="col-sm-3"></div>
 	</div>
 </div>