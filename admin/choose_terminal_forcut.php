<?php 
include'admin_header.php';
include'../db.php';
$class=$_GET['class'];
$ad_no= $_GET['ad_no']; 
include'class1.php';
$class1= new class1();

?>
<hr><hr>
<div class="container p-5">
	<form method="post" action="remove_resultbackend.php">
		<label>Choose Examination for Entry</label>
		<select class="form-control" name="terminal">
			<option value="1">First Terminal Examination</option>
			<option value="2">Second Terminal Examination</option>
			<option value="3">FInal Examination</option>

		</select>


		<input type="hidden" value="<?php echo $class; ?>" name="class">
		<input type="hidden" value="<?php echo $ad_no; ?>" name="ad_no">
		<hr>
		<input type="submit" class="form-control btn btn-danger" value="Destroy" name="">
	</form>
</div>




