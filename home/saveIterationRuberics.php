<?php

include 'connection.php';
   $title = $_POST['title'];
   $weight = $_POST['weight'];
   $iteration = $_POST['iteration'];
   $course = $_POST['course'];
   
 
 
	   
 
 
$sql = "INSERT INTO  iterations_ruberics ( r_question , weight , course_id , iteration_id , points )
							VALUES ('$title','$weight','$course','$iteration','5')";	

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