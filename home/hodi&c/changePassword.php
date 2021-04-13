<?php
session_start();
 
  if(empty($_SESSION["userName"]))
 {
    header('location:login.php');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];
 
 

?>
<?php

include 'connection.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
	 $pass = $_POST['change'];
	 
	 $q = "SELECT * FROM users WHERE  u_idno='$userRoll'  AND u_password='$pass'";
	$r = $conn->query($q);
	
if ($r->num_rows > 0)
{
	 

header("Location:NewPassword");	
	         
}
	else
	{
	echo " <script type='text/javascript'>

      if(window.confirm('In Correct Password Please Enter Your Current Password!!)'))
      {
      
       	window.location = 'changePassword';
}
else
{
	window.location = 'student-index';
}
       	               
</script>
         ";
	}
	 
 
 
}
	


?>
	

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/auth-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:07:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Change Password | PBL</title>


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

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body class="fix-menu">
	
 	
	
<section >

<div class="container">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body m-auto">
<form class="md-float-material" action="#" method="POST">
 <br> <br> <br>
<div class="auth-box">
<div class="row">
<div class="col-md-12">
<h3 class="text-center"><i class="icofont icofont-lock text-primary f-80"></i></h3>
</div>
</div>
<p class="text-inverse b-b-default text-right">Back to <a href="login.php">Login.</a></p>
<div class="input-group">
<input autocomplete="off" type="password"  name="change" class="form-control" placeholder="Enter Current Password" required>
<span class="md-line"></span>
</div>

<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i class="icofont icofont-lock"></i> Submit </button>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-8">
<p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
<p class="text-inverse text-left"><b>Your Autentification Team</b></p>
</div>
<div class="col-4">
<img src="assets/images/auth/pbllogo.png" alt="small-logo.png" height="70px" width="70px;" style="margin-left:17px;">
</div>
</div>
</div>
</form>

</div>

</div>

</div>

</div>

</section>


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

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/auth-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:07:46 GMT -->
</html>
