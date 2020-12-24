<?php
include 'connection.php';
 
 $sec =  $_POST['section'];
 $evaluator =  $_POST['evaluator'];
 
foreach ($_POST['path'] as $grpid)
{
	
  $sql = "INSERT INTO assign_projects	(e_id ,grp_id ,section , course , fall)        
							VALUES ('$evaluator','$grpid', '$sec','3','F-19')";
	
if ($conn->query($sql) === TRUE) {
	
$sql = "update groupleader set position='done' where gid='$grpid'";
							 

if ($conn->query($sql) === TRUE) {
}
 	
 
} 
}


  
   echo " <script type='text/javascript'>

       
     	window.location = 'assign-proj.php';
     	               
</script>

         ";
          
   
   
 


?>