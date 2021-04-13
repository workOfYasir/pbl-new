<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="HODI&C")
 {
    header('location:login');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM `survey` WHERE `id`='$id'");
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Students</title>


 

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

<div class="theme-loader">
<div class="ball-scale">
<div></div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
 
 
 
 
 
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo" data-navbar-theme="theme4"  >
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="#">
<img class="" src="assets/images/auth/loginn.png" alt="Theme-Logo" height="60px;" width="60px;" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
 
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>

</ul>
<ul class="nav-right">
 
 
 
<li class="user-profile header-notification">
<a href="#!">
<img src="assets/images/user.png" alt="User-Profile-Image">
<span><?php echo $userName;    ?></span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
 
 
 
<li>
<a href="changePassword">
<i class="ti-lock"></i> Change Password
</a>
</li>
<li>
<a href="logout.php">
<i class="ti-layout-sidebar-left"></i> Logout
</a>
</li>
</ul>
</li>
</ul>
 

</div>
</div>
</div>
</nav>
 

 

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

 <?php


include 'manager_nav.php';


?>

 
 
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-b ody">
<div class="page-w rapper">

 


 
 
 
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>All Students</h5>
 <div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<?php $cid = $row['survey_course'];
$result2=mysqli_query($conn,"SELECT * FROM `course` WHERE c_id='$cid'") ;  
$row2=mysqli_fetch_array($result2);?>
    <h2><?php echo $row['survey_name']; ?> of <?php echo $row2['c_name']; ?></h2>
<table id="new-cons" class="table table-striped table-bordered nowrap">
<thead>
<tr>

<th>Question</th>
<th>Rubrics</th>
<th>Action</th>
</tr>
</thead>
<tbody>


<tr>
<?php $surveyQuestion=mysqli_query($conn,"SELECT * FROM `survey_questions` WHERE `survey_id`='$id'") ;
while($fetchQuestion=mysqli_fetch_assoc($surveyQuestion)){
    ?>
    <td><?php echo $fetchQuestion['question']; ?></td>
    <?php

    $q_id=$fetchQuestion['id'];
    $surveyRub=mysqli_query($conn,"SELECT * FROM `survey_ruberics` WHERE `ques_id`='$q_id'");

    ?>



<?php while($fetchRub=mysqli_fetch_assoc($surveyRub)) { ?>
<td><?php echo $fetchRub['rub1'];  echo ' ,  '. $fetchRub['rub2'];echo '  , '. $fetchRub['rub3'];echo '  ,  '. $fetchRub['rub4'];echo '  , '. $fetchRub['rub5'];?></td>
<?php } ?>


<td class="action-icon">
<center> <a href="view-survey-questions.php?id=<?php echo $row['id']; ?>" class="text-muted"><i class="icofont icofont-automation"></i>
</a></center>
</td>


</tr>
<?php
}
?>

 
 
</tbody>
</table>
</div>
</div>
</div>
<script>

function delete_student(id)
{
	
	swal({
  title: "Are you sure?",
  text: "Once deleted, Student Will Not be Able no Login!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("! Your Selected Student has been deleted!", {
      icon: "success",
    });
	
	window.location="delete-single-student?student="+id;
	
  } else {
    swal("Your Selected Student is safe!");
  }
});
}

</script>

</div>
</div>
 

</div>
</div>

 
</div>
</div>
</div>
</div>
</div>
</div>



<script>

</script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/pages/data-table/js/jszip.min.js"></script>
<script src="assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script src="assets/pages/data-table/extensions/responsive/js/responsive-custom.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
</html>
