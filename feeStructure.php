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
			<span class="animated fadeInLeft delay-2s" style="font-size: 25px;text-align: center;font-family: 'Righteous', cursive;color: #fff;">Fee Structure</span>
			
		</div>
	</div>
</div>


<div class="container mt-4">
	<div class="row">

		<!-- <h3 class="mb-4">Our vision is to make world-class private-home-tutoring accessible and affordable by all and to help students:-</h3>  -->

		<div class="col-md-8">
			<p class="p-back">Rates Depends upon:-</p>
			
			<ul style="color: #4867aa;">
				<li>One’s Qualification</li>
				<li>Entrace Exam's Result</li>
				<li>Last Qualification</li>
				<li>Unit Test Results</li>
				<li>Increments in student quality</li>
				<li>Clarity in Pronunciation</li>
				<li>Educational Background And so many other things</li>
			</ul>

			<!-- <p class="p-back">To strengthen his/her fundamentals-</p>
			<ul>
				<li>By conducting practice tests or mock examinations to assess his/her strengths & weaknesses.</li>
				<li>By teaching examination techniques.</li>
				<li>By constantly motivating & encouraging him/her.</li>
				<li>By eradicating fear of exams.</li>
				
			</ul> -->

			<p class="bg-danger text-light p-4 rounded shadow">.</p>
			
Enroll Yourself in BSM High School Balumath for quality education
		</div>
		<div class="col-md-4">
			<img src="images/teach.jpg" class="img-fluid w-100">
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