<?php

include 'connection.php';

 
	   $dean_id = $_GET['dean'];
 
 
 
  
 	$sql = "update dean 
		
		         set 
				 is_dell ='yes'
					where 
					t_id = '$teacher'
		
		";
			
if ($conn->query($sql) === TRUE) {
	  header ("Location:view-all-teachers");
 
} 
 						
							

 
 
 ?>