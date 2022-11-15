
<?php include'../db.php'; ?>

<?php
					if(isset($_POST['remove']))
					{
						$id= $_POST['id'];
						$query="DELETE FROM `mpd` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
							header("location:Mandatory Public Disclosure.php");
						}

					}

					?>


					<?php 
					if(isset($_POST['removedocs']))
					{
							$id= $_POST['id'];
						$query="DELETE FROM `docs_info` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
							header("location:Documents and information.php");
						}
					}
					 ?>					

					 <?php 
					 if(isset($_POST['cremove']))

					 {
					 		$id= $_POST['id'];
						$query="DELETE FROM `result_academics` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
							header("location:Result and Academics.php");
						}
					 }

					  ?>


					  <?php 
					  if(isset($_POST['dremove']))

					  {
					  		$id= $_POST['id'];
						$query="DELETE FROM `staff_teaching` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
								header("location:staffteaching.php");
						}
					  }

					   ?>


					   <?php 
					   if(isset($_POST['10remove']))
					   {
					   	$id= $_POST['id'];
						$query="DELETE FROM `class10result` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
								header("location:class10result.php");
						}
					   }



					    ?>

					    	   <?php 
					   if(isset($_POST['12remove']))
					   {
					   	$id= $_POST['id'];
						$query="DELETE FROM `class12result` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
								header("location:class12result.php");
						}
					   }



					    ?>


					    <?php 
					    if(isset($_POST['eremove']))
					    {

					    	  	$id= $_POST['id'];
						$query="DELETE FROM `school_infra` WHERE `id`='$id'";
						$run= mysqli_query($connect,$query);
						if($run)
						{
							// header("location:Mandatory Public Disclosure.php");
								header("location:SCHOOL INFRASTRUCTURE.php");
						}
					    }



					     ?>