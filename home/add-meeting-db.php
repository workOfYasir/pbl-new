<?php
include 'connection.php';
if(isset($_POST['name'])){$name = $_POST['name'];if($name == ''){ unset($name); }} 
if(isset($_POST['next'])){$next = $_POST['next'];if($next == ''){ unset($next); }} 
if(isset($_POST['iteration'])){$iteration = $_POST['iteration'];if($iteration == ''){ unset($iteration); }} 
if(isset($_POST['s_time'])){$s_time = $_POST['s_time'];if($s_time == ''){ unset($s_time); }} 
if(isset($_POST['e_time'])){$e_time = $_POST['e_time'];if($e_time == ''){ unset($e_time); }} 
if(isset($_POST['ajanda'])){$ajanda = $_POST['ajanda'];if($ajanda == ''){ unset($ajanda); }} 
if(isset($_POST['date'])){$date = $_POST['date'];if($date == ''){ unset($date); }} 

if(
    isset($name)
    && isset($next)
    && isset($iteration)
    && isset($s_time)
    && isset($e_time)
    && isset($ajanda)
    && isset($date)
    ){
        $result = mysqli_query($conn,"INSERT INTO mints_of_meetings SET
            meeting_name = '$name',
            iter_id = '$iteration',
            meeting_date = '$date',
            meeting_ajanda = '$ajanda',
            meeting_start = '$s_time',
            meeting_end = '$e_time',
            meeting_next = '$next'          
     ");
     if($result==true){
       header('Location:evaluator-index.php');
     }
     else{
        echo 'Error:';
     }
    }else{ echo 'Error:'; }
