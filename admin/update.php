 	<?php
					      		include'../db.php';
					      		if(isset($_POST['infoupdate']))
					      		{
					      			$id=$_POST['id'];
					      			$info= $_POST['info'];
					      			$query="UPDATE `mpd` SET `info`='$info' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Mandatory Public Disclosure.php");
					      			}

					      		}

					      	?>




					      	  	<?php 
					      	if(isset($_POST['updet']))
					      	{
					      		$id= $_POST['id'];
					      		$detail= $_POST['detail'];
					      		$query="UPDATE `mpd` SET `details`='$detail' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Mandatory Public Disclosure.php");
					      			}

					      		
					      	}

					      	?>




					      	<?php

					      	if(isset($_POST['docsupdate']))
					      	{
					      		$id=$_POST['id'];
					      			$docs= $_POST['docs'];
					      			$query="UPDATE `docs_info` SET `docs_info`='$docs' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Documents and information.php");
					      			}

					      	}

					      	?>


					      	<?php

					      	if(isset($_POST['linkupdate']))
					      	{
					      		$id= $_POST['id'];
					      		$links= $_POST['links'];
					      		$query="UPDATE `docs_info` SET `links`='$links' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Documents and information.php");
					      			}
					      	}

					      	?>


					      	<?php 

					      	if(isset($_POST['docscupdate']))
					      	{
					      			$id=$_POST['id'];
					      			$docs= $_POST['docs'];
					      			$query="UPDATE `result_academics` SET `docs`='$docs' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Result and Academics.php");
					      			}
					      	}


					      	 ?>

					      	 <?php 

					      	 if(isset($_POST['linkcupdate']))

					      	 {
					      	 		$id=$_POST['id'];
					      			$links= $_POST['links'];
					      			$query="UPDATE `result_academics` SET `links`='$links' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:Result and Academics.php");
					      			}
					      	 }

					      	  ?>


					      	  <?php
					      	  if(isset($_POST['dinfosub']))
					      	  {
					      	  	$id=$_POST['id'];
					      			$info= $_POST['info'];
					      			$query="UPDATE `staff_teaching` SET `info`='$info' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:staffteaching.php");
					      			}
					      	  }

					      	  ?>


					      	  <?php 
					      	  if(isset($_POST['ddetailssub']))
					      	  {
					      	  	$id=$_POST['id'];
					      			$details= $_POST['details'];
					      			$query="UPDATE `staff_teaching` SET `details`='$details' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:staffteaching.php");
					      			}
					      	  }

					      	   ?>


					      	   <?php 
					      	   if(isset($_POST['einfoup']))
					      	   {
					      	   		$id=$_POST['id'];
					      			$info= $_POST['info'];
					      			$query="UPDATE `school_infra` SET `info`='$info' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:SCHOOL INFRASTRUCTURE.php");
					      			}
					      	   }


					      	    ?>


					      	   <?php 
					      	   if(isset($_POST['edetup']))
					      	   {
					      	   		$id=$_POST['id'];
					      			$detail= $_POST['detail'];
					      			$query="UPDATE `school_infra` SET `detail`='$detail' WHERE `id`='$id'";
					      			$run= mysqli_query($connect,$query);
					      			if($run)
					      			{
					      				header("location:SCHOOL INFRASTRUCTURE.php");
					      			}
					      	   }


					      	    ?>