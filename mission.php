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
<!-- end of navigation -->

<!-- banner -->
<?php
//include 'include/banner.php';
?>
<!-- end of banner -->

<div class="container-fluid  bg-info" style="">
	<div style="background-color: #4867aa;" class="row p-5">
		<div class="col-md-12 d-flex align-items-center justify-content-center">
			<span class="animated fadeInLeft delay-2s" style="font-size: 25px;text-align: center;font-family: 'Berlin Sans FB Demi', cursive;color: #fff;">Aims & Objectives of the School</span>
			
		</div>
	</div>
</div>


<div class="container mt-4">
	<div class="row">


		<div class="col-md-8">
			<p style="font-family: Berlin Sans FB Demi;" class="p-back">Aims & Objectives</p>
			
			<ul style="color: #4867aa;">
				<li  style="font-family: Berlin Sans FB Demi font-size:15px;">To prepare the students for their future with simple discipline. .</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To inculcate in every student a spirit of excellence in academics as well as in co-curriculum activities..</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To inculcate in every student a high level of morality and integrity to lead a virtuous life..</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To instill in every student the sense of nationalism and brotherhood as well as respect for ‘Unity in Diversity’.</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To create a congenial environment for the development of physical, mental, social and spiritual aspects of human existence in every student..</li>
			</ul>

			<p style="font-family: Berlin Sans FB Demi font-size:px;" class="p-back">Steps to climb the ladder of success -</p>
			<ul style="color: #4867aa;">
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To instill confidence and positivity in students for their growth and to serve the nation in the best possible way..</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To create an environment where students can explore their inherent qualities and boost them for their bright future..</li>
				<li style="font-family: Berlin Sans FB Demi font-size:15px;">To instill confidence and positivity in students for their growth and to serve the nation in the best possible way.</li>
				
			</ul>

			

		</div>
		<div class="col-md-4">
			<img style="height: 400px;width: 100% ;border-radius: 5px;" src="new_daata/Maths Lab..jpg" class="img-fluid w-100">
		</div>
	</div>
</div>



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
<!-- end of counter -->

</body>
</html>