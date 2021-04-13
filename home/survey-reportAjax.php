<?php
 include 'connection.php';

$departid = 0;

if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($conn,$_POST['depart']); // department id
}

$users_arr = array();

if($departid > 0){
    $sql = "SELECT c_id,c_name FROM course WHERE dept_id=".$departid;

    $result = mysqli_query($conn,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['c_id'];
        $name = $row['c_name'];
    
        $users_arr[] = array("c_id" => $userid, "c_name" => $name);
    }
}

// encoding array to json format
echo json_encode($users_arr);