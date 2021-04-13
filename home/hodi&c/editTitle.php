<?php
include 'connection.php';

$gid = $_POST['gid'];
$proj =$_POST['proj'];
//echo $proj; die();
$fall = $_POST['fall'];
$section = $_POST['section'];
$course = $_POST['course'];
$member = $_POST['member'];
  
$q="UPDATE `groupleader` SET `proj`='$proj'
WHERE gid='$gid'";

// $res=mysqli_query($conn,$q);
if ($conn->query($q) === TRUE) {
   
    echo " <script type='text/javascript'>
 
      
       window.location = 'manage-groups.php?fall=".$fall."&&sec=".$section."&&cour=".$course."';
  
                           
 </script>
 
          ";
           
 
 } else {
     echo  $conn->error  ;
     
 }
 
 

?>