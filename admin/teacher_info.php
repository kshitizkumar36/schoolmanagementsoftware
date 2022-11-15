



<?php 

include'admin_header.php';
include'class1.php';

$class1 = new class1();


 ?>

 <div class="container border border-primary p-3 ">
 	<form method="post" action="update_teacher.php" enctype="multipart/form-data">
 		<label>Name of the Teacher</label>
 		<input type="text" class="form-control" placeholder="Teacher's Name" name="name">

 		<hr>

 				<label>Teacher's Description</label>
 		<input type="text" class="form-control" placeholder="Teacher's Specification" name="description">


<hr>
 		<label>Teacher photo </label>
 		<input type="file" name="image">
 		<hr>
 		<input type="submit" class="form-control btn btn-primary" value="Upload" name="">
 	</form> 
 </div>
<div class=" container row">

 <?php
$photo= $class1->teacher(); 

foreach ($photo as $key )
 {
	
	?>

	
  <div class="col-4 shadow">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

      <figure class="">
        <a href="teacher/<?php echo $key['photo']; ?>" >
          <img style="height: 400px; width: 600px;"   src="teacher/<?php echo $key['photo']; ?>"
            class="img-fluid">
        </a>
        <small><?php echo $key['name']; ?></small>
      </figure>
      	<a class="text-danger" href="remove_From_teacher.php?id=<?php echo $key['id']; ?>">Remove</a>

   
     

    </div>

</div>






	<?php
}


 ?>
  </div>
