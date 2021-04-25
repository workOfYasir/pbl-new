<?php

include '../connection.php';


	   $name = strtoupper($_POST['name']);
	//    $email = strtoupper($_POST['email']);
       $dean_id = $_GET['dean'];
  		$sql =mysqli_query( $conn,"UPDATE  dean SET 
                            `name`='$name'
                            WHERE `id` = '$dean_id'");
                      
                      
                            if(isset($_POST['depats'])){
                  $sql3 =mysqli_query( $conn,"DELETE FROM dean_dept WHERE  `dean_id`='$dean_id'");
              
	  foreach ($_POST["depats"] as $key =>  $value) {
 

                 $sql2 =mysqli_query( $conn,"INSERT INTO dean_dept SET 
                  `dept_id`='$value',
                  `dean_id`='$dean_id'");
           print_r("INSERT INTO dean_dept SET 
           `dept_id`='$value',
           `dean_id`='$dean_id'");
              }
            }
     
      

 
 
  

			
if ($sql == TRUE) {

      $sql2 = mysqli_query($conn,"UPDATE users SET 
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

       window.location = 'view-all-deans';
}
else{

window.location = 'view-all-deans';
      }
                      
</script>

   ";
    
} 
	

	
	
                                                

 
	   

 
	 
  
          
 
 
 ?>