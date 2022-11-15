<?php 

class class1
{
	// function to fetch data for class and subjects
	public function class_subject($class)
	{
		include'../db.php';
		$query="SELECT * FROM `class_subject`WHERE `class`='$class'";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			while($data=mysqli_fetch_array($run))
			{
			$data2[]=$data;
					
			}
		}
		else
		{
			$data2= 0;
		}
		return $data2;
	}

// function to add marks to the subjects
		public function get_entry_marks_for_1($ad_no,$class,$terminal)
	{
		include'../db.php';

		$query="SELECT * FROM `exam_marks`WHERE `ad_no`='$ad_no' AND `class`='$class'AND `terminal`='$terminal' AND `get_internal_marks`='' ";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			$data=mysqli_fetch_array($run);
			
			return $data;
			
		}
		else
		{
			return 0;
		}		
	}
// get information of student
	public function getdetails($ad_no)
	{
		include'../db.php';
		$query="SELECT * FROM `student_table`WHERE `ad_no`='$ad_no'";
		$run= mysqli_query($connect,$query);
		$data= mysqli_fetch_array($run);
		
		
		return $data;
	}


// get grades infor
		public function getgrades($ad_no,$terminal)
	{
		include'../db.php';
		$query="SELECT * FROM `grades_terminalwise`WHERE `ad_no`='$ad_no'AND `terminal`='$terminal'";
		$run= mysqli_query($connect,$query);
		$data= mysqli_fetch_array($run);
		
		
		return $data;
	}
// get exam marks data
	public function get_exam_data($ad_no,$terminal)
	{
		include'../db.php';
		$query="SELECT * FROM `exam_marks` WHERE `ad_no`='$ad_no'AND `terminal`='$terminal'";
		$run= mysqli_query($connect,$query);

		$count= mysqli_num_rows($run);
		if($count>0)
		{
				while($data= mysqli_fetch_array($run))
				{
					$data2[]= $data;

				}
				return $data2;
		}
		else
			return 0;
	}


// marks mathematics
	public function mathematics($ad_no,$terminal)
	{
		include'../db.php';
		
		

	$query1="SELECT SUM(`get_internal_marks`) AS internal_sum FROM `exam_marks`WHERE `ad_no`='$ad_no' AND `terminal`='$terminal'";
		$run1= mysqli_query($connect,$query1);
		$data1= mysqli_fetch_assoc($run1);
		 $sum_internal= $data1['internal_sum'];


				$query2="SELECT SUM(`get_written_marks`) AS written_sum FROM `exam_marks`WHERE `ad_no`='$ad_no' AND `terminal`='$terminal'";
		$run2= mysqli_query($connect,$query2);
		$data2= mysqli_fetch_assoc($run2);
		 $sum_written= $data2['written_sum'];

		$query3="SELECT SUM(`full_internal_marks`) AS total_internal FROM `exam_marks`WHERE `ad_no`='$ad_no' AND `terminal`='$terminal'";
		$run3= mysqli_query($connect,$query3);
		$data3= mysqli_fetch_assoc($run3);
		 $all_internal= $data3['total_internal'];

		$query4="SELECT SUM(`full_written_marks`) AS total_written FROM `exam_marks`WHERE `ad_no`='$ad_no' AND `terminal`='$terminal'";
		$run4= mysqli_query($connect,$query4);
		$data4= mysqli_fetch_assoc($run4);
		 $all_written= $data4['total_written'];


		$obtained_marks= $sum_internal+$sum_written;
		$fullmarks= $all_internal+$all_written;
		$percentage= ($obtained_marks/$fullmarks)*100;

		if($percentage>90)
		{
			$grade="A1";
		}
		elseif ($percentage>80 AND $percentage<91) {
			$grade="A2";
		}
		elseif ($percentage>70 AND $percentage<81) {
			$grade="B1";
		}
		elseif ($percentage>60 AND $percentage<71) {
			$grade="B2";
		}
		elseif ($percentage>50 AND $percentage<61) {
			$grade="C1";
		}
		elseif ($percentage>40 AND $percentage<51) {
			$grade="C2";
		}
		elseif ($percentage>30 AND $percentage<41) {
			$grade="D";
		}
		elseif ($percentage>20 AND $percentage<33) {
			$grade="E1";
		}
		elseif ($percentage>00 AND $percentage<21) {
			$grade="E2";
		}
		

		$query2="UPDATE `grades_terminalwise` SET `total_marks`='$obtained_marks',`percentage`='$percentage',`grade`='$grade' WHERE `ad_no`='$ad_no'AND `terminal`='$terminal'";
		$run2= mysqli_query($connect,$query2);

	}


// get all data from studen table
	public function allstudent()
	{
		include'../db.php';
		$query="SELECT * FROM `student_table`";
		$run= mysqli_query($connect,$query);
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}




// get all new admission data

public function newadmission()
{
	include'../db.php';
	$query= "SELECT * FROM `admission`";
	$run= mysqli_query($connect,$query);
	while($data= mysqli_fetch_array($run))
	{
		$data2[]= $data;
	}

	return $data2;
}











// get data of added candidatea
public function addedstudent()
{
	include'../db.php';
	$query="SELECT * FROM `student_table` ";
	$run= mysqli_query($connect,$query);
	while($data= mysqli_fetch_array($run))
	{
		$data2[]= $data;
	}
	return $data2;

}


// gallery
public function gallery()
{
	include'../db.php';

	$query="SELECT * FROM `gallery`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}

// vacancies

public function vacancies()
{
	include'../db.php';

	$query="SELECT * FROM `vacancies`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}



// notice
public function notice()
{
	include'../db.php';

	$query="SELECT * FROM `notice`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}



// teacher
public function teacher()
{
	include'../db.php';

	$query="SELECT * FROM `teacher`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}




// gallery
public function gallery_front()
{
	include'db.php';

	$query="SELECT * FROM `gallery`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}



// vacancy
public function vacancy_front()
{
	include'db.php';

	$query="SELECT * FROM `vacancies`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}


// notice front
public function notice_front()
{
	include'db.php';

	$query="SELECT * FROM `notice`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}

// teacher front
public function teacher_front()
{
	include'db.php';

	$query="SELECT * FROM `teacher`";
	$run= mysqli_query($connect,$query);
	$count= mysqli_num_rows($run);
	if($count>0)
	{
		while($data= mysqli_fetch_array($run))
		{
			$data2[]= $data;
		}
		return $data2;
	}
	else
	{
		return 0;
	}

}











}


 ?>