
<?php

 
 include 'connection.php';

$a_id = $_GET['a_id'];



 
$sql = "SELECT * FROM  assign_projects where a_id = '$a_id'";

$result = $conn->query($sql);

   $row = $result->fetch_assoc();
   
   $grpid = $row['grp_id'];
   
   $sql = "update groupleader set position='open' where gid='$grpid'";
							 
if($conn->query($sql) === TRUE){
	
	 
     
}

 	
	$sql = "Delete from  assign_projects where a_id = '$a_id'";


		
		if($conn->query($sql) === TRUE){
	
	echo " <script type='text/javascript'>

     
      window.location = 'assign-proj.php';
 
       	               
</script>

         ";
          
     
} 
    

$conn->close();
?>