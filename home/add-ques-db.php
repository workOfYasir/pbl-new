<?php
include 'connection.php';
if(isset($_POST['question'])){$question = $_POST['question'];if($question == ''){ unset($question); }} 
if(isset($_POST['rub1'])){$rub1 = $_POST['rub1'];if($rub1 == ''){ unset($rub1); }} 
if(isset($_POST['rub2'])){$rub2 = $_POST['rub2'];if($rub2 == ''){ unset($rub2); }} 
if(isset($_POST['rub3'])){$rub3 = $_POST['rub3'];if($rub3 == ''){ unset($rub3); }} 
if(isset($_POST['rub4'])){$rub4 = $_POST['rub4'];if($rub4 == ''){ unset($rub4); }} 
if(isset($_POST['rub5'])){$rub5 = $_POST['rub5'];if($rub5 == ''){ unset($rub5); }} 
if(isset($_POST['survey_id'])){$survey_id = $_POST['survey_id'];if($survey_id == ''){ unset($survey_id); }} 
echo $survey_id;
if(isset($question)){
        $result = mysqli_query($conn,"INSERT INTO survey_questions SET
            question = '$question',
            survey_id = '$survey_id'                 
     ");
     $fetchId = mysqli_query($conn,"SELECT `id` FROM `survey_questions` ORDER BY `id` DESC");
     $fetchrow=mysqli_fetch_array($fetchId);
     $ques_id= $fetchrow['id'];
     $result = mysqli_query($conn,"INSERT INTO `survey_ruberics` SET
            rub1 = '$rub1',
            rub2 = '$rub2',
            rub3 = '$rub3',
            rub4 = '$rub4',
            rub5 = '$rub5',
            ques_id = '$ques_id'                 
     ");
     if($result==true){
        //  header('Location:add-new-survey.php');
     }
     else{
        echo 'Error: query nhe chli';
     }
    }else{ echo 'Error:if hi nhe chli'; }
