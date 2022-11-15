<?php 
session_start();

include('admin_header.php');
include'class1.php';
$class1= new class1();
 ?>
<hr><hr>

 <div class="container">
 	<div class="row">
 		
 		<div style="position: ;" class="col-sm-6 border">
 			<form method="post" action="marks_new_student_page2.php">
 				<label>Student's Name</label>
 				<input type="text" class="form-control" placeholder="Student's Name" name="sname">
 			 	<hr>
 				<label>Class</label>
 				<select name="class" class="form-control">
 					<option>class 1</option>
 					<option>class 2</option>
 					<option>class 3</option>
 					<option>class 4</option> 
 					<option>class 5</option>
 					<option>class 6</option>
 					<option>class 7</option>
 					<option>class 8</option>
 					<option>class 9</option>
 					<option>class 10</option>

 				</select>
 				<hr>
 				<label>Enter Admission Number</label>
 				<input type="text" class="form-control" placeholder ="Admission No" name="adno">
 				<hr>
 					<label>Enter Roll Number</label>
 				<input type="text" class="form-control" placeholder ="Roll No" name="roll">
 				<hr>
 				<label>Enter Date of Birth</label>
 				<input type="date" class="form-control" name="dob">
 				<hr>
 				<label>Enter Father's Name</label>
 				<input type="text" class="form-control" placeholder="Father's Name" name="father">
 				<hr>
 				<label>Enter Mother's Name</label>
 				<input type="text" class="form-control" placeholder="Mother's Name" name="mother">
 				<br>
 			
 				<hr>
 				<input type="submit" value="Add Student" class="form-control btn btn-success" name="">
 			</form>
 		</div>
 		<div class="col-sm-6">
 			
 			<div class="text-center">
 				<label>All Added Candidates</label>


 				<div style="overflow: scroll;height: 800px;" class="container">
 						<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Admission_no</th>
      <th scope="col">Roll No</th>
      <th scope="col">Class</th>
       <th scope="col">Father</th>
        <th scope="col">Mother</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php

$d= $class1->addedstudent();

foreach ($d as $key)
 {
	?>

	 <tr>
      <th scope="row"><?php echo $key['name']; ?></th>
      <td><?php echo $key['ad_no']; ?></td>
      <td><?php echo $key['roll']; ?></td>
      <td><?php echo $key['class']; ?></td>
      <td><?php echo $key['father']; ?></td>
      <td><?php echo $key['mother']; ?></td>
      <td><a class="text-danger" href="remove_candidate.php?id=<?php echo $key['id']; ?>">X</a></td>
    </tr>

	<?php
}



?>


   
 
  </tbody>
</table>
 				</div>
 			</div>
 		</div>
 	
 </div>