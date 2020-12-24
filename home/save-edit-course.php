<?php
include 'connection.php';

   $course = $_GET['course'];
   $name = $_POST['name'];
	   $level = $_POST['level'];
	   $max = $_POST['max'];
	   $min = $_POST['min'];
	

$sql = "update   course		set	

           c_name ='$name' ,
		   c_level= '$level' ,
		   c_max ='$max',
		   c_min ='$min'
               
  		   where 
		    
			c_id = '$course'
			";

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

      if(window.confirm('Update Record Successfully Saved!!!  '))
      {
      
       	window.location = 'view-all-course';
}
else
{
	window.location = 'view-all-course';
}
       	               
</script>

         ";
          

}  


?>