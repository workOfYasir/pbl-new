<?php
error_reporting(0);
include 'connection.php';


	   $dept = $_POST['dept'];
	   $sec = strtoupper($_POST['sec']);
	   $session = strtoupper($_POST['session']);
	   $year = $_POST['year'];
	   $courses = $_POST['courses'];
	   $teachers = $_POST['teachers'];
	   
	   $session = $session."-".$year;


require_once 'classes/PHPExcel/IOFactory.php';

if(isset($_FILES['excel'])&& !empty($_FILES['excel']['tmp_name']))
{

   $excelObj = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
   $getSheeet = $excelObj->getActiveSheet()->toArray(null);
	
 
	//echo var_dump($getSheeet);
	
$count = sizeof($getSheeet );
	
	$i=0;
	
	
	while ($i < $count)
	{
		
		$k=0;
		 
		$catee=strtoupper($getSheeet[$i][$k]);
	
		$k=$k+1;
		
		$cnicc =strtoupper($getSheeet[$i][$k]);
	
		$sql = "INSERT INTO student (	s_name,	s_roll,s_dept)
							VALUES ('$catee','$cnicc','$dept')";
			
if ($conn->query($sql) === TRUE) {
 
} 
			

$sql = "INSERT INTO student_course (	s_roll,	s_sec,fall , s_course,teacher )
							VALUES ('$cnicc','$sec','$session',' $courses','$teachers')";
	if ($conn->query($sql) === TRUE) {
	}						
							
						
$sql = "INSERT INTO teacher_course (	t_id,	c_id , fall,section )
							VALUES ('$teachers','$courses','$session',' $sec')";
							
	if ($conn->query($sql) === TRUE) {
	}
	
	$email =$cnicc."@SUPERIOR.EDU.PK";
	
	$sql = "INSERT INTO users ( u_name,	u_email , u_idno ,u_password , u_type, f_password, is_dell )
							VALUES ('$catee','$email','$cnicc','pbl123*' , 'Student' , 'none' ,'no')";
							
	if ($conn->query($sql) === TRUE) {
	       $i=$i+1;
	}
	
	
    
	   

	}
	 
  
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