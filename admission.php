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
<!-- admission sections starts here -->
    <h3 class="p-3 bg-danger text-white">Fill the following column to apply for admission in B S Memorial High School Balumath</h3>

  <div class="container border border-primary p-3">


    <!-- 1st -->
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <form method="post" action="admission_back.php" enctype="multipart/form-data">
        <label>Admission Sought for class</label>
        <select class="form-control" name="for_class" required="required">
          <?php
          for($i=1;$i<11;$i++)
          {
            ?>
            <option value="<?php echo $i; ?>">Class <?php echo $i; ?></option>

            <?php
          }

          ?>
        </select>
      </div>
      <div class="col-sm-6">
        <label>Session</label>
        <input type="number" class="form-control" name="session"required="required">
      </div>
    </div>

    <!-- end 1st -->


    <!-- 2 -->
    <hr>
    <div class="row">
      <div class="col-sm-3">
        <label>Enter Your Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" name="a_name"required="required">
      </div>
      <div class="col-sm-3">
        <label>Enter DOB</label>
        <input type="date" class="form-control" placeholder="Enter Your Name" name="a_dob"required="required">
      </div>
      <div class="col-sm-3">
        <label>Enter Aadhar Number</label>
        <input type="number" class="form-control" placeholder="Enter Your Aadhar" name="a_uid"required="required">
      </div>
        <div class="col-sm-3">
        <label>Enter BPL Number</label>
        <input type="number" class="form-control" placeholder="Enter Your BPL" name="a_bpl"required="required">
      </div>
    </div>

    <!-- end 2 -->

    <!-- 3 -->
    <hr>
      <div class="row">
      <div class="col-sm-3">
        <label>Nationality</label>
        <input type="text" class="form-control" placeholder="Nationality" name="Nationality"required="required">
      </div>
      <div class="col-sm-3">
        <label>Religion</label>
        <input type="text" class="form-control" placeholder="Religion" name="Religion"required="required">
      </div>
      <div class="col-sm-3">
        <label>Enter Gender</label>
        <select class="form-control" name="gender"required="required">
          <option>Male</option>
          <option>Female</option>
          <option>Trans-gender</option>
        </select>
      </div>
        <div class="col-sm-3">
        <label>Birth Place</label>
        <input type="text" class="form-control" placeholder="Birth Place" name="birth_place"required="required">
      </div>
    </div>

    <!-- end 3 -->

    <!-- 4 -->
    <hr>
      <div class="row">
      <div class="col-sm-12">
        <label>Category</label>
        <select class="form-control" name="Category"required="required">
          <option>ST</option>
          <option>SC</option>
          <option>OBC</option>
          <option>EWS</option>
        </select>
      </div>
     
    </div>
    <!-- end 4 -->

<!-- 5  -->

  <hr>
     <div class="row">
      <div class="col-sm-3">
        <label>Father's Name</label>
        <input type="text" class="form-control" placeholder="Father" name="f_name"required="required">
      </div>
      <div class="col-sm-3">
        <label>Designation</label>
        <input type="text" class="form-control" placeholder="Designation" name="f_designation"required="required">
      </div>
       <div class="col-sm-3">
        <label>Occupation</label>
        <input type="text" class="form-control" placeholder="Occupation" name="f_occupation"required="required">
      </div>
        <div class="col-sm-3">
        <label>Edu. Qualification</label>
        <input type="text" class="form-control" placeholder="Education Qualification" name="f_qualification"required="required">
      </div>
    </div>
<!-- end 5 -->

<!-- 6  -->
<hr>
 <div class="row">
      <div class="col-sm-3">
        <label>Mother's Name</label>
        <input type="text" class="form-control" placeholder="Mother" name="m_name"required="required">
      </div>
      <div class="col-sm-3">
        <label>Designation</label>
        <input type="text" class="form-control" placeholder="Designation" name="m_designation"required="required">
      </div>
       <div class="col-sm-3">
        <label>Occupation</label>
        <input type="text" class="form-control" placeholder="Occupation" name="m_occupation"required="required">
      </div>
        <div class="col-sm-3">
        <label>Edu. Qualification</label>
        <input type="text" class="form-control" placeholder="Education Qualification" name="m_qualification"required="required">
      </div>
    </div>

<!-- end 6 -->


<!-- 7 -->
<hr>
<div class="row">
      <div class="col-sm-3">
        <label>Guardian's Name</label>
        <input type="text" class="form-control" placeholder="Guardian" name="g_name"required="required">
      </div>
      <div class="col-sm-3">
        <label>Designation</label>
        <input type="text" class="form-control" placeholder="Designation" name="g_designation"required="required">
      </div>
       <div class="col-sm-3">
        <label>Relation with applicant</label>
        <input type="text" class="form-control" placeholder="Relation with applicant" name="g_relation"required="required">
      </div>
        <div class="col-sm-3">
        <label> Mobile Number</label>
        <input type="text" class="form-control" placeholder=" Mobile Number" name="g_mobile"required="required">
      </div>
    </div>
<!-- end 7 -->


