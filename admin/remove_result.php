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
 				<h5 class="bg-danger text-white p-1">Remove Marksheet of the selected Candidate</h5>


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
      <td><a class="text-danger" href="choose_terminal_forcut.php?ad_no=<?php echo $ad_no; ?>&class=<?php echo $class; ?>">Remove All</a></td>
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