<?php
include 'connection.php';

   $name = $_POST['name'];
	   $level = $_POST['level'];
	   $max = $_POST['max'];
	   $min = $_POST['min'];
	

$sql = "INSERT INTO course			(c_name ,c_level ,c_max , c_min)        
							VALUES ('$name','$level', '$max','$min')";

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!! Click Ok for Show Record Click Cancel For Add Another'))
      {
      
       	window.location = 'view-all-course';
}
else
{
	window.location = 'view-all-course';
}
       	               
</script>

         ";
          

} else {
    echo "<script type='text/javascript'>alert(<?php echo 'Error: $conn->error <br>  $sql'; ?>);</script>";
    
}


?>