<?php
session_start();

include'admin_header.php';

$class= "". $_SESSION["class"] ."";
$ad_no= "". $_SESSION["ad_no"] ."";
$terminal="". $_SESSION["terminal"] ."";

include'class1.php';
$class1= new class1();
$d= $class1->get_entry_marks_for_1($ad_no,$class,$terminal);

if($d==0)
{
	?>




	<div class="container p-5">
	<a href="view_marksheet.php?ad_no=<?php echo $ad_no; ?>&terminal=<?php echo $terminal; ?>">View Result</a>
			
	</div>


	<?php
}
else
{


			$subject= $d['subject'];
			?>


			<div class="container">
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
					 				<input type="hidden" value="<?php echo $terminal; ?>" name="terminal">
					 				<input type="hidden" value="<?php echo $class; ?>" name="class">

					 				<hr>
					 				<input type="submit" value="Insert and Next" class="form-control btn btn-primary" name="">
					 			</form>

			</div>


<?php

}
?>

