<?php

include 'connection.php';


$name = strtoupper($_POST['name']);
$email = strtoupper($_POST['email']);
$dept = $_POST['dept'];

	
	 	$sql = "INSERT INTO teacher (	t_name	,	t_dept )
							VALUES ('$name','$dept')";
			
			if ($conn->query($sql) === TRUE) {
 
			} 
				
			
				
				$sql = "INSERT INTO users SET 
										`u_name`='$name',
										`u_email`='$email' , 
										u_idno='$email' ,
										`u_password`='pbl123*' , 
										`u_type`='Evalluator', 
										`f_password`='none', 
										`is_dell`='no'";
															
			
			 
				   
			
			 
				 
			  
			 
			echo " <script type='text/javascript'>
			
				  if(window.confirm('New Record Successfully Saved!!!  '))
				  {
				  
					   window.location = 'add-new-teacher';
			}
			else
			{
				window.location = 'add-new-teacher';
			}
									  
			</script>
			
					 ";
					  
			 
			 
			 ?>