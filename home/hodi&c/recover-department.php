<?php

include 'connection.php';

 
	   $department = $_GET['department'];
 
 
 
  
 	$sql = "update department 
		
		         set 
				 is_dell ='no'
					where 
					dept_id = '$department'
		
		";
			
if ($conn->query($sql) === TRUE) { header ("Location:view-trash-department");
 
} 
 						
							

 
 
 ?>