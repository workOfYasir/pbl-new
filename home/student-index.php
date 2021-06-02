<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="Student")
 {
    header('location:login.php');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:52:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | <?php echo $userType; ?></title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="#">
<meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">



<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/SVG-animated/svg-weather.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/pages/dashboard/horizontal-timeline/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/pages/dashboard/amchart/css/amchart.css">

<link rel="stylesheet" type="text/css" href="assets/pages/widget/calender/pignose.calendar.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
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
<a href="changePassword.php">
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

<div id="morphsearch" class="morphsearch">
<form class="morphsearch-form">
<input class="morphsearch-input" type="search" placeholder="Search..." />
<button class="morphsearch-submit" type="submit">Search</button>
</form>
<div class="morphsearch-content">
<div class="dummy-column">
<h2>People</h2>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
<h3>Sara Soueidan</h3>
</a>
<a class="dummy-media-object" href="#!">
<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
<h3>Shaun Dona</h3>
</a>
</div>
<div class="dummy-column">
<h2>Popular</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
<h3>Page Preloading Effect</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
<h3>Draggable Dual-View Slideshow</h3>
</a>
</div>
<div class="dummy-column">
<h2>Recent</h2>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
<h3>Tooltip Styles Inspiration</h3>
</a>
<a class="dummy-media-object" href="#!">
<img src="assets/images/avatar-1.png" alt="NotificationStyles" />
<h3>Notification Styles Inspiration</h3>
</a>
</div>
</div>

<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
</div>

</div>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="card card_main p-fixed users-main">
<div class="user-box">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia</div>
</div>
</div>
<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen</div>
</div>
</div>
<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
 </a>
<div class="media-body">
<div class="f-13 chat-header">Michael Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Irina Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara Tancredi</div>
</div>
</div>
<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Samon</div>
</div>
</div>
<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Daizy Mendize</div>
</div>
</div>
<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Loren Scofield</div>
</div>
</div>
<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Shayk</div>
</div>
</div>
<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
<div class="live-status bg-danger"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Sara</div>
</div>
</div>
<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
 </a>
<div class="media-body">
<div class="f-13 chat-header">Doe</div>
</div>
</div>
<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
<a class="media-left" href="#!">
<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="icofont icofont-rounded-left"></i> Josephin Doe
</a>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media-right photo-table">
<a href="#!">
<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
</a>
</div>
</div>
<div class="chat-reply-box p-b-20">
<div class="right-icon-control">
<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
<div class="form-icon">
<i class="icofont icofont-paper-plane"></i>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">



<?php


include 'student_nav.php';


?>




<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>Dashboard</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="student-index.php">
<i class="icofont icofont-home"></i>
</a>
</li>
 
<li class="breadcrumb-item"><a href="#!">Dashboard</a>
</li>
</ul>
</div>
</div>
<div class="page-body">
<div class="row">

<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->

 <button style="display:none;" id="sss"  onclick="fun()" type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal">Large</button>

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header" style="margin-bottom:-15px;">
<h4 class="modal-title">Notifications</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

 

<?php
// for connection

$noti = "no";
include 'connection.php';
$sql = "SELECT * FROM groupleader where fall='F-19' and member='$userRoll'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	
    // output data of each row
$count=1;
 
	 
    while($row = $result->fetch_assoc())
     
	 {
		
		 $gd = $row['gid'];
		 $sqlrol = "SELECT * FROM group_request where  gid='$gd'";
$resultrol = $conn->query($sqlrol);
 
	 while($rowrol = $resultrol->fetch_assoc())
	 {
		 $noti="yes";
		 $cd = $row['course'];
	$sqlsub = "SELECT * FROM course where  c_id='$cd'";

$resultsub = $conn->query($sqlsub);
	 $rowsub = $resultsub->fetch_assoc();

echo '<div> 
<div class="accordion-heading" role="tab" id="headingOne'.$count.'" style="background-color:#E9E9E9;">
<h3 class="card-title accordion-title">
<a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne'.$count.'" aria-expanded="true" aria-controls="collapseOne">
<span style="color:green;"><i class="fa fa-expand"></i> &nbsp;  Group Joining Request Received &nbsp;&nbsp;&nbsp;&nbsp; Subject: <u>'.$rowsub['c_name'].'</u></span>
</a>
</h3>
</div>
<div id="collapseOne'.$count.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne'.$count.'" style="margin-top:5px;">
<div class="accordion-content accordion-desc" >
<p>
<b>Course:</b> '.$rowsub['c_name'].'<br>
<b>Section:</b> '.$row['section'].'<br>
<b>Roll No:</b> <u><i> '.$rowrol['req_roll'].'</i></u> sent you group joining request<br>
<u>Note: Accept Or Reject Request before due date</u> 
 </p>
</div>
</div>
</div>';
	 $count=$count + 1;
	 }
}
}




