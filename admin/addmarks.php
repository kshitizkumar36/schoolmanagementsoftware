<?php 
session_start();

include('admin_header.php');
include'class1.php';
$class1= new class1();
 ?>
<hr><hr>

 <div class="container">
 	<div class="row">
 		
 		
 		<div class="col-sm-12">
 			
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
      <td><?php echo $ad_no= $key['ad_no']; ?></td>
      <td><?php echo $key['roll']; ?></td>
      <td><?php echo $class= $key['class']; ?></td>
      <td><?php echo $key['father']; ?></td>
      <td><?php echo $key['mother']; ?></td>
      <td><a href="confirm_terminal.php?ad_no=<?php echo $ad_no; ?>&class=<?php echo $class; ?>">Add Marks</a></td>
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