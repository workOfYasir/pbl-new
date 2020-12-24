<?php

include 'connection.php';
   $iteration = $_GET['iteration'];
   $course = $_GET['course'];
   $ruberics = $_GET['ruberics'];
    
   
 
$sql = "Delete from iterations_ruberics 
 
 where r_id = '$ruberics'
";	

if ($conn->query($sql) === TRUE) {	

  
   echo " <script type='text/javascript'>

     
      window.location = 'view-iteration-ruberics.php?course=".$course."&iteration=".$iteration."';
 
       	               
</script>

         ";
 
 

}
else{
	
	echo $conn->error;
} 
 
	
	
?>