<?php

include 'connection.php';

 
	   $course = $_GET['course'];
 
 
 
  
	 	$sql = "update course 
		
		         set 
				 is_dell ='yes'
					where 
					c_id = '$course'
		
		";
			
if ($conn->query($sql) === TRUE) {							
 header ("Location:view-all-course");
 
} 
 						

 
 
 ?>