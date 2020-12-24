<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Projects</title>


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

<link rel="stylesheet" type="text/css" href="assets/pages/j-pro/css/demo.css">
<link rel="stylesheet" type="text/css" href="assets/pages/j-pro/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/pages/j-pro/css/j-pro-modern.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

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


<?php


include 'admin-header.php';

?>



 

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
 
 
 <?php



   include 'admin-nav.php';


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
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><i class="icofont icofont-ui-message"></i>View All Students</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#settings7" role="tab"><i class="icofont icofont-ui-settings"></i>View Recycle Students</a>
<div class="slide"></div>
</li>
</ul>

<div class="tab-content card-block">


<div class="tab-pane active" id="home7" role="tabpanel">


 

 
<form>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Name </label>
<div class="col-sm-10">
<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Roll Number</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter your Roll no#">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">department</label>
<div class="col-sm-10">
<select name="dept" class="form-control" id="dept">
<option value="0">select department</option>
<option value="cs">BS computer science</option>
<option value="se">software engineering</option>
</select>
</div>
</div>
<!--<div class="form-group row">
<label class="col-sm-2 col-form-label">Round Input</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-round" placeholder=".form-control-round">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Maximum Length</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">
</div>
</div>
-->
<div class="form-group row">
<label class="col-sm-2 col-form-label">section </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="section" name="section" placeholder="Enter your name">
</div>
</div>

<div class="form-group row" >
<!--<label class="col-sm-4 col-lg-2 col-form-label">Placeholder</label>-->
<label class="col-sm-2 col-form-label">session</label>

<select name="session"  id="session" style="margin-left:16px; float:left;width:50px">
<option value="fall">fall</option>
<option value="spring">spring</option>

</select>



<span class="input-group-addon" style="float:left;width:30px;" id="val"> 20 </span>
<input type="text" placeholder="Left addon">


</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">courses</label>
<div class="col-sm-10">
<select name="courses" class="form-control" id="courses">
<option value="0">select course</option>

</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">teachers</label>
<div class="col-sm-10">
<select name="teachers" class="form-control" id="teachers">
<option value="0">select teacher</option>

</select>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">submit</label>
<div class="col-sm-10">
<button name="submit" class="btn btn-primary" type="submit" id=submit> submit</button>
</div>
</div>


</form>


</div>


<div class="tab-pane" id="profile7" role="tabpanel">
<form>
<div class="form-group row">
<label class="col-sm-2 col-form-label">upload </label>
<div class="col-sm-10">
<button name="upload" class="btn btn-primary" type="upload" id="upload"> upload</button>

</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">department</label>
<div class="col-sm-10">
<select name="dept" class="form-control" id="dept">
<option value="0">select department</option>
<option value="cs">BS computer science</option>
<option value="se">software engineering</option>
</select>
</div>
</div>
<!--<div class="form-group row">
<label class="col-sm-2 col-form-label">Round Input</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-round" placeholder=".form-control-round">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Maximum Length</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">
</div>
</div>
-->
<div class="form-group row">
<label class="col-sm-2 col-form-label">section </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="section" name="section" placeholder="Enter your name">
</div>
</div>

<div class="form-group row" >
<!--<label class="col-sm-4 col-lg-2 col-form-label">Placeholder</label>-->
<label class="col-sm-2 col-form-label">session</label>

<select name="session"  id="session" style="margin-left:16px; float:left;width:50px">
<option value="fall">fall</option>
<option value="spring">spring</option>

</select>



<span class="input-group-addon" style="float:left;width:30px;" id="val">20</span>
<input type="text" placeholder="Left addon">


</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">courses</label>
<div class="col-sm-10">
<select name="courses" class="form-control" id="courses">
<option value="0">select course</option>

</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">teachers</label>
<div class="col-sm-10">
<select name="teachers" class="form-control" id="teachers">
<option value="0">select teacher</option>

</select>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">submit</label>
<div class="col-sm-10">
<button name="submit" class="btn btn-primary" id="submit" type="submit"> submit</button>
</div>
</div>


</form>


</div>
<div class="tab-pane" id="messages7" role="tabpanel">
<p class="m-0">3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
</div>
<div class="tab-pane" id="settings7" role="tabpanel">
<p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
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

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/demo-12.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
</html>
