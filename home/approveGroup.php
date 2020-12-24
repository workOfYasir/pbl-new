<?php
include 'connection.php';

$gid = $_GET['gid'];
$q="UPDATE `groupleader` SET `approve_status`=1
WHERE gid='$gid'";
if ($conn->query($q) === TRUE) {
   
    echo " <script type='text/javascript'>
 
      
       window.location = 'evaluator-index.php';
        
                           
 </script>
 
          ";
           
 
 } else {
     echo  $conn->error  ;
     
 }
 

?>