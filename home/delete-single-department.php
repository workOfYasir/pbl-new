<?php

include 'connection.php';

 
	   $department = $_GET['department'];
 
 
 
  
	 	$sql = "update department 
		
		         set 
				 is_dell ='yes'
					where 
					dept_id = '$department'
		
		";
			
if ($conn->query($sql) === TRUE) {
  header ("Location:view-all-dept");
} 
 						
							

 
 
 ?>