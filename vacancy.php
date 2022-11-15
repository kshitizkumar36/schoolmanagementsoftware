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

include 'include/uptoNavigation.php';

	?>


<h3 class="bg-primary p-3 text-white">The Vacancies for B S Memorial High School Balumath are following...</h3>









<hr>











<div class="container">
<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">
<div class="row">


<?php
include'admin/class1.php';
$class1 = new class1();

$photo= $class1->vacancy_front();

foreach ($photo as $key)
 {
  ?>


 <div class="col-12 shadow">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">
    	<h2 class="text-danger"><b><?php echo $key['title']; ?></b></h2>
    	<br>
    	<small>Post Date:  <?php echo $key['time']; ?></small>
    	<br><br>

      <figure class="">
        <a href="admin/vacancies/<?php echo $key['photo']; ?>" >
          <img style="height: 400px; width: 1200px;"   src="admin/vacancies/<?php echo $key['photo']; ?>"
            class="img-fluid">
        </a>
      </figure>

   	<small>Call on: <a href="tel:+91 6205280821">+91 6205280821</a> to know more.</small>
     

    </div>

</div>






  <?php
}




?>





    </div>

  </div>
</div>
</div></div>





<!-- footer -->
<?php include 'include/footer.php';?>
<!-- end of footer -->



 
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