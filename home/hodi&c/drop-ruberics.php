<?php

include 'connection.php';
 
   $ruberics = $_GET['ruberics'];
    
   
 
$sql = "Delete from ruberics 
 
 where r_id = '$ruberics'
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