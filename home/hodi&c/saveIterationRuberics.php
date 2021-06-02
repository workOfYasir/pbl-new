<?php

include 'connection.php';
   $title = $_POST['title'];
   $weight = $_POST['weight'];
   $iteration = $_POST['iteration'];
   $course = $_POST['course'];
   $rub5 = $_POST['rub5'];
   $rub4 = $_POST['rub4'];
   $rub3 = $_POST['rub3'];
   $rub2 = $_POST['rub2'];
   $rub1 = $_POST['rub1'];

$sql = "INSERT INTO  iterations_ruberics ( r_question , weight , rub1 , rub2 , rub3 , rub4 ,rub5 , course_id , iteration_id , points ) VALUES ('$title','$weight','$rub1','$rub2','$rub3','$rub4','$rub5','$course','$iteration','5')";	

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