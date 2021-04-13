<?php

include 'connection.php';


	   $name = strtoupper($_POST['name']);
	   $rollno = strtoupper($_POST['rollno']);
	   $dept = $_POST['dept'];
	   $sec = strtoupper($_POST['section']);
	   $session = strtoupper($_POST['session']);
	   $year = $_POST['year'];
	   $courses = $_POST['courses'];
	   $teachers = $_POST['teachers'];
	   
	   $session = $session."-".$year;


 
 
  
		$sql = "INSERT INTO student (	s_name,	s_roll,s_dept)
							VALUES ('$name','$rollno','$dept')";
			
if ($conn->query($sql) === TRUE) {
 
} 
			

$sql = "INSERT INTO student_course (	s_roll,	s_sec,fall , s_course,teacher )
							VALUES ('$rollno','$sec','$session',' $courses','$teachers')";
	if ($conn->query($sql) === TRUE) {
	}						
							
						
$sql = "INSERT INTO teacher_course (	t_id,	c_id , fall,section )
							VALUES ('$teachers','$courses','$session',' $sec')";
							
	if ($conn->query($sql) === TRUE) {
	}
	
	$email =$rollno."@SUPERIOR.EDU.PK";
	
	$sql = "INSERT INTO users ( u_name,	u_email , u_idno ,u_password , u_type, f_password, is_dell )
							VALUES ('$name','$email','$rollno','pbl123*' , 'Student' , 'none' ,'no')";
							
	if ($conn->query($sql) === TRUE) {
	}
	
	
 
	   

 
	 
  
 
echo " <script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!!  '))
      {
      
       	window.location = 'addnewstu';
}
else
{
	window.location = 'addnewstu';
}
       	               
</script>

         ";
          
 
 
 ?>