<?php

include 'connection.php';
   $title = $_POST['title'];
   $weight = $_POST['weight'];
   $level = $_POST['level'];
   
   
 
 
	   
 
 
$sql = "INSERT INTO  ruberics ( r_question , level , point	   , weight )
							VALUES ('$title','$level','5','$weight')";	

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