<!DOCTYPE html>
<html>
<head>
	<?php include'include/headSection.php'; ?>

	<link rel="stylesheet" type="text/css" href="radio/btnRadio.css">

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
			<span class="animated fadeInLeft delay-2s" style="font-size: 25px;text-align: center;font-family: 'Righteous', cursive;color: #fff;">Contact Us</span>
			
		</div>
	</div>
</div>


<div class="container mt-4">
	<div class="row">

		<!-- <h3 class="mb-4">Our vision is to make world-class private-home-tutoring accessible and affordable by all and to help students:-</h3>  -->

		<div class="col-md-6">
			<p class="p-back">Contact Us</p>
			<!-- <img src="bsm/banner.jpg" class="img-fluid"> -->
			
			<p class="p-back mt-4">School Address</p>
			
			<h3>Chetag Balumath<br>
Latehar Jharkhand  829202<br>
(India)</h3>
<hr>
<h4>Email ID- bsmhighschoolbalumath@gmail.com</h4>
<hr>
<h4>Call Us-  +91-6205280821</h4>

			

		</div>
		<div class="col-md-6">

			<p class="p-back">Quick Enquiry</p>

			<form class="p-3 shadow" method="post">

			
				
				

			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="name" class="form-control" placeholder="Enter Name" name="name">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Email ID</label>
			    <input type="email" class="form-control" placeholder="Enter Email" name="email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Mobile</label>
			    <input type="number" class="form-control" placeholder="Enter Mobile number" name="mobile">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Your Message</label>
			    <textarea class="form-control" placeholder="Enter Your Message" name="msg"></textarea>
			  </div>
			  
			  <button type="submit" class="btn btn-info shadow" name="send">Submit</button>
			</form>

			<?php
			if(isset($_POST['send']))
			{
				$name= $_POST['name'];//
				$from= $_POST['email'];//
				$mobile= $_POST['mobile'];//
				$mes= $_POST['msg'];//
					        $to= "bsmhighschoolbalumath@gmail.com";
					        $sub=$name.$mobile;
					        $headers= "From: $from"."\r\n"."$to"."\r\n";

					        $send= mail($to,$sub,$mes,$headers);
					        if($send)
					        {
					          echo  $ret="Message Sent";
					        }
					        else
					        {
					           echo $ret= "Message Not Sent";
					        }
			}



			?>




		</div>
	</div>
</div>

<hr>



<div class="container-fluid p-0">
	<div class="row no-gutters">
		<div class="col-md-12">
			
			<div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="440" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.6625224631853!2d84.77655651424467!3d23.830596784549943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398b4f8f4d9bcb97%3A0x16e10821b9e2e73d!2sB.S.%20Memorial%20High%20School!5e0!3m2!1sen!2sin!4v1664531382357!5m2!1sen!2sin" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/it/">Embedgooglemaps.com/it/</a> & <a href="http://lasvegasstatistics.embedgooglemaps.com">lasvegastatistics site</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />

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

<script type="text/javascript" src="radio/btnRadio.js"></script>
<script type="text/javascript">
	$('input:radio').radiocharm();

</script>

</body>
</html>