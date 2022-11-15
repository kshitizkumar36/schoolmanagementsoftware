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


<div class="text-center">
<!-- 	<h2><b>U-DISE Code: 20220715108</b></h2>
	<br>
	<h2><b>A Co-Educational English Medium School</b></h2>
	<br>
	<h3><b>From Class I to VIII</b></h3>

	 -->

</div>



<div class="container pt-4">
	<div class="text-center d-block w-100 h-100 animated fadeInRight delay-1s">
		<h2><b>Admission & Withdrawal

 in B S Memorial High School Balumath</b></h2>
	</div>
</div>

<hr>
<div class="row">
	<div style="border-style: solid;border-color: black; padding: 10px;" class="col-sm-12 d-block w-100 h-100 animated fadeInLeft delay-1s">
		<p>•	Parents have to submit the duly filled Admission Form along with the fees of the particular Class.
<br><br>•	Once admission is taken, the fees paid shall not be refunded in any case.
<br><br>•	<b>Parents need to submit the following documents of their Child at the time of admission:-</b>
<br><br>	2 Coloured-Passport-sized photographs
<br><br>	Progress Report of the Previous school
<br><br>	Transfer Certificate
<br><br>	Birth Certificate
<br><br>	Aadhaar Card
<h1>Withdrawal</h1>
<br><br>	Parents can give an application for withdrawal of their Child from the School. 
<br><br>	Before this, they will have to pay all the dues to the School. 
<br><br>	Then, they will be given the Transfer Certificate.

</p>
<div class="text-center">
	<a class="form-control btn btn-success" href="admission.php">Admission</a>
</div>
	</div>








</div>






<hr>
<!-- footer -->
<?php include 'include/footer.php';?>





























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