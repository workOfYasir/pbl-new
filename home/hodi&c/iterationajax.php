<?php
 include 'connection.php';

$departid = 0;

if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($conn,$_POST['depart']); // department id
}

$users_arr = array();

if($departid > 0){
    $sql = "SELECT * FROM iterations WHERE course_id=".$departid;

    $result = mysqli_query($conn,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['it_id'];
        $name = $row['it_title'];
    
        $users_arr[] = array("it_id" => $userid, "it_title" => $name);
    }
}

// encoding array to json format
echo json_encode($users_arr);