<?php

 
 include 'connection.php';
 

$grpid = $_GET['grpid'];
$mid = $_GET['mid'];


    $s = "SELECT * FROM  group_request where  gid ='$grpid' and req_roll ='$mid'   ";

		   $r = $conn->query($s);
 	   
		   if ($r->num_rows > 0) {
			   
  $sql = "insert into g_members(gid,roll_no) VALUES ('$grpid','$mid') ";

if($conn->query($sql) === TRUE){
    echo $conn->insert_id;
}else echo FALSE;

		   }


$conn->close();
?>