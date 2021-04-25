<?php

include '../connection.php';


	   $name = strtoupper($_POST['name']);
	   $email = strtoupper($_POST['email']);
       
  		$sql =mysqli_query( $conn,"INSERT INTO dean SET 
                            `name`='$name'");
    $sql4 =mysqli_query($conn,"SELECT * FROM `dean` ORDER BY id DESC LIMIT 1");
$resultsql4=mysqli_fetch_assoc($sql4);
$id=$resultsql4['id'];
	  foreach ($_POST["depts"] as $key =>  $value) {
     		$sql =mysqli_query( $conn,"INSERT INTO dean_dept SET 
                            `dept_id`='$value',
                            `dean_id`='$id'");
      }

 
 
  

			
if ($sql == TRUE) {

      $sql2 = mysqli_query($conn,"INSERT INTO users SET 
      `u_name`='$name',
      `u_email`='$email' , 
      u_idno='$email' ,
      `u_password`='pbl123*' , 
      `u_type`='HOD', 
      `f_password`='none', 
      `is_dell`='no'");

             
echo " <script type='text/javascript'>

if(window.confirm('New Record Successfully Saved!!!  '))
{

       window.location = 'add-new-hod';
}
else{

window.location = 'add-new-hod';
      }
                      
</script>

   ";
    
} 
	

	
	
                                                

 
	   

 
	 
  
          
 
 
 ?>