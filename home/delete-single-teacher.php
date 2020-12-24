<?php

include 'connection.php';

 
	   $teacher = $_GET['teacher'];
 
 
 
  
 	$sql = "update teacher 
		
		         set 
				 is_dell ='yes'
					where 
					t_id = '$teacher'
		
		";
			
if ($conn->query($sql) === TRUE) {
	  header ("Location:view-all-teachers");
 
} 
 						
							

 
 
 ?>