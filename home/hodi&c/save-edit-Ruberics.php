<?php

include 'connection.php';
   $title = $_POST['title'];
   $weight = $_POST['weight'];
   $level = $_POST['level'];
   $rid = $_POST['rid'];
   
   
 
 
	   
 
 						 
 
$sql = " 
         update ruberics set 
		 r_question='$title',
		 level='$level',
		 weight='$weight'
		 where 
		 r_id='$rid'

";	

if ($conn->query($sql) === TRUE) {	
   
   echo " <script type='text/javascript'>

     
      window.location = 'view-ruberics.php';
 
       	               
</script>

         ";

}
else{
	
	echo $conn->error;
} 
 
	
	
?>