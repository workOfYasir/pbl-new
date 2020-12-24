<?php

include 'connection.php';

 
	   $course = $_GET['course'];
 
 
 
  
	 	$sql = "update course 
		
		         set 
				 is_dell ='no'
					where 
					c_id = '$course'
		
		";
			
if ($conn->query($sql) === TRUE) {
 							
 header ("Location:view-trash-course");
} 
 						

 
 
 ?>