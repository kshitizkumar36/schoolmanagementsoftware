<?php 

include'db.php';

$for_class= $_POST['for_class'];
$session= $_POST['session'];
$a_name= $_POST['a_name'];
$a_dob= $_POST['a_dob'];
$a_uid= $_POST['a_uid'];
$a_bpl= $_POST['a_bpl'];
$Nationality= $_POST['Nationality'];
$Religion= $_POST['Religion'];
$gender= $_POST['gender'];
$birth_place= $_POST['birth_place'];
$Category= $_POST['Category'];

$f_name= $_POST['f_name'];
$f_designation= $_POST['f_designation'];
$f_occupation= $_POST['f_occupation'];
$f_qualification= $_POST['f_qualification'];

$m_name= $_POST['m_name'];
$m_designation= $_POST['m_designation'];
$m_occupation= $_POST['m_occupation'];
$m_qualification= $_POST['m_qualification'];

$g_name= $_POST['g_name'];
$g_designation= $_POST['g_designation'];
$g_relation= $_POST['g_relation'];
$g_mobile= $_POST['g_mobile'];


$vill= $_POST['vill'];
$post= $_POST['post'];
$ps= $_POST['ps'];
$distict= $_POST['distict'];
$pin= $_POST['pin'];

$w_number= $_POST['w_number'];
$m_number= $_POST['m_number'];


$p_school= $_POST['p_school'];
$p_class= $_POST['p_class'];
$p_position= $_POST['p_position'];
$p_grade= $_POST['p_grade'];


$l_year= $_POST['l_year'];
$l_medium= $_POST['l_medium'];
$l_curricular= $_POST['l_curricular'];


$bs_name1= $_POST['bs_name1'];
$bs_ad1= $_POST['bs_ad1'];
$bs_class1= $_POST['bs_class1'];
$bs_ach1= $_POST['bs_ach1'];

$bs_name2= $_POST['bs_name2'];
$bs_ad2= $_POST['bs_ad2'];
$bs_class2= $_POST['bs_class2'];
$bs_ach2=  $_POST['bs_ach2'];






$photo= $_FILES['photo']['name'];
$adhar_photo= $_FILES['adhar_photo']['name'];
$birth_photo= $_FILES['birth_photo']['name'];
$marksheet= $_FILES['marksheet']['name'];
$tc= $_FILES['tc']['name'];


$photo_name= time().$photo;
$adhar_name= time().$adhar_photo;
$birth_pic= time().$birth_photo;
$marksheet_pic= time().$marksheet;
$tc_pic= time().$tc;






$query="INSERT INTO `admission`( `admission_sought_for_class`, `session`, `name_applicant`, `DOB`, `adhar`, `bpl`, `nationality`, `religion`, `gender`, `placeof_birth`, `category`, `father`, `f_designation`, `f_occupation`, `f_qualification`, `mother`, `m_designation`, `m_occupation`, `m_qualification`, `guardian`, `g_designation`, `g_relation_with_app`, `g_mobile`, `vill`, `post`, `police_station`, `distict`, `pincode`, `whatsapp`,`mobile`, `previous_school`, `previous_class`, `previous_postion`, `previous_percentage`, `previous_year`, `previos_medium`, `proficiency`, `bros_sis_name`, `bros_sis_adm_no`, `bros_sis_class`, `bros_sis_position`, `bros_sis_name_2`, `bros_sis_adm_no_2`, `bros_sis_class_2`, `bros_sis_position_2`, `passport_photo`, `adhar_photo`, `birth_certificate`, `marksheet_photo`, `tc`) VALUES ('$for_class','$session','$a_name','$a_dob','$a_uid','$a_bpl','$Nationality','$Religion','$gender','$birth_place','$Category','$f_name','$f_designation','$f_occupation','$f_qualification','$m_name','$m_designation','$m_occupation','$m_qualification','$g_name','$g_designation','$g_relation','$g_mobile','$vill','$post','$ps','$distict','$pin','$w_number','$m_number','$p_school','$p_class','$p_position','$p_grade','$l_year','$l_medium','$l_curricular','$bs_name1','$bs_ad1','$bs_class1','$bs_ach1','$bs_name2','$bs_ad2','$bs_class2','$bs_ach2','$photo_name','$adhar_name','$birth_pic','$marksheet_pic','$tc_pic')";
$run= mysqli_query($connect,$query);
if($run)
{
	  move_uploaded_file($_FILES['photo']['tmp_name'], "a_photos/$photo_name");
	  move_uploaded_file($_FILES['adhar_photo']['tmp_name'], "adhar_photo/$adhar_name");
	  move_uploaded_file($_FILES['birth_photo']['tmp_name'], "birth_photo/$birth_pic");
	  move_uploaded_file($_FILES['marksheet']['tmp_name'], "marksheet_photo/$marksheet_pic");
	  move_uploaded_file($_FILES['tc']['tmp_name'], "tc_photo/$tc_pic");

	  header("location:ad_success.php");

    
}
else
{
	header("location:admission.php");
}














 ?>