<!-- 8 -->
<hr>
  <div class="row">
      <div class="col-sm-3">
        <label>Residential Address(Permanent)</label>
        <input type="text" class="form-control" placeholder="village" name="vill"required="required">
      </div>
      <div class="col-sm-3">
        <label>Post</label>
        <input type="text" class="form-control" placeholder="Post" name="post"required="required">
      </div>
       <div class="col-sm-3">
        <label>Police Station</label>
        <input type="text" class="form-control" placeholder="Police Station" name="ps"required="required">
      </div>
        <div class="col-sm-3">
        <label> Pin Code</label>
        <input type="text" class="form-control" placeholder=" Pin Code" name="pin"required="required">
      </div>
    </div>
<!-- end 8 -->
<!-- 9 -->
<hr>
<div class="row">
  <div class="col-sm-4">
        <label>District</label>
        <input type="text" class="form-control" placeholder="District" name="District"required="required">
      </div>
      <div class="col-sm-4">
        <label>Whatsapp Number</label>
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="w_number"required="required">
      </div>
      <div class="col-sm-4">
        <label>Mobile Number</label>
        <input type="text" class="form-control" placeholder="Mobile Number" name="m_number"required="required">
      </div>
    
    </div>
    <!-- end 9 -->

<!-- 10 -->
<hr>
 <div class="row">
      <div class="col-sm-3">
        <label>Name of previous School</label>
        <input type="text" class="form-control" placeholder="Name Of previous School" name="p_school"required="required">
      </div>
      <div class="col-sm-3">
        <label>Class studying /Passed from previous School</label>
        <input type="text" class="form-control" placeholder="Class studying /Passed from previous School" name="p_class"required="required">
      </div>
       <div class="col-sm-3">
        <label>Position Obtained in the last examination</label>
        <input type="text" class="form-control" placeholder="Position Obtained in the last examination" name="p_position"required="required">
      </div>
        <div class="col-sm-3">
        <label> Grade Percentage Obtained in the last examination</label>
        <input type="text" class="form-control" placeholder=" Grade Percentage Obtained in the last examination" name="p_grade"required="required">
      </div>
    </div>

<!-- end 10 -->
<!-- 11 -->
<hr>
 <div class="row">
      <div class="col-sm-4">
        <label>Year of Last Schooling</label>
        <input type="text" class="form-control" placeholder="Year of Last Schooling" name="l_year"required="required">
      </div>
      <div class="col-sm-4">
        <label>Medium of instruction in previous School</label>
        <input type="text" class="form-control" placeholder="Medium of instruction in previous School" name="l_medium"required="required">
      </div>
       <div class="col-sm-4">
        <label>Proficiency in games/Co-curricular Activities/Other outstanding achievements (if any)</label>
        <input type="text" class="form-control" placeholder="Proficiency in games/Co-curricular Activities/Other outstanding achievements (if any)" name="l_curricular">
      </div>
       
    </div>
<!-- end 11 -->


<!-- 12 -->
<hr>
  <label>Particulars of brothers/sisters studying in B S Memorial High School Balumath:</label>
<hr>
 <div class="row">
      <div class="col-sm-3">
        <label>Name of Student</label>
        <input type="text" class="form-control" placeholder="Name of student" name="bs_name1">
        <input type="text" class="form-control" placeholder="Name of student" name="bs_name2">
      </div>
      <hr>
      <div class="col-sm-3">
        <label>Admission Number</label>
        <input type="text" class="form-control" placeholder="Admission Number" name="bs_ad1">
        <input type="text" class="form-control" placeholder="Admission Number" name="bs_ad2">
      </div>
      <hr>
       <div class="col-sm-3">
        <label>Class</label>
        <input type="text" class="form-control" placeholder="Class" name="bs_class1">
        <input type="text" class="form-control" placeholder="Class" name="bs_class2">
      </div>
      <hr>
       <div class="col-sm-3">
        <label>Achievement/Position</label>
        <input type="text" class="form-control" placeholder="Achievement/Position" name="bs_ach1">
        <input type="text" class="form-control" placeholder="Achievement/Position" name="bs_ach2">
      </div>
       
    </div>
<!-- end 12 -->


<!-- 13 -->
<hr>
  <label>Documents Required</label>
  <hr>
 <div class="row">
      <div class="col-sm-2">
        <label>passport size coloured photographs</label>
        <input  class="form-control" type="file" name="photo"required="required">
      </div>
      <div class="col-sm-2">
        <label>Photo of Aadhar Card</label>
          <input class="form-control" type="file" name="Aadhar_photo"required="required"required="required">
      </div>
       <div class="col-sm-2">
        <label>Birth Certificate</label>
          <input class="form-control" type="file" name="birth_photo"required="required">
      </div>
        <div class="col-sm-2">
        <label>Photo Copy of marksheet</label>
         <input class="form-control" type="file" name="marksheet"required="required"required="required">
      </div>
         <div class="col-sm-2">
        <label> Transfer Certificate </label>
          <input class="form-control" type="file" name="tc"required="required">
      </div>
    </div>

<!-- end 13 -->

  <hr>
<input type="submit" class="form-control btn btn-success" value="Apply" name="">

  </div>
</form>


<!-- admission section ends here -->

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