////////////////////////////////////////////////////////////// notification/////


include 'connection.php';
$sql = "SELECT * FROM   annoucement  where fall = 'F-19' and level In ( SELECT  DISTINCT(c_level) from course WHERE c_id In (
SELECT DISTINCT(s_course) FROM `student_course` WHERE fall='F-19' and s_roll='$userRoll'))
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	
    // output data of each row
$count=1;
 
	 
    while($row = $result->fetch_assoc())
     
	 {
		 $Todaydate = date("Y-m-d");
		 $lastDate =$row['last_date'];
		 if($Todaydate <= $lastDate )
		 {	
$noti="yes";	 

echo '<div> 
<div class="accordion-heading" role="tab" id="notiheadingOne'.$count.'" style="background-color:#E9E9E9;">
<h3 class="card-title accordion-title">
<a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#noticollapseOne'.$count.'" aria-expanded="true" aria-controls="collapseOne">
<span style="color:green;"><i class="fa fa-expand"></i> &nbsp;  '.$row['title'].' </span>
</a>
</h3>
</div>
<div id="noticollapseOne'.$count.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="notiheadingOne'.$count.'" style="margin-top:5px;">
<div class="accordion-content accordion-desc" >
<p>
 '.$row['text'].' 
  </p>
</div>
</div>
</div>';
	 $count=$count + 1;
		 }
	  
}
}






?>


 

</div>
 
</div>
</div>
</div>



 <?php

 if($noti=="yes")
 {
 echo '
<script>
 
window.addEventListener("load", function(event) {
  if (true) {
   event.preventDefault();
   document.getElementById("sss").click();
  }
});
</script>';
 }
?>


<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->
<!--   notification area            -->

<div class="col-md-6 col-xl-3">
<div class="card client-blocks dark-primary-border">
<div class="card-block">
<h5>comming soon</h5>
<ul>
<li>
<i class="icofont icofont-document-folder"></i>
</li>
<li class="text-right">
00
</li>
</ul>
</div>
</div>
</div>

<div class="col-md-6 col-xl-3">
<div class="card client-blocks warning-border">
<div class="card-block">
<h5>comming soon</h5>
<ul>
<li>
<i class="icofont icofont-ui-user-group text-warning"></i>
</li>
<li class="text-right text-warning">
00
</li>
</ul>
</div>
</div>
</div>


<div class="col-md-6 col-xl-3">
<div class="card client-blocks success-border">
<div class="card-block">
<h5>comming soon</h5>
<ul>
<li>
<i class="icofont icofont-files text-success"></i>
</li>
<li class="text-right text-success">
00
</li>
</ul>
</div>
</div>
</div>

<div class="col-md-6 col-xl-3">
<div class="card client-blocks dark-primary-border">
<div class="card-block">
<h5>comming soon</h5>
<ul>
<li>
<i class="icofont icofont-document-folder"></i>
</li>
<li class="text-right">
00
</li>
</ul>
</div>
</div>
</div>



<div class="col-md-8">
<div class="card">
<div class="card-block">
<h5>Section Details</h5>
</div>
<div class="card-block product-table">
<div class="table-responsive">
<table class="table">
<thead>
<tr class="text-uppercase">
<th>section</th>
<th>Subject</th>
<th>Session</th>
<th>department</th>
<th>Group Status</th>
<th> Manage groups</th>

</tr>
</thead>
<tbody>
<?php
// for connection

include 'connection.php';
$sql = "SELECT * FROM student_course where fall='F-19' and s_roll='$userRoll'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	$i=1;
    while($row = $result->fetch_assoc())
     
	 {

 echo '<tr>
<td>'.$i.". ".$row['s_sec'].'</td>
 ';
 $sec = $row['s_sec'];
   $cid = $row['s_course'];
 $sqlcNAme = "SELECT * FROM course where c_id=$cid";

$resultcName = $conn->query($sqlcNAme);

$rowcName = $resultcName->fetch_assoc();

 $cname = $rowcName['c_name'];
 $fal= $row['fall'];
 
 
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 
  $isMember = "";
  $isReq = "";
  $isOpen = "";
 
	 
	 // checking is member 
	 // checking is member
	 // checking is member
	 
	 
	  $sql = "SELECT * FROM g_members WHERE  roll_no ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($roww = $res->fetch_assoc())
     {
		 $gropId= $roww['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cid'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
 
              $isMember = "yes";
 
 } 
		
	 }
 
 }
	
  
	 // checking is request send 
	 // checking is request send
	 // checking is reques send 
	 
	 	 $sql = "SELECT * FROM group_request WHERE  req_roll ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($roww = $res->fetch_assoc())
     {
		 $gropId= $roww['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cid'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
 
	 $isReq = "yes";
	 
 

 } 
		
	 }
 
 }
 
 ////////////////
 
 
 
 $sql = " SELECT * FROM groupleader  where fall='F-19' and course='$cid'  AND section='$sec' and member='$userRoll' ";
