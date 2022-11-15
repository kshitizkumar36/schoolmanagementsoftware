<?php 
class class1
{
	// get student
	public function getstudent($ad_no)
	{
		include'db.php';
		$query="SELECT * FROM `student_table`WHERE 	`ad_no`='$ad_no'";
		$run= mysqli_query($connect,$query);
		$data= mysqli_fetch_array($run);
		return $data;
	}


	// get student result
	public function result($ad_no,$terminal)
	{
		include'db.php';
		$query="SELECT * FROM `exam_marks` WHERE `ad_no`='$ad_no'AND `terminal`='$terminal'";
		$run= mysqli_query($connect,$query);
		$count= mysqli_num_rows($run);
		if($count>0)
		{
			while($data1= mysqli_fetch_array($run))
			{
				$data2[]= $data1;
			}
			return $data2;
		}
		else
		{
			return 0;
		}
	}


	// get grading
	public function grading($ad_no,$terminal)
	{
		include'db.php';
		$query="SELECT * FROM `grades_terminalwise`WHERE `ad_no`='$ad_no' AND `terminal`='$terminal'";
		$run= mysqli_query($connect,$query);
		$data= mysqli_fetch_array($run);
		return $data;
	}


}
 ?>