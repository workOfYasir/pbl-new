<?php

include 'connection.php';
   $title = $_POST['title'];
   $weight = $_POST['weight'];
   $iteration = $_POST['iteration'];
   $course = $_POST['course'];
   $ruberics = $_POST['ruberics'];
   
 
 
	   
 
 

$sql = "
         update iterations_ruberics set
		  r_question =  '$title',
		  weight =  '$weight'
		  where 
		  r_id = '$ruberics'
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