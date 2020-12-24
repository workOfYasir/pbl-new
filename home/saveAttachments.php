<?php

include 'connection.php';
   $level = $_POST['level'];
   $title = $_POST['title'];         
			  

$filetemp = $_FILES["file"]["tmp_name"];
	$filename = $_FILES["file"]["name"];
   $ext = pathinfo($filename, PATHINFO_EXTENSION);
	
 $size = floor( $_FILES["file"]["size"]/1000);
  
  $target_file= "Attachments/".	$filename ;
  
    
			  
		if (!file_exists($target_file)) 
		
		{
  
		   
			   move_uploaded_file($filetemp, $target_file);
		    
			  
 
			  
			  $sql = "INSERT INTO attachment ( level , fall	 , title , path , size )
							VALUES    ('$level', 'F-19' , '$title' , '$target_file' , '$size')";

if ($conn->query($sql) === TRUE) {	
   
   echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";

}
else{
	
	echo $conn->error;
} 
  }
 
		   else
		   {
    echo "Sorry, file already exists.";
			
		   }
			
	
	
?>