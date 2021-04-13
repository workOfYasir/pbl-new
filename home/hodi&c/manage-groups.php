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
 
 $fal = $_GET['fall'];
 $cour = $_GET['cour'];
 $sec = $_GET['sec'];

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:52:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Student</title>


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

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bower_components/sweetalert/css/sweetalert.css">


<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
<link rel="stylesheet" type="text/css" href="assets/css/component.css">


<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

<style>
 
 
 

.notification {
 
  position: relative;
  display: inline-block;
 
}


.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
div.div_class_name {     /* this will hide div with class div_class_name */
  display:none;
}

#diamond {
position:absolute;  
z-index:auto;  
}
#spade {
position:absolute;  
z-index:1;
  
left:65px;  
top:20px;  
}

</style>
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
<div class=" row">
<div class="col-4">
<h4>Manage Groups</h4> 
</div>
<div class="col-4">

<?php

include 'connection.php';
 

 $sql = "SELECT * FROM course WHERE c_id='$cour' ";

 $res = $conn->query($sql);
 $row = $res->fetch_assoc();

 $deadline = $row['deadline'];
 
 ?>
<h4>Deadline : <small style="color:orange;"> <?php echo $deadline;?></small></h4> 

 
</div>
<div class="col-4">

<button 

<?php

include 'connection.php';
 

 $sql = "SELECT * FROM groupleader WHERE fall='$fal' and course='$cour'  AND section='$sec' and member ='$userRoll'";

 $res = $conn->query($sql);
	
if ($res->num_rows > 0)
{
echo "disabled";
echo " style='cursor: not-allowed;'";

echo ' title="You Are Alerady Enrolled in Group"';
 
}
else
{
	 $sql = "SELECT * FROM g_members WHERE  roll_no ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($row = $res->fetch_assoc())
     {
		 $gropId= $row['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cour'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
 
 
	 echo "disabled";
	 echo " style='cursor: not-allowed;'";

echo ' title="You Are Alerady Enrolled in Group"';
 

 } 
		
	 }
 
 }
	
	
	
}



	 $sql = "SELECT * FROM group_request WHERE  req_roll ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($row = $res->fetch_assoc())
     {
		 $gropId= $row['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cour'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
	 echo "disabled";

echo ' title="You Are Alerady Enrolled in Group"';
echo " style='cursor: not-allowed;'";
 

 } 
		
	 }
 
 }
	
	
 
 
?>   class="btn btn-primary btn-round f-right" data-toggle="modal" data-target="#sign-in-modal">Create New Group</button>
</div>
</div>

</div>
<form action="save.php" method="POST">
<div class="modal fade" id="sign-in-modal" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Enter Group Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-b-0">

<div class="row">
<div class="col-sm-12">
<div>
<label class="form-control-label"><b>Group Name</b></label>
<input type="text"  class="form-control" autocomplete="off" placeholder="Enter Group Name e.g (Your Name)" required>

<input type="text" value="<?php echo $fal; ?>" name="fall" class="form-control" autocomplete="off" style="display:none;" >
<input type="text" value="<?php echo $sec; ?>" name="section" class="form-control" autocomplete="off" style="display:none;" >
<input type="text" value="<?php echo $cour; ?>" name="course" class="form-control" autocomplete="off" style="display:none;" >
<input type="text" value="<?php echo $userRoll; ?>" name="member" class="form-control" autocomplete="off" style="display:none;" >
 
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div>

<label class="form-control-label" style="margin-top:7px;"><b>Project Title</b></label>
<input type="text" name="title" class="form-control" autocomplete="off" placeholder="Enter Project Title" required>
</div>
</div>
</div>

 
</div>
<hr>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Create</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</form>

<div class="modal fade " id="pwd-recovery" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Classmates (Group Joining) Request </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>

</div>

<div class="text-right">
<div class="card-block">
<div class="right-icon-control">
<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
<div class="form-icon">
<i class="icofont icofont-search"></i>
</div>
</div>
</div>
</div>
<?php

include 'connection.php';

$sql = " SELECT * FROM groupleader  where fall='$fal' and course='$cour'  AND section='$sec' and member='$userRoll' ";
$result = $conn->query($sql);

  $row = $result->fetch_assoc();
  
  $groupID = $row['gid'];
	 
	 $sql = "SELECT * FROM group_request  where  gid='$groupID' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
