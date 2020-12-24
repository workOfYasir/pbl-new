<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Teachers</title>


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


 

 
<div class="j-wrapper j-wrapper-640" style="margin-top:-30px;">
<form action="http://html.codedthemes.com/mash-able/light/j-pro/php/action.php" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate  >

<div class="j-content">

<div class="j-row">
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="first_name">
<i class="icofont icofont-ui-user"></i>
</label>
<input type="text" id="first_name" name="first_name" placeholder="First name">
 </div>
</div>
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="last_name">
<i class="icofont icofont-ui-user"></i>
</label>
<input type="text" id="last_name" name="last_name" placeholder="Last name">
</div>
</div>
</div>


<div class="j-row">
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="email">
<i class="icofont icofont-envelope"></i>
</label>
<input type="email" placeholder="Email" id="email" name="email">
</div>
</div>
<div class="j-span6 j-unit">
<div class="j-input">
<label class="j-icon-right" for="phone">
<i class="icofont icofont-phone"></i>
</label>
<input type="text" placeholder="Phone" id="phone" name="phone">
<span class="j-tooltip j-tooltip-right-top">Your contact phone number</span>
</div>
</div>
</div>

<div class="divider gap-bottom-25"></div>

<div class="j-unit">
<label class="j-input j-select">
<select name="country">
<option value="" selected>Select country</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Brazil">Brazil</option>
<option value="Canada">Canada</option>
<option value="Germany">Germany</option>
<option value="India">India</option>
<option value="Italy">Italy</option>
<option value="Japan">Japan</option>
<option value=">Netherlands">Netherlands</option>
<option value=">New Zealand">New Zealand</option>
<option value="Philippines">Philippines</option>
<option value="Portugal">Portugal</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Switzerland">Switzerland</option>
<option value="Sweden">Sweden</option>
<option value="Turkey">Turkey</option>
<option value="j-United Arab Emirates">j-United Arab Emirates</option>
<option value="j-United Kingdom">j-United Kingdom</option>
<option value="USA">USA</option>
</select>
<i></i>
</label>
</div>


<div class="j-row">
<div class="j-span8 j-unit">
<div class="j-input">
<label class="j-icon-right" for="city">
<i class="icofont icofont-building"></i>
</label>
<input type="text" id="city" placeholder="City" name="city">
</div>
</div>
<div class="j-span4 j-unit">
<div class="j-input">
 <label class="j-icon-right" for="post">
<i class="icofont icofont-file-code"></i>
</label>
<input type="text" id="post" placeholder="Post code" name="post_code">
</div>
</div>
</div>


<div class="j-unit">
<div class="j-input">
<label class="j-icon-right" for="address">
<i class="icofont icofont-building"></i>
</label>
<input type="text" id="address" placeholder="Address" name="address">
</div>
</div>

<div class="divider gap-bottom-25"></div>

<div class="j-unit">
<label class="j-input j-select">
<select name="position">
<option value="" selected>Choose desired position</option>
<option value="tech lead">Tech Lead</option>
<option value="product manager">Product Manager</option>
<option value="senior developer">Senior Developer</option>
<option value="middle developer">Middle Developer</option>
<option value="junior developer">Junior Developer</option>
<option value="QA specialist">QA Specialist</option>
<option value="system administrator">System Administrator</option>
</select>
<i></i>
</label>
</div>


<div class="j-unit">
<div class="j-input">
 <textarea placeholder="Additional info" spellcheck="false" name="message"></textarea>
<span class="j-tooltip j-tooltip-right-top">Any useful information about you</span>
</div>
</div>


<div class="j-row">
<div class="j-span6 j-unit">
<div class="j-input j-append-small-btn">
<div class="j-file-button">
Browse
<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
</div>
<input type="text" id="file1_input" readonly="" placeholder="add your CV">
<span class="j-hint">Only: doc / docx / xls /xlsx, less 1Mb</span>
</div>
</div>
<div class="j-span6 j-unit">
<div class="j-input j-append-small-btn">
<div class="j-file-button">
Browse
<input type="file" id="file2" name="file2" onchange="document.getElementById('file2_input').value = this.value;">
</div>
<input type="text" id="file2_input" readonly="" placeholder="add your CV">
<span class="j-hint">Only: doc / docx / xls /xlsx, less 1Mb</span>
</div>
</div>
</div>


<div class="j-response"></div>

</div>

<div class="j-footer">
<button type="submit" class="btn btn-primary">Send</button>
<button type="reset" class="btn btn-default m-r-20">Reset</button>
 </div>

</form>
</div>
 
 


</div>






<div class="tab-pane" id="profile7" role="tabpanel">
<p class="m-0">2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
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
