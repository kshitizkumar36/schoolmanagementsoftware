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
		<h2><b>Examination & Promotion

 in B S Memorial High School Balumath</b></h2>
	</div>
</div>

<hr>
<div class="row">
<!-- 	<div style="border-style: solid;border-color: black; padding: 10px;" class="col-sm-12 d-block w-100 h-100 animated fadeInLeft delay-1s">
	




	</div> -->



</div>







<div class="text-center">
	<h2>TERM 1</h2>
</div>
<table class="table border border-dark">
  <thead>
    <tr>
      <th scope="col">SL. NO.</th>
      <th scope="col">PARTICULARS OF EXAMS</th>
      <th scope="col">MARKS</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    	<td>1</td>
      <td>Periodic Assessment</td>
      <td>20</td>
    </tr>

     <tr>
    	<td>2</td>
      <td>Half Yearly Exam</td>
      <td>80</td>
    </tr>





  </tbody>
</table>




<div class="text-center">
	<h2>TERM 2</h2>
</div>
<table class="table border border-dark">
  <thead>
    <tr>
      <th scope="col">SL. NO.</th>
      <th scope="col">PARTICULARS OF EXAMS</th>
      <th scope="col">MARKS</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    	<td>3</td>
      <td>Perioic Assessment </td>
      <td>20</td>
    </tr>

     <tr>
    	<td>4</td>
      <td>Annual Exam</td>
      <td>80</td>
    </tr>

    



  </tbody>
</table>




<!-- 
<div class="container">
	<div class="text-center border border-dark">
		<h2>TERM -1</h2>
	</div>

	<div class="row">
		<div class="col-sm-2 border border-dark">
			<h2><b>Sl. No.</b></h2>
		</div>
		<div class="col-sm-8 border border-dark">
			<h2><b>Particulars of Exams.</b></h2>
		</div>
		<div class="col-sm-2 border border-dark">
			<h2><b>Marks.</b></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2 border border-dark">
			<h2><b>1.</b></h2><br>
			<h2><b>2.</b></h2>
		</div>
		<div class="col-sm-8 border border-dark">
			<p>Periodic Assessment</p><br>
			<p>Half Yearly Exam</p>
			</div>
		<div class="col-sm-2 border border-dark">
			<p>20</p><br>
			<p>80</p>
		</div>
	</div>

</div>





<div class="container">
	<div class="text-center border border-dark">
		<h2>TERM -2</h2>
	</div>

	<div class="row">
		<div class="col-sm-2 border border-dark">
			<h2><b>Sl. No.</b></h2>
		</div>
		<div class="col-sm-8 border border-dark">
			<h2><b>Particulars of Exams.</b></h2>
		</div>
		<div class="col-sm-2 border border-dark">
			<h2><b>Marks.</b></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2 border border-dark">
			<h2><b>3.</b></h2><br>
			<h2><b>4.</b></h2>
		</div>
		<div class="col-sm-8 border border-dark">
			<p>Periodic Assessment Pen-Paper Test/Notebook Assessment/Subject Enrichment</p><br>
			<p>Annual Exam</p>
			</div>
		<div class="col-sm-2 border border-dark">
			<p>20</p><br>
			<p>80</p>
		</div>
	</div>
 -->



<div style="font-size:17px;" class="container display-4">
	<b>Note -</b>
	<p>
			•	Re-examination will not be conducted for absent students. So, presence of every student in the examination is compulsory.
<br>•	A student must score atleast 40 percent of marks to pass the exam and get promoted in the next class.

	</p>
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