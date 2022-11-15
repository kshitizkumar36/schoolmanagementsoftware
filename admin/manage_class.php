<?php 
include('admin_header.php');
include'class1.php';
$class1= new class1();
 ?>


 <div class="container ">
 	<div class="row">
 		<div class="col-sm-3">
 		</div>

 		<div class="col-sm-6 col-12 shadow border p-2">
 			<form method="post" action="manage_classbackend.php">
 				<label>Choose Class</label>
 				<select name= "class" class="form-control">
          <option>Choose</option>
          <option>Play School</option>
          <option>Nursary</option>
          <option>LKG</option>
          <option>UKG</option>
 					<option>class 1</option>
 					<option>class 2</option>
 					<option>class 3</option>
 					<option>class 4</option>
 					<option>class 5</option>
 					<option>class 6</option>
 					<option>class 7</option>
 					<option>class 8</option>
 					<option>class 9</option>
 					<option>class 10</option>
 				</select>

 				<hr>
 				<label>Add Subject in selected class</label>
 				<input name="subject" type="text" class="form-control" placeholder="Mention Subject" name="">

 				<hr>
 				<input type="submit" class="btn btn-primary form-control" value="Add Subject" name="">
 			</form>
 		</div>



 		<div class="col-sm-3">
 		</div>
 	</div>
 </div>


 <!-- fetching starts here -->
 <hr>
 <table class="table">
  <thead>
    <tr>
       <th scope="col">Play School</th>
        <th scope="col">Nursary</th>
         <th scope="col">LKG</th>
          <th scope="col">UKG</th> 
      <th scope="col">class 1</th>
      <th scope="col">class 2</th>
      <th scope="col">class 3</th>
      <th scope="col">class 4</th>
      <th scope="col">class 5</th>
      <th scope="col">class 6</th>
      <th scope="col">class 7</th>
      <th scope="col">class 8</th>
      <th scope="col">class 9</th>
      <th scope="col">class 10</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$data= $class1->class_subject("class 1");
  	?>
    <tr>



         <td><?php  
      $data= $class1->class_subject("Play School");
      foreach ($data as $key) 
     {
        if($sub= $key['subject']==0)
        {
          echo"No Subject";
        }
          {
          $sub_id= $key['id'];
          print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
          ?>

          

          <?php 
        }
        
        
        echo"</br>";
      }

      ?></td>


   <td><?php  
      $data= $class1->class_subject("Nursary");
      foreach ($data as $key) 
     {
        if($sub= $key['subject']==0)
        {
          echo"No Subject";
        }
          {
          $sub_id= $key['id'];
          print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
          ?>

          

          <?php 
        }
        
        
        echo"</br>";
      }

      ?></td>



   <td><?php  
      $data= $class1->class_subject("LKG");
      foreach ($data as $key) 
     {
        if($sub= $key['subject']==0)
        {
          echo"No Subject";
        }
          {
          $sub_id= $key['id'];
          print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
          ?>

          

          <?php 
        }
        
        
        echo"</br>";
      }

      ?></td>


         <td><?php  
      $data= $class1->class_subject("UKG");
      foreach ($data as $key) 
     {
        if($sub= $key['subject']==0)
        {
          echo"No Subject";
        }
          {
          $sub_id= $key['id'];
          print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
          ?>

          

          <?php 
        }
        
        
        echo"</br>";
      }

      ?></td>





      <td><?php  
      $data= $class1->class_subject("class 1");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 2");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      	else
      	{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	echo"</br>";
      }

      ?></td>

       <td><?php  
      $data= $class1->class_subject("class 3");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>

       <td><?php  
      $data= $class1->class_subject("class 4");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 5");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 6");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 7");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 8");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 9");
      foreach ($data as $key) 
     {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>
       <td><?php  
      $data= $class1->class_subject("class 10");
      foreach ($data as $key) 
      {
      	if($sub= $key['subject']==0)
      	{
      		echo"No Subject";
      	}
      		{
      		$sub_id= $key['id'];
      		print_r($key['subject']);?> <a class="text-danger" href="removesubject.php?sub_id= <?php print_r($sub_id); ?>"> X<a><?php 
      		?>

      		

      		<?php	
      	}
      	
      	
      	echo"</br>";
      }

      ?></td>

    </tr>
   
  </tbody>
</table>