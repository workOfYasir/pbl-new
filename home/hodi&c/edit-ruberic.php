<?php
session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="HODI&C")
 {
    header('location:login.php');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];


?><!DOCTYPE html><!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/task-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:17:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL |Edit Ruberics</title>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

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

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
	<script src="ckeditor/ckeditor.js"></script>
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





<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Edit Ruberic |Project Ruberic Edit &nbsp;&nbsp;&nbsp;
 </div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="#">
<i class="icofont icofont-home"></i>
</a>
</li>
 
 
<li class="breadcrumb-item"><a href="view-ruberics.php">View Ruberics</a>
</li>
</ul>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>Edit Project Exhibition  Ruberics list</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block task-list">
   
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tab-home" role="tab">Edit  Ruberic</a>
</li>
 
  <?php
// for connection

include 'connection.php';
 

  
$ruberics = $_GET['ruberics'];

$sql = "SELECT  * FROM  ruberics  where  r_id='$ruberics'";
$result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $r_question = $row['r_question'];
 $level = $row['level'];
 $weight = $row['weight'];
	 
	 ?>
  
 
</ul>
<div class="tab-content modal-body">
<div class="tab-pane active" id="tab-home" role="tabpanel">
 
<form action="save-edit-Ruberics.php" method="POST" enctype="multipart/form-data" >
Ruberic Question:
<input style="margin-bottom:5px;width:100%;" value="<?php echo $r_question; ?>" placeholder="Enter Question here ... "  autocomplete="off" type="text"  name="title"  class="form-control" required />
<input hidden style="margin-bottom:5px;width:100%;" value="<?php echo $ruberics; ?>"  ="Enter Question here ... "  autocomplete="off" type="number"  name="rid"  class="form-control" required />
Weightage:
<input style="margin-bottom:5px;width:40%;" value="<?php echo $weight; ?>"  autocomplete="off" type="number"  max="100" name="weight"  class="form-control" required />
Select Level:
<select style="margin-bottom:5px;width:40%;cursor:pointer;" name="level" class="form-control" >
<option value="">Slect Level</option>
<option 

<?php

if($level="1")
{
	echo "selected";
}

?>

 value="1">1</option>
<option

<?php

if($level="2")
{
	echo "selected";
}

?>
 value="2">2</option>
<option 

<?php

if($level="3")
{
	echo "selected";
}

?>
value="3">3</option>
</select>
 
				 
					 
						  <button type="submit" class="btn btn-success float-right">Update Save</button>
 </form>
</div>
 
                   
 
 
</div>
</div>
</div>
 
</div>



</div>

<script>
 function changeDate(it_id ,cid)
 {
	 var date= document.getElementById("date"+it_id).value;

	 window.location="changeIterationDate.php?it_id="+it_id+"&course="+cid+"&date="+date;
 
 }
</script>
 
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
<script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript" src="assets/pages/todo/todo.js"></script>

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script src="assets/pages/data-table/js/data-table-custom.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/task-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:17:25 GMT -->
</html>
