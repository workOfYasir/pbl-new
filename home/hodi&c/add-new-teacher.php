<?php
include("../constants.php");
session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="HODI&C")
 {
    header('location:login.php');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];


?><!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Teachers</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<?php include('../links.php'); ?>

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
 

</div>
</div>
</div>
</nav>
 

 

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

 <?php
 
 include 'hodi&c_nav.php';
 
 ?>
 
 
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

 


 
 
 
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Manage Teachers</h5>
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
<a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="icofont icofont-home"></i>Add teacher (Individual) </a>
<div class="slide"></div>
</li>
 
 
</ul>

<div class="tab-content card-block">


<div class="tab-pane active" id="home7" role="tabpanel">


 

 
<div class="j-wrapper j-wrapper-640" style="margin-top:-30px;">
<form autocomplete="off" action="saveTeacher" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data"   >


<div class="j-row">
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="teacher_name">
<i class="icofont icofont-ui-user"></i>
</label>
<input type="text" pattern="[a-zA-Z-_ ]*"  name="Teacher_name" placeholder="Enter Teacher name"  required />
 </div>
</div>
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="teacher_name">
<i class="icofont icofont-ui-user"></i>
</label>
<input type="email"   name="email" placeholder="Enter Teacher email"  required />
 </div>
</div>

<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="teacher_dept">

</label>
<select name="teacher_dept" style="cursor:pointer;" required>
<option value="">Select Department</option>
<?php
					
					// for connection

   include '../connection.php';
   
$sql = "SELECT * FROM department where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
 

	
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
</div>


<div class="j-response"></div>



<button type="submit" class="btn btn-primary">Save</button>



</form>
</div>
 
 


</div>






<div class="tab-pane" id="profile7" role="tabpanel">
<div class="j-wrapper j-wrapper-640" style="margin-top:-30px;">
<form autocomplete="off" action="saveMTeacher.php" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate  >


<div class="j-row">
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="upload">

</label>
<input type="file" id="upload" name="excel"/> 
 </div>
</div>

</div>


<div class="j-response"></div>



<button type="submit" class="btn btn-primary">Upload</button>



</form>
</div>
</div>
 
<div class="tab-pane" id="settings7" role="tabpanel">
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

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include("../scripts.php"); ?>