$res  = $conn->query($sql);

  $roww = $res ->fetch_assoc();
  
  if ($res->num_rows > 0) {
 $isMember = "yes";
  
  }
  
 
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 
 
 
 
 
 
 
 
 
 
echo '
<td>'.$cname.'</td>
<td>'.$row['fall'].'</td>
<td>Computer Science</td>';

if($isMember=='yes')
{
echo '<td style="color:green;"><b>Joined</b></td>';	
}
else if($isReq=='yes')
{
	echo '<td style="color:orange;"><b>Request In Process</b></td>';
}
else
{
	echo '<td style="color:red;"><b>Open</b></td>';
}
	  

echo '<td><a href="manage-groups.php?fall='.$fal.'&&sec='.$sec.'&&cour='.$cid.'"><button type="button" class="btn btn-success btn-round ">View</button></a></td>
</tr>';
		 
		 
		 $i=$i+1;	 
}


}
?>
 
 
 
 
</tbody>
</table>


</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">

<div class="card">
<div class="card-header">
<h5 class="card-header-text"><i class="icofont icofont-attachment"></i> Attached files</h5>
</div>
<div class="card-block task-attachment">
<ul class="media-list">
					<?php
// for connection

include 'connection.php';

$clr ="'";

$sql = "SELECT * FROM  attachment  where fall = 'F-19' and level In ( SELECT  DISTINCT(c_level) from course WHERE c_id In (
SELECT DISTINCT(s_course) FROM `student_course` WHERE fall='F-19' and s_roll='$userRoll'))
";
$resul = $conn->query($sql);
 if ($resul->num_rows > 0) {
	 
	   
   while( $rw = $resul->fetch_assoc())
 
 {

 echo '
<li class="media d-flex m-b-10">
<div class="m-r-20 v-middle">
<i class="icofont icofont-file-pdf f-40 text-muted"></i>
</div>
<div class="media-body">
<a target="_blank" href="'.$rw['path'].'" class="m-b-5 d-block" download>'.$rw['title'].'</a>
 <div class="text-muted">
<span>Size: '.$rw['size'].'kb</span>
<span>
Added by <a href="#">Mr.Zaman</a>
</span>
</div>
</div>
<div class="f-right v-middle text-muted">

<a href="'.$rw['path'].'" download>
<i class="icofont icofont-download-alt f-18"></i>
</a>
</div> 
</li>';
// onclick="downloadFile('.$clr.$rw['path'].$clr.')"
 }}
 else
 {
	 	 echo "<span style='color:orange;'>No Files Uploaded Yet!</span>";
 
 }


?>
  <script>
function downloadFile(path)
{
	window.open(path);
}
 

</script>
 
 
</ul>
</div>
</div>

<div class="user-card-block card">
<div class="card-block">
<div class="top-card text-center">
<img height=99 width=99 src="assets/images/widget/avatar-4.png" class="img-responsive" alt="">
</div>
<div class="card-contain text-center p-t-15">
<h5 class="text-capitalize p-b-10"><?php echo $userName;  ?></h5>
<p class="text-muted"><?php echo $userType;  ?></p>
</div>
<div class="card-data m-t-10">
<div class="row">

<div class="col-6 b-r-default text-center">
 <span>Questions</span>
<p class="text-muted">coomig soon</p>
</div>
<div class="col-6 text-center">
<span>Answers</span>
<p class="text-muted">coomig soon</p>

</div>
</div>
</div>
<div class="card-button p-t-35">
<div class="row">
<div class="col-6 text-right">
 <button class="btn btn-primary btn-round" title="Available Soon"  disabled>Follow</button>
</div>
<div class="col-6 text-left">
<button class="btn btn-success btn-round"  title="Available Soon"  disabled>Message</button>
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
</div>
</div>
</div>
</div>
</div>

<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/moment/js/moment.min.js"></script>
<script type="text/javascript" src="assets/pages/widget/calender/pignose.calendar.min.js"></script>


<script src="../bower_components/c3/js/c3.js"></script>
<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

<script src="assets/pages/chart/knob/jquery.knob.js"></script>
<script type="text/javascript" src="assets/pages/widget/jquery.sparkline.js"></script>

<script src="../bower_components/d3/js/d3.js"></script>
<script src="../bower_components/rickshaw/js/rickshaw.js"></script>

<script src="../bower_components/raphael/js/raphael.min.js"></script>
<script src="../bower_components/morris.js/js/morris.js"></script>

<script src="assets/pages/chart/float/jquery.flot.js"></script>
<script src="assets/pages/chart/float/jquery.flot.categories.js"></script>
<script src="assets/pages/chart/float/jquery.flot.pie.js"></script>

<script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>

<script type="text/javascript" src="assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:58:07 GMT -->
</html>
