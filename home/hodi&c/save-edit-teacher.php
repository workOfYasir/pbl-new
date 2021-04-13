<?php

include 'connection.php';



 $teacher = $_GET['teacher'];
 $name = $_POST['Teacher_name'];
	   $dept = $_POST['teacher_dept'];

	
	  	$sql = "update 
		teacher
		set
		t_name='$name'	,	
		t_dept ='$dept'
	     where 
		 t_id='$teacher'
		 
	   ";
			
if ($conn->query($sql) === TRUE) {
 


echo " <script type='text/javascript'>

      if(window.confirm('Update Record Successfully Saved!!!  '))
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