while($row = $result->fetch_assoc())
{
	$ro = $row['req_roll'];
	
	$sqlname = "SELECT * FROM student  where  s_roll='$ro' ";
$resultnam = $conn->query($sqlname);
	$rownam = $resultnam->fetch_assoc();

$coma ="'";
echo '<div class="row mt-2">
<div class="col-6" >
<img class="img-circle ml-3" src="assets/images/avatar-1.png" alt="User Image" style="height:45px;width:45px;">
<span id="diamond" class="ml-1"><b class> '.$rownam['s_name'].'</b><br></span>
<span id="spade" class="ml-1 ml-3 sp"> <small>'.$row['req_roll'].'</small> </span>

 
</div>
<div class="col-6" >

<button onclick="cancelRequest('.$row['req_id'].')" class="btn btn-mini btn-danger btn-round mt-2 f-right m-r-10" >cancel request</button>
<button onclick="acceptRequest('.$row['req_id'].','.$groupID.','.$coma.$row['req_roll'].$coma.')" class="btn btn-mini btn-success btn-round mt-2 f-right m-r-10">accept request</button>


</div>

</div>
 ';
 
 }
 }
 else
 {
 echo '<center><h5 style="color:orange;">No Request Yet</h5></center>';
 }

?>
<script>
 
function cancelRequest(reqid)
{
        
			    
				 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "cancelRequest.php?reqid="+reqid, true);
         var studentData;    
	   xmlhttp.send(studentData);     
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
			
			   location.reload();
		
            }
        };
		    		   
			
   

}

function acceptRequest(reqid,grpid,mid)
{ 

        		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "acceptRequest.php?grpid="+grpid+"&&mid="+mid, true);
         var studentData;    
	   xmlhttp.send(studentData);     //it should be converted intro string before passing 
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				
				 cancelRequest(reqid);
		 
            }
        };
	
   
}

</script>

 <br>
<div class="modal-footer">

<button type="button" class="btn btn-round  btn-primary" data-dismiss="modal">Cancel</button>

</div>



<!--
<div class="user-box m-30" style="height:auto">
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


</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
<button class="btn btn-mini btn-success btn-round">accept request</button>
</div>


</div>
</div>




-->
</div>

</div>


</div>




<div class="page-body">




<div class="row">


 
 
<?php

include 'connection.php';

$sql = " SELECT * FROM groupleader   where fall='$fal' and course='$cour'  AND section='$sec' and member='$userRoll' ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{



 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group 1</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>

<a href="#" class="notification btn btn-primary btn-mini f-right m-1" data-toggle="modal" data-target="#pwd-recovery">
  <span>View Requests
  </span>';
  

$l = " SELECT * FROM groupleader  where fall='$fal' and course='$cour'  AND section='$sec' and member='$userRoll' ";
$rl = $conn->query($l);

  $rowl = $rl->fetch_assoc();
  
  $groupIDl = $rowl['gid'];
	 
	 $sqll = "SELECT COUNT(gid) as req FROM group_request  where  gid='$groupIDl' ";
$resultl = $conn->query($sqll);
 
 $rowll = $resultl->fetch_assoc();
 
 $req = $rowll['req'];
 
  
  echo '<span class="badge"
  style="background-color:#54d98c;color:white;"
  >'.$req.'</span>
</a>

 <button type="button" class="btn btn-danger btn-mini f-right m-1 alert-drop m-b-10" onclick="Dropalert('.$groupIDl.')">Drop Group</button>


 



</div>

</div>
</div>';

	 }
	 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 
	 
	 include 'connection.php';

$sql = " SELECT * FROM groupleader  where fall='$fal' and course='$cour'  AND section='$sec' and member!='$userRoll'  ";
$result = $conn->query($sql);
$i=2;
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group '.$i.'</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<button style="cursor: not-allowed;" class="btn btn-success btn-mini f-right m-1" type="button" data-toggle="modal"  title="You Are Alerady Enrolled in Group" data-target="#pwd-recovery" disabled >Join Group</button></a>

 

 



</div>

</div>
</div>';

$i= $i+1;
	 }
	 

	 
	 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 
	 
	 
	 }
	 else
	 {
	 
	 $isMember = "no";
	 $isMemberid = "";
	 
	 $isRequestSend = "no";
	 $isRequestSendid = "";
	 
	 // checking is member 
	 // checking is member
	 // checking is member
	 
	 
	  $sql = "SELECT * FROM g_members WHERE  roll_no ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($row = $res->fetch_assoc())
     {
		 $gropId= $row['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cour'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
 
              $isMember = "yes";
	 $isMemberid = $gropId;
	 
 

 } 
		
	 }
 
 }
	
  
	 // checking is request send 
	 // checking is request send
	 // checking is reques send 
	 
	 	 $sql = "SELECT * FROM group_request WHERE  req_roll ='$userRoll'";

 $res = $conn->query($sql);
 if ($res->num_rows > 0) {

  while($row = $res->fetch_assoc())
     {
		 $gropId= $row['gid'];
				
		 $sql2 = "SELECT * FROM groupleader WHERE gid ='$gropId' and fall='$fal' and course='$cour'  AND section='$sec'";
			 $res2 = $conn->query($sql2);
 if ($res2->num_rows > 0) {
 
	 $isRequestSend = "yes";
	 $isRequestSendid = $gropId;
 

 } 
		
	 }
 
 }
	
 
	 
	  if ($isRequestSend == "yes")
	 {
	  // show if group request send to any one 
	  // show if group request send to any one 
	  // show if group request send to any one 
	  // show if group request send to any one 
	  
	   include 'connection.php';

$sql = " SELECT * FROM groupleader  where gid='$isRequestSendid'   ";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
         $co = "'";
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group 1</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
<button type="button" class="btn btn-danger btn-mini f-right m-1 alert-cancelre m-b-10" onclick="Cancelre('.$gid.','.$co.$userRoll.$co.')">Cancel reuest</button>
<button style="cursor: not-allowed;" class="btn btn-default btn-mini f-right m-1" type="button"    disabled >Request in Process ...</button></a>


 

 



</div>

</div>
</div>';

	 }
	 
	 
	  // show Remaining if group request send to any one 
	  // show Remaining if group request send to any one 
	  // show Remaining if group request send to any one 
	  // show Remaining if group request send to any one 
	 
	  
	    include 'connection.php';

