
<nav class="pcoded-navbar">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
<li class="active">
<a href="student-index">
<span class="pcoded-micon"><i class="ti-home"></i></span>
<span class="pcoded-mtext" data-i18n="nav.animations.main">Dashboard</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
 <li >
<a href="iterations-work">
<span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.animations.main">Manage Iterations</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
 
<?php
 include 'connection.php';
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];
 $userId=$_SESSION['userId'];

// $qr=mysqli_query($conn,"SELECT * FROM `users` 
// INNER JOIN `student_course` ON `users`.`u_idno`=`student_course`.`s_roll` 
// WHERE  `u_idno`='$userRoll'");

// while($fetchCourse=mysqli_fetch_array($qr)){
// $_SESSION['userCourse']=$fetchCourse['s_course'];
//$userCourse=$_SESSION['userCourse'];
//  $userQuery=mysqli_query($conn,"SELECT * FROM `student_course` INNER JOIN `survey` ON `student_course`.`s_course`=`survey`.`survey_course` WHERE `student_course`.`s_roll`= '$userRoll'");



$surveyAll=mysqli_query($conn,"SELECT * FROM `survey` INNER JOIN `student_course` ON `survey`.`survey_course`=`student_course`.`s_course`  WHERE `s_roll`='$userRoll'");

while($fetchAll=mysqli_fetch_assoc($surveyAll) ){
  $surveyId=$fetchAll['id'];
$surveyQuery=mysqli_query($conn,"SELECT * FROM `survey_awnsers` WHERE `survey_id` = '$surveyId' AND  `user_id`='$userId' ");
$sf=mysqli_fetch_assoc($surveyQuery);
if(empty($sf)){  
    ?>
    <li >
<a href="survey_form_student?survey_id=<?php echo $surveyId; ?>">
<span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.animations.main">Survey ( <?php echo $fetchAll['survey_name']; ?> )</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
    <?php
}
//}
//  echo "SELECT * FROM `survey_awnsers` WHERE `survey_id` = '$surveyId' AND  `user_id`='$userId' ";

// if(!empty($id)){
//     echo "SELECT * FROM `survey_awnsers` WHERE `survey_id` = '$surveyId' AND  `user_id`='$userId' ";
// }else{
//     echo 'no ';
// }


}


//}

?>


 

 

 

 




 

 




</ul>





</div>
</nav>
