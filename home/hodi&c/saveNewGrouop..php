<?php
include 'connection.php';

   $title = $_POST['title'];
   $fall = $_POST['fall'];
   $section = $_POST['section'];
   $course = $_POST['course'];
   $member = $_POST['member'];
	 
	

$sql = "INSERT INTO groupleader (fall , course , section , member , proj)
							VALUES ('$fall','$course','$section','$member','$title')";

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

  
	window.location = 'manage-groups.php?fall=".$fall."&&sec=".$section."&&cour=".$course."';
 
       	               
</script>

         ";
          

} else {
    echo  $conn->error  ;
    
}


?>