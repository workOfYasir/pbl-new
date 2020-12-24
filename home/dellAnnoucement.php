
<?php

 
 include 'connection.php';

$aid = $_GET['aid'];

$sql = "Delete from annoucement where a_id = '$aid'";

if($conn->query($sql) === TRUE){
	
	echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";
          
     
} 

$conn->close();
?>