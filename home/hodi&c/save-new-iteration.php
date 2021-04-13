<?php

include 'connection.php';
   $title = $_POST['title'];
   $course = $_POST['course'];         
   $editor = $_POST['editor'];         
   $date = $_POST['date'];         
			  

$filetemp = $_FILES["file"]["tmp_name"];
	$filename = $_FILES["file"]["name"];
   $ext = pathinfo($filename, PATHINFO_EXTENSION);
	
 $size = floor( $_FILES["file"]["size"]/1000);
  
  $target_file= "iterations/".	$filename ;
  
    
		 
		   
			   move_uploaded_file($filetemp, $target_file);
		    
			  
 
			  
  $sql = "INSERT INTO  iterations ( it_title , it_details	 ,
  course_id , file , deadline ,fall,size )
							VALUES    ('$title' , '$editor' , 
 '$course','$target_file','$date','F-19' , '$size')";

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