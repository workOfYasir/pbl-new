
<?php

 
 include 'connection.php';

$path = $_GET['path'];

 
 
$sql = "Delete from attachment where path = '$path'";

if($conn->query($sql) === TRUE){
}
 
 	if (file_exists($path)) 
		
		{
if (!unlink($path)) {
  echo ("Error deleting File");
} else {

 


 
	
	echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";
          
     
} 
		}
		
	echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";

$conn->close();
?>