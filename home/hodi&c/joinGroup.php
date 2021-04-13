<?php

 
 include 'connection.php';
 

$gid = $_GET['gid'];
$mid = $_GET['mid'];
 

echo  $sql = "insert into group_request(gid,req_roll,status) VALUES ('$gid','$mid','on') ";

if($conn->query($sql) === TRUE){
    echo $conn->insert_id;
}else echo FALSE;

$conn->close();
?>