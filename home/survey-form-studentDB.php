<?php
include 'connection.php';
session_start();

$userName=$_SESSION["userName"];
$userType=$_SESSION["userType"];
$userRoll=$_SESSION["userRoll"];
$userId  =$_SESSION["userId"];
$surveyId = $_POST['id'];

$result = mysqli_query($conn, "INSERT INTO `survey_awnsers`(`user_id`, `survey_id`) VALUES ('$userId','$surveyId')");
$result2 = mysqli_query($conn, "SELECT `id` FROM `survey_awnsers` WHERE `user_id`='$userId' AND `survey_id` = '$surveyId'");
$row2 = mysqli_fetch_assoc($result2);
$s_id = $row2['id'];
$i=1;

foreach($_POST['q_answer'] as $key=>$ans){
  $ques=$_POST['q_id'][$i];


        $result2 = mysqli_query($conn, "INSERT INTO `survey_awnsers_detail`( `awnser`,`question_id`,`survey_awnser_id`) VALUES ('$ans','$ques','$s_id')");

    $i++;



}

header("location:student-index.php");


// if ($result) 
//     { 
//         $back = $_SERVER['HTTP_REFERER'];	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=../View-Blogs.php">';
//     } else {
//         echo "Error";
//     } 
		
