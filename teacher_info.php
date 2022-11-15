 <!DOCTYPE html>
<html>
<head>
	<?php include'include/headSection.php'; ?>
	<style type="text/css">
		.p-back
		{
			background: #4867aa;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4867aa, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4867aa, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	padding: 15px;
	color: #fff;
	border-radius: 10px;

		}
	</style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
<div class="container">
<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">
<div class="row">


<?php
include'admin/class1.php';
$class1 = new class1();

$photo= $class1->teacher_front();

foreach ($photo as $key)
 {
  ?>


 <div class="col-12 shadow">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">
    	<h5 class="text-danger"><b><?php echo $key['name']; ?></b></h5>
      <p><?php echo $key['about']; ?></p>
    	<br>
    	<br><br>
<hr>
      <figure class="">
        <a href="admin/notice/<?php echo $key['photo']; ?>" >
          <img style="height: 400px; width: 1200px;"   src="admin/teacher/<?php echo $key['photo']; ?>"
            class="img-fluid">
        </a>
      </figure>

     

    </div>

</div>






  <?php
}




?>





    </div>

  </div>
</div>
</div></div>





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



<!-- gallery -->

<script >
$(function () {
 $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- ///end of gallery -->
<!-- end of counter -->

</body>
</html>