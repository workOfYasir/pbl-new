<?php

include 'connection.php';


 $name = $_POST['Teacher_name'];
	   $dept = $_POST['teacher_dept'];

	
	 	$sql = "INSERT INTO teacher (	t_name	,	t_dept )
							VALUES ('$name','$dept')";
			
if ($conn->query($sql) === TRUE) {
 


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