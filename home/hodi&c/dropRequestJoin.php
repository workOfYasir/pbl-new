<?php

 
 include 'connection.php';


$gid = $_GET['gid'];
$mid = $_GET['mid'];
 
 
$sql = "Delete  from group_request where gid = '$gid' and req_roll = '$mid' ";

if($conn->query($sql) === TRUE){
    echo $reqid ;
}else echo FALSE;

$conn->close();
?>
