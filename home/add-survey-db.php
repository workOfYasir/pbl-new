<?php
include 'connection.php';
if(isset($_POST['name'])){$name = $_POST['name'];if($name == ''){ unset($name); }} 
if(isset($_POST['date'])){$date = $_POST['date'];if($date == ''){ unset($date); }} 
if(isset($_POST['course'])){$course = $_POST['course'];if($course == ''){ unset($course); }} 


if(
    isset($name)
    && isset($date)
    && isset($course)

    ){
        $result = mysqli_query($conn,"INSERT INTO survey SET
            survey_name = '$name',
            survey_date = '$date',
            survey_course = '$course'
         
     ");
     if($result==true){
          header('Location:add-new-survey.php');
     }
     else{
        echo 'Error:query nhe cli';
     }
    }else{ echo 'Error:if nhe chli'; }
