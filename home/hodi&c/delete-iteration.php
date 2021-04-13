<?php

include 'connection.php';
   $iteration = $_GET['iteration'];
   $course = $_GET['course'];
    
   
 
 
	   
 
 
$sql = "Delete from iterations 
 
 where it_id = '$iteration'
";	

if ($conn->query($sql) === TRUE) {	

 
$sql = "Delete from iterations_ruberics 
 
 where iteration_id = '$iteration'
";	
if ($conn->query($sql) === TRUE) {	

   
   echo " <script type='text/javascript'>

     
      window.location = 'add-new-iteration.php?course=".$course."';
 
       	               
</script>

         ";
}
else{
	
	echo $conn->error;
} 
 

}
else{
	
	echo $conn->error;
} 
 
	
	
?>