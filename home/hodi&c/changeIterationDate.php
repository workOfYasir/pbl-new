<?php

include 'connection.php';
   $it_id = $_GET['it_id'];
   $course = $_GET['course'];
   $date = $_GET['date'];
 
 
	   
 
 
 $sql = "Update    iterations  set
							deadline = '$date'
							where it_id = '$it_id'";

if ($conn->query($sql) === TRUE) {	
   
   echo " <script type='text/javascript'>

     
      window.location = 'add-new-iteration.php?course=".$course."';
 
       	               
</script>

         ";

}
else{
	
	echo $conn->error;
} 
 
	
	
?>