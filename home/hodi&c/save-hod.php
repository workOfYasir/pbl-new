<?php

include '../connection.php';


	   $name = strtoupper($_POST['name']);
	   $email = strtoupper($_POST['email']);
	   $dept = $_POST['dept'];
	   
	  

 
 
  
		$sql =mysqli_query( $conn,"INSERT INTO hods SET 
                            `name`='$name',
                            `dept_id`='$dept'");
			
if ($sql == TRUE) {
      $sql2 = mysqli_query($conn,"INSERT INTO users SET 
      `u_name`='$name',
      `u_email`='$email' , 
      u_idno='$email' ,
      `u_password`='pbl123*' , 
      `u_type`='HOD', 
      `f_password`='none', 
      `is_dell`='no'");
      if($sql2){
             
echo " <script type='text/javascript'>

if(window.confirm('New Record Successfully Saved!!!  '))
{

       window.location = 'add-new-hod';
}";}else{
echo "

window.location = 'add-new-hod';

                      
</script>

   ";
}
     
} 
	

	
	
                                                

 
	   

 
	 
  
          
 
 
 ?>