
<?php

 
 include 'connection.php';

$eid = $_GET['eid'];

$sql = "Delete from evaluators where e_id = '$eid'";

if($conn->query($sql) === TRUE){
	
	echo " <script type='text/javascript'>

     
      window.location = 'assign-proj.php';
 
       	               
</script>

         ";
          
     
} 

$conn->close();
?>