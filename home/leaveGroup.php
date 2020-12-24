<?php

 
 include 'connection.php';


$gid = $_GET['gid'];
$mid = $_GET['mid'];
 
 
$sql = "Delete  from g_members where gid = '$gid' and roll_no = '$mid' ";

if($conn->query($sql) === TRUE){
    
}else echo FALSE;

$conn->close();
?>
