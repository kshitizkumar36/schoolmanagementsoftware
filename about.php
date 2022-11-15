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
		<h2><b>The School and Introduction</b></h2>
	</div>
</div>

<hr>
<div class="row">
	<div style="font-size: 15px;" class="col-sm-6 d-block w-100 h-100 animated fadeInLeft delay-1s display-4 ">
		<p style="text-align: justify;">B S Memorial High School Balumath is an ideal educational institution. The School is dedicated to provide quality education based on human values. The School has modern facilities for children like Computer Lab., Science Laboratory, Digital Classroom, Library and many more. It provides a happy caring and stimulating environment where children recognize and achieve their full potential, so that they can make their best contributions to the society. Children are encouraged to become responsible and self-reliant and are taught to assimilate the larger communities which they belong to. 
		Through this school, a high standard of behavior is maintained and children are taught to give respect to their elders and to appreciate and regard the opinion of others. Thus, discipline plays a vital role in our institution. Since its establishment, the School has got the credit to build up strong foundation of many human brains in the society such as Engineer, Doctor, Teacher, Police Officer, Administrator, Social Worker, etc. All are working in various parts of the nation for its development.
</p>
	</div>


	<div class="col-sm-6 d-block w-100 h-100 animated fadeInLeft delay-1s">
		<img class="shadow" style="height: 200px;" src="new_daata/balumath exhibition.jpg">
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