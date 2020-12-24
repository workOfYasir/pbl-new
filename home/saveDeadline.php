<?php
include 'connection.php';

   $level = $_POST['level'];
   $date = $_POST['date']; 
	 
	

$sql = "update course set deadline='$date' where c_level='$level'";
							 

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";
          

} else {
    echo  $conn->error  ;
    
}


?>