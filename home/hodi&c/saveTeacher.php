<?php

include 'connection.php';


 $name = $_POST['Teacher_name'];
	   $dept = $_POST['teacher_dept'];
$email=$_POST['email'];
	
	 	$sql = "INSERT INTO teacher (	t_name	,	t_dept )
							VALUES ('$name','$dept')";
			
if ($conn->query($sql) === TRUE) {
 
	
	$sql = "INSERT INTO users SET 
                            `u_name`='$name',
                            `u_email`='$email' , 
                            u_idno='$email' ,
                            `u_password`='pbl123*' , 
                            `u_type`='Evaluator', 
                            `f_password`='none', 
                            `is_dell`='no'";
                                                

echo " <script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!!  '))
      {
      
       	window.location = 'view-all-teachers';
}
else
{
	window.location = 'view-all-teachers';
}
       	               
</script>

         ";
}
          
 
 
 ?>