$sql = " SELECT * FROM groupleader  where gid!='$isRequestSendid' and fall='$fal' and course='$cour'  AND section='$sec'   ";
$result = $conn->query($sql);
$i=2;
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group '.$i.'</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<button style="cursor: not-allowed;" class="btn btn-success btn-mini f-right m-1" type="button"   title="You Can Join One Group At a Time For Same Course"  data-target="#pwd-recovery" disabled >Join Group</button></a>

 

 



</div>

</div>
</div>';
$i=$i+1;
	 }
	 
	  
	  
	  
	  
	  
	  
	 
	
	 
	 
	 
	 // show if group request send to any one 
	  // show if group request send to any one 
	  // show if group request send to any one 
	  // show if group request send to any one 
	 
	 }
	 
	   
	 
	 
	 
	  
	  
	else if ($isMember == "yes")
	 {
	  // show if member of any group
	  // show if member of any group
	  // show if member of any group
	  
	 
include 'connection.php';

$sql = " SELECT * FROM groupleader  where gid='$isMemberid'   ";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 $ccom="'";
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group 1</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<button style="cursor: not-allowed;" class="btn btn-success btn-mini f-right m-1" type="button"    disabled >Joined</button></a>
<button type="button" class="btn btn-primary btn-mini f-right m-1 alert-leave m-b-10" onclick="Leavealert('.$gid.','.$ccom.$userRoll.$ccom.')">Leave group</button>

 

 



</div>

</div>
</div>';

	 }
	 
	 
	  // show Remaining if member of any group
	  // show Remaining if member of any group
	  // show Remaining if member of any group
	  // show Remaining if member of any group
	   
	 
	  
	    include 'connection.php';

 $sql = " SELECT * FROM groupleader  where gid!='$isMemberid' and fall='$fal' and course='$cour'  AND section='$sec'   ";
$result = $conn->query($sql);
$i=2; 
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		  
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group '.$i.'</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<button style="cursor: not-allowed;" class="btn btn-success btn-mini f-right m-1" type="button"   title="You Can Join One Group At a Time For Same Course"  data-target="#pwd-recovery" disabled >Join Group</button></a>

 

 



</div>

</div>
</div>';
$i=$i+1;
	 }
	 
	  
	  
	  
	  
	  
	  
	 

	 
	 
	 
	 
	  
	  // show if member of any group
	  // show if member of any group
	  // show if member of any group
	 
	 }
	 
	 else

{

     // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group 
	  
	 include 'connection.php';

$sql = " SELECT * FROM groupleader  where fall='$fal' and course='$cour'  AND section='$sec'   ";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
	 $i=1;
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		   
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].'</span>
</div>
<div class="col-sm-4">
<span class="label label-default f-right">Group '.$i.'</span>
</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L)</td>
	  <td></td>
      <td>'.$row['member'].'</td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   $com = "'";
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<button type="button" class="btn btn-success btn-mini f-right m-1 alert-join m-b-10" onclick="Joinalert('.$gid.','.$com.$userRoll.$com.')">Join group</button>

 

 



</div>

</div>
</div>';

$i=$i+1;

	 }
	 
}
else
{

 

echo '
<div class="col-sm-12">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<h3 style="color:orange;" >No Groups 
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate=';
	 echo "'" ;
	 echo '[ "Yet !", " Create Your Own !", "Yet !", "Create Your Own !", "Yet !" ]';
	 echo "'";
	 echo '></span>
</h3>
<h4>Create Your Own</h4></div></center>';

}
	 
	 
	  // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group  
	  // show if want to join and not a part of any group  
	 
	 
	 
	 
	 }
	 }
	 
	 

?>


<script>

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
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
 
 



<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

 
<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

 
 

<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>
<script type="text/javascript" src="../bower_components/sweetalert/js/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/conf.js"></script>

<script type="text/javascript" src="assets/js/modalEffects.js"></script>
<script type="text/javascript" src="assets/js/classie.js"></script>

<script type="text/javascript" src="assets/pages/task-board/task-board.js"></script>

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:58:07 GMT -->
</html>
