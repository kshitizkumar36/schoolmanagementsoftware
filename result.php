




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
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="resultbackend.php">
				<label>Choose Your class</label>
				<select class="form-control" name="class">
					<?php  
					for($i=1;$i<=10;$i++)
					{
						?>
						<option>class <?php echo $i; ?></option>


						<?php
					}

					?>
				</select>
				<hr>
				<label>Enter Your Admission Number</label>
				<input type="text" class="form-control" placeholder="Admission Number" name="ad_no">
				<br>
				<label>Enter Your DOB</label>
				<input type="date" class="form-control" placeholder="Dob" name="dob">
				<hr>
				<input type="submit" class="form-control btn btn-primary" value="View Result" name="">
			</form>
		</div>
		<div class="col-sm-3"></div>
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