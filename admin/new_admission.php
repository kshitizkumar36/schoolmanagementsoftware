<?php 

include'admin_header.php';
include'class1.php';
$class1= new class1();
 ?>

 <table class="table">
  <thead >
    <tr>
      <th scope="col">#</th>
      <th scope="col">Admission Sough for class</th>
      <th scope="col">Session</th>
      <th scope="col">Applicant Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Adhar Number</th>
      <th scope="col">BPL Number</th>
      <th scope="col">Nationality</th>
      <th scope="col">Religion</th>
      <th scope="col">Gender</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Category</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Father's Designation</th>
      <th scope="col">Father's occupation</th>
      <th scope="col">Father's Qualification</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Mother's Designation</th>
      <th scope="col">Mother's Occupation</th>
      <th scope="col">Mother's Qualification</th>
      <th scope="col">Guardian's Name</th>
      <th scope="col">Guardian Designation</th>
      <th scope="col">Relation with Applicant</th>
      <th scope="col">Guardian's Mobile</th>
      <th scope="col">Applicant's Village</th>
      <th scope="col">Post</th>
      <th scope="col">Police Station</th>
      <th scope="col">Distict</th>
      <th scope="col">Pincode</th>
      <th scope="col">Whatsapp Number</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Previous School</th>
      <th scope="col">Previous Class</th>
      <th scope="col">Previous Position</th>
      <th scope="col">Previous Percentage</th>
      <th scope="col">Previous Year</th>
      <th scope="col">Previous Medium</th>
     
      <th scope="col">Proficiency</th>
      <th scope="col">Brother/Sister(styding in BSM)</th>
      <th scope="col">Brother/Sister(Admission Number)</th>
      <th scope="col">Brother/Sister(Class)</th>
      <th scope="col">Brother/Sister(Position)</th>
      <th scope="col">Brother/Sister(studying in BSM)</th>
      <th scope="col">Brother/Sister(Admission Number)</th>
      <th scope="col">Brother/Sister(Class)</th>
      <th scope="col">Brother/Sister(Position)</th>
      <th scope="col">passport Photo</th>
      <th scope="col">Adhar Card</th>
      <th scope="col">Birth Certificate</th>
       <th scope="col">Mark Sheet</th>
        <th scope="col">Tranfer Certificate</th>


    </tr>
  </thead>
  <tbody>

  	<?php

  	$data= $class1->newadmission();
  	foreach ($data as $key) 
  	{
  	  ?>


	  	  <tr>
	      <th scope="row"><?php echo $key['id']; ?></th>
	      <td><?php echo $key['admission_sought_for_class']; ?></td>
	      <td><?php echo $key['session']; ?></td>
	      <td><?php echo $key['name_applicant']; ?></td>
	      <td><?php echo $key['DOB']; ?></td>
	      <td><?php echo $key['adhar']; ?></td>
	      <td><?php echo $key['bpl']; ?></td>
	      <td><?php echo $key['nationality']; ?></td>
	      <td><?php echo $key['religion']; ?></td>
	      <td><?php echo $key['gender']; ?></td>
	      <td><?php echo $key['placeof_birth']; ?></td>
	      <td><?php echo $key['category']; ?></td>
	      <td><?php echo $key['father']; ?></td>
	      <td><?php echo $key['f_designation']; ?></td>
	      <td><?php echo $key['f_occupation']; ?></td>
	      <td><?php echo $key['f_qualification']; ?></td>
	      <td><?php echo $key['mother']; ?></td>
	      <td><?php echo $key['m_designation']; ?></td>
	      <td><?php echo $key['m_occupation']; ?></td>
	      <td><?php echo $key['m_qualification']; ?></td>
	      <td><?php echo $key['guardian']; ?></td>
	      <td><?php echo $key['g_designation']; ?></td>
	      <td><?php echo $key['g_relation_with_app']; ?></td>
	      <td><?php echo $key['g_mobile']; ?></td>
	      <td><?php echo $key['vill']; ?></td>
	      <td><?php echo $key['post']; ?></td>
	      <td><?php echo $key['police_station']; ?></td>
	      <td><?php echo $key['distict']; ?></td>
	      <td><?php echo $key['pincode']; ?></td>
	      <td><?php echo $key['whatsapp']; ?></td>
	      <td><?php echo $key['mobile']; ?></td>
	      <td><?php echo $key['previous_school']; ?></td>
	      <td><?php echo $key['previous_class']; ?></td>
	      <td><?php echo $key['previous_postion']; ?></td>
	      <td><?php echo $key['previous_percentage']; ?></td>
        <td><?php echo $key['previous_year']; ?></td>
        <td><?php echo $key['previos_medium']; ?></td>
        <td><?php echo $key['proficiency']; ?></td>
        <td><?php echo $key['bros_sis_name']; ?></td>
        <td><?php echo $key['bros_sis_adm_no']; ?></td>
        <td><?php echo $key['bros_sis_class']; ?></td>
        <td><?php echo $key['bros_sis_position']; ?></td>
        <td><?php echo $key['bros_sis_name_2']; ?></td>
        <td><?php echo $key['bros_sis_adm_no_2']; ?></td>
        <td><?php echo $key['bros_sis_class_2']; ?></td>
        <td><?php echo $key['bros_sis_position_2']; ?></td>
        <td><img src="a_photos/<?php echo $key['passport_photo']; ?>"></td>
        <td><img src="adhar_photo/<?php echo $key['adhar_photo']; ?>"></td>
        <td><img src="birth_photo/<?php echo $key['birth_certificate']; ?>"></td>
        <td><img src="marksheet_photo/<?php echo $key['marksheet_photo']; ?>"></td>
        <td><img src="tc_photo/<?php echo $key['tc']; ?>"></td>







	    </tr>

  	  <?php
  	}


  	?>
 
  </tbody>
</table>