<?php
 include 'connection.php';

$surveyId = 0;

if(isset($_POST['survey'])){
   $surveyId = mysqli_real_escape_string($conn,$_POST['survey']); // department id
}

$users_arr = array();

if($surveyId > 0){
    $sql = "SELECT * FROM survey_questions WHERE survey_id=".$surveyId;

    $result = mysqli_query($conn,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $id = $row['id'];
        $question = $row['question'];
    
        $users_arr[] = array("id" => $id, "question" => $question);
    }
}

// encoding array to json format
echo json_encode($users_arr);