<?php

 
 include 'connection.php';


$reqid = $_GET['reqid'];
 
 
$sql = "Delete  from group_request where req_id = '$reqid'";

if($conn->query($sql) === TRUE){
    echo $reqid ;
}else echo FALSE;

$conn->close();
?>
