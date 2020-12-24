<?php
include 'connection.php';

   $name = ucwords($_POST['title'] );
   $email = strtoupper($_POST['email']);


   $sql = "INSERT INTO users ( u_name , u_email	,u_idno, u_password , u_type  )
							VALUES ('$name' ,'$email' ,'$email' ,'pbl.321','Evaluator')";							 

if ($conn->query($sql) === TRUE) {

}
   
 
$sql = "INSERT INTO evaluators ( e_name , email	   )
							VALUES ('$name' ,'$email' )";							 

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

     
      window.location = 'assign-proj';
 
       	               
</script>

         ";
          

} else {
    echo  $conn->error  ;
    
}


?>