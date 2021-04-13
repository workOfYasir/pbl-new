<?php
session_start();

include 'connection.php';

$nameERR = " ";
$passwordERR = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {



	$email = strtoupper($_POST['name']);
	$pass = $_POST['password'];


	$q = "SELECT * FROM users WHERE
	u_password='$pass' and
				u_email='$email'   
					and is_dell='no'";
	$r = $conn->query($q);

	if ($r->num_rows > 0) {

		$row = $r->fetch_assoc();

		$_SESSION["userName"] =  $row['u_name'];
		$_SESSION["useremail"] = strtoupper($row['u_email']);
		$_SESSION["userType"] =  $row['u_type'];
		$_SESSION["userId"] = $row['u_id'];
		$_SESSION["userRoll"] =  strtoupper($row['u_idno']);
		if ($row['u_type'] == "PBL Manager") {
			header("Location:manager-index");
		} elseif ($row['u_type'] == "Student") {
			$_SESSION["userCourse"] = $row['u_id'];
			header("Location:student-index");
		} elseif ($row['u_type'] == "Evaluator") {

			header("Location:evaluator-index");
		}elseif($row['u_type'] == "HODI&C"){
			header("Location:hodi&c/hodi&c-index");
		}
 	} else{$passwordERR = "Entered Password Or User Name is Incorrect!!!";
				$nameERR = "";}
//else {

// 		$q = "SELECT * FROM users WHERE
//   u_password='$pass' and
// 	 u_email='$email' 
// 	 or u_idno='$email'  and is_dell='no'";
// 		$r = $conn->query($q);

// 		if ($r->num_rows > 0) {
// 			$row = $r->fetch_assoc();


// 			$_SESSION["userName"] =  $row['u_name'];
// 			$_SESSION["useremail"] = strtoupper($row['u_email']);
// 			$_SESSION["userType"] =  $row['u_type'];
// 			$_SESSION["userId"] = $row['u_id'];
// 			$_SESSION["userRoll"] =  strtoupper($row['u_idno']);
// 			$sessRoll = $_SESSION["userRoll"];
// 			if ($row['u_type'] == "Student") {



// 				header("Location:student-index");
// 			}
// 			if ($row['u_type'] == "Evaluator") {
// 				header("Location:evaluator-index");
// 			}
// 		}
// 	}

// 	$nameERR = "";
// 	$passwordERR = "";

// 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 		$email = strtoupper($_POST['name']);
// 		$q = "SELECT * FROM users WHERE u_email='$email' and is_dell='no'";
// 		$r = $conn->query($q);



// 		if ($r->num_rows > 0) {

// 			$passwordERR = "Entered Password Is Incorrect!!!";
// 			$nameERR = "";
// 		} else {
// 			$passwordERR = "Entered Password Is Incorrect!!!";
// 			$nameERR = "User Name is Incorrect!!!";
// 		}
// 	}
}



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:14:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>Login | PBL</title>




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

	<section>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="login-card card-block auth-body m-auto">
						<form class="md-float-material" method="POST" action="">
							<!--<div class="text-center logo">
<img  src="assets/images/auth/pbllogo.png" alt="log.png" height="60px" width="65px;">
</div>
-->
							<div class="auth-box mt-10">
								<div class="row m-b-25">
									<div class="col-md-12">
										<h3 class="text-left txt-primary">Sign In</h3>
									</div>
								</div>
								<hr />


								<input type="text" value="<?php
															if ($_SERVER["REQUEST_METHOD"] == "POST") {
																echo $email = $_POST['name'];
															}
															?>" class="form-control" name="name" autocomplete="off" placeholder="User Name" required />
								<p style="color:red;" class="float-left">
									&nbsp;<?php
											echo $nameERR;
											?>
								</p>
								<span class="md-line"></span>

								<input type="password" value="<?php
																if ($_SERVER["REQUEST_METHOD"] == "POST") {
																	echo $email = $_POST['password'];
																}
																?>" class="form-control" pattern="[^']*" name="password" autocomplete="off" placeholder="Password" required />
								<p style="color:red;" class="float-left">

									<?php

									echo $passwordERR;

									?>
								</p>
								<span class="md-line"></span>
								<div class="input-group">
									<div class="row m-t-25 text-left" style="width:1200px">
										<div class="col-sm-7 ">
											<div class="checkbox-fade fade-in-primary">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
													<span class="text-inverse">Remember me</span>
												</label>
											</div>
										</div>
										<div class="col-sm-5  forgot-phone float-right">
											<a href="#" class="text-right f-w-600 text-inverse"> Forgot your Password?</a>
										</div>
									</div>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-8">
										<p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
										<p class="text-inverse text-left"><b>Your PBL Team</b></p>
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

<!-- Mirrored from html.codedthemes.com/mash-able/light/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:14:54 GMT -->

</html>