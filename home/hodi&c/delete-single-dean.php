<?php

include 'connection.php';

 
	   $dean_id = $_GET['dean'];
 
 
 
  
 	$sql = "update dean 
		
		         set 
				 is_dell ='yes'
					where 
					id = '$dean_id'
		
		";
			
if ($conn->query($sql) === TRUE) {
	  header ("Location:view-all-teachers");
 
} 
 						
							

 
 
 ?>