<?php

include 'connection.php';
   $title = $_POST['title'];
   $editor = $_POST['editor'];         
   $iteration = $_GET['iteration'];         
   $course = $_GET['course'];         
			  
 
	 
			  
   
 
  $sql = " 
              update iterations set
			   it_title = '$title',
			   it_details = '$editor'
			   where 
			   it_id = '$iteration'
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
 
	
	
?>