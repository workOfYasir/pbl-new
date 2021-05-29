<?php
include("../constants.php");
?>

<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]=="Student") 
 {
    header('location:login.php');

 }else{
 include '../connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];


?>

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | <?php echo $userType; ?>Students</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<?php include("../links.php"); ?>
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


include 'manager_nav.php';


?>

 
 
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

 


 
 
 
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Manage Students</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
 
</div>
</div>
<div class="card-block tab-icon">

<div class="row">
<div class="col-lg-12 col-xl-12">

 

<ul class="nav nav-tabs md-tabs " role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="icofont icofont-home"></i>Add Students (Individual) </a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><i class="icofont icofont-ui-user "></i>Add Students (Multiple)</a>
<div class="slide"></div>
</li>
 
</ul>

<div class="tab-content card-block">


<div class="tab-pane active" id="home7" role="tabpanel">


 

 
<form  action="save-single-student" autocomplete="off" method="post" enctype="multipart/form-data"  >
<div class="form-group row">
<label class="col-sm-2 col-form-label">Name </label>
<div class="col-sm-10">
<input pattern="[a-zA-Z_ ]*"  type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name"  required/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Roll Number</label>
<div class="col-sm-10">
<input type="text" pattern="[a-zA-Z0-9-]*" class="form-control" id="rollno" name="rollno" placeholder="Enter Your Roll No"  required/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Department</label>
<div class="col-sm-10">
<select name="dept" class="form-control" id="dept" required/>
<option value="">Select Department</option>
<?php
					
					// for connection

   include 'connection.php';
   
$sql = "SELECT * FROM department where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['dept_id']; 
		 $Apples = $row['dept_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}
		?>



</select>
</div>
</div>



<div class="form-group row">
<label class="col-sm-2 col-form-label">Sction</label>
<div class="col-sm-10">
<input type="text"  pattern="[a-zA-Z0-9-]*" class="form-control" id="section" name="section" placeholder="Enter Your Section" required/>
</div>
</div>



<div class="form-group row" >
<!--<label class="col-sm-4 col-lg-2 col-form-label">Placeholder</label>-->
<label class="col-sm-2 col-form-label">Session</label>

<select name="session"  id="session" style="margin-left:16px; float:left;width:110px" required/>
<option value="">Select Session</option>
<option value="F">Fall </option>
<option value="S">spring</option>

</select>



<span class="input-group-addon" style="float:left;width:30px;padding:5px;" id="val"> 20 </span>
<input  pattern="[0-9]*" type="text" name="year" style="padding:5px;font-size:16px;width:30px;" placeholder="19" required/>


</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Courses</label>
<div class="col-sm-10">
<select name="courses" class="form-control" id="courses" required >
<option value="">Select Course</option>
<?php
					
					// for connection

   include 'connection.php';
   
$sql = "SELECT * FROM course where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['c_id']; 
		 $Apples = $row['c_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}
		?>

</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Teachers</label>
<div class="col-sm-10">
<select name="teachers" class="form-control" id="teachers" required>
<option value="">Select Teacher</option>

  <?php
					
					// for connection

   include 'connection.php';
   
$sql = "SELECT * FROM teacher where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['t_id']; 
		 $Apples = $row['t_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}
		?>

    

</select>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Submit</label>
<div class="col-sm-10">
<button name="submit" class="btn btn-primary" type="submit" id="submit" > Submit</button>
</div>
</div>


</form>


</div>


<div class="tab-pane" id="profile7" role="tabpanel">
<form  action="saveMstudent.php" method="post"  enctype="multipart/form-data"  >
<div class="form-group row">
<label class="col-sm-2 col-form-label">Upload Students</label>
<div class="col-sm-10">
<input type="file" class="form-control" id="" name="excel" required/>
<a href="PBL-Students-File-Templete.xlsx">Download Templete <i  style="font-size:18px;"class=" icofont icofont-circled-down"></i><a/>

</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Department</label>
<div class="col-sm-10">

<select name="dept" class="form-control" id="dept" required>
<option value ="">Select Department</option>

<?php

   include 'connection.php';
   
$sql = "SELECT * FROM department where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['dept_id']; 
		 $Apples = $row['dept_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}

		?>
		
</select>

</div>
</div>
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section </label>
<div class="col-sm-10">
<input pattern="[a-zA-Z0-9-]*"  type="text" class="form-control" placeholder="Enter Your Section"  name="sec"  required>
</div>
</div>

<div class="form-group row" >
<!--<label class="col-sm-4 col-lg-2 col-form-label">Placeholder</label>-->
<label class="col-sm-2 col-form-label">Session</label>

<select name="session"  id="session" style="margin-left:16px; float:left;width:110px" required>
<option value="">Select Session</option>
<option value="F">Fall </option>
<option value="S">spring</option>

</select>



<span class="input-group-addon" style="float:left;width:30px;padding:5px;" id="val"> 20 </span>
<input pattern="[0-9]*"  type="text" style="padding:5px;font-size:16px;width:30px;" placeholder="19" name="year" required>


</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Courses</label>
<div class="col-sm-10">
<select name="courses" class="form-control" required>
<option value="">Select Course</option>
<?php
					
					// for connection

   include 'connection.php';
   
$sql = "SELECT * FROM course where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['c_id']; 
		 $Apples = $row['c_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}
		?>

</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Teachers</label>
<div class="col-sm-10">
<select name="teachers" class="form-control" id="teachers" required>
<option value="">Select Teacher</option>

  <?php
					
					// for connection

   include 'connection.php';
   
$sql = "SELECT * FROM teacher where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	
    while($row = $result->fetch_assoc())
     {
		 $apples = $row['t_id']; 
		 $Apples = $row['t_name']; 
     
	echo   "<option value ='".$apples."'>".$Apples."</option>";
	
	 }
}
		?>

</select>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Submit</label>
<div class="col-sm-10">
<button name="submit" class="btn btn-primary" id="submit" type="submit">Submit</button>
</div>
</div>


</form>


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
</div>


<?php
include("../scripts.php");
} ?>