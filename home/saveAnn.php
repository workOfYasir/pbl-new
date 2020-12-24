<?php
include 'connection.php';

   $level = $_POST['level'];
   $date = $_POST['date']; 
   $title = $_POST['title']; 
   $editor = $_POST['editor']; 
	 
	

 
$sql = "INSERT INTO annoucement ( level , last_date , title , text , fall )
							VALUES ('$level','$date','$title','$editor','F-19')";							 

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";
          

} else {
    echo  $conn->error  ;
    
}


?>