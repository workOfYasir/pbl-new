
<?php

 
 include 'connection.php';

$gid = $_GET['gid'];

$sql = "Delete from group_request where gid = '$gid'";

if($conn->query($sql) === TRUE){
    echo $conn->insert_id;
}else echo FALSE;

$sql = "Delete from g_members where gid = '$gid'";

if($conn->query($sql) === TRUE){
    echo $conn->insert_id;
}else echo FALSE;


$sql = "Delete from groupleader where gid = '$gid'";

if($conn->query($sql) === TRUE){
    echo $conn->insert_id;
}else echo FALSE;


$conn->close();
?>