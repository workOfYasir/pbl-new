<?php

include 'connection.php';

 
	   $student = $_GET['student'];
 
 
 
  
	 	$sql = "update student 
		
		         set 
				 is_dell ='no'
					where 
					s_roll = '$student'
		
		";
			
if ($conn->query($sql) === TRUE) {
 

			
  $sql = "update users 
		
		         set 
				 is_dell ='no'
					where 
					u_idno = '$student'
		
		";
			
	if ($conn->query($sql) === TRUE) {
	     header ("Location:view-trash-students");
	}						
							

} 
 
 ?>