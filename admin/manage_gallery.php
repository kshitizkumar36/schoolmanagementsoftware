<?php 

include'admin_header.php';
include'class1.php';

$class1 = new class1();


 ?>

 <div class="container border border-primary p-3 ">
 	<form method="post" action="uploadpicbackend.php" enctype="multipart/form-data">
 		<label>Subtitle of the Picture</label>
 		<input type="text" class="form-control" placeholder="Enter Subtitle of the selected Picture" name="title">
 		<hr>
 		<label>Choose Photo to Upload </label>
 		<input type="file" name="image">
 		<hr>
 		<input type="submit" class="form-control btn btn-primary" value="Upload" name="">
 	</form>
 </div>
<div class=" container row">

 <?php
$photo= $class1->gallery();

foreach ($photo as $key )
 {
	
	?>

	
  <div class="col-4 shadow">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

      <figure class="">
        <a href="gallery/<?php echo $key['photo']; ?>" >
          <img style="height: 400px; width: 600px;"   src="gallery/<?php echo $key['photo']; ?>"
            class="img-fluid">
        </a>
        <small><?php echo $key['title']; ?></small>
      </figure>
      	<a class="text-danger" href="remove_from_gallery.php?id=<?php echo $key['id']; ?>">Remove</a>

   
     

    </div>

</div>






	<?php
}


 ?>
  </div>
