<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]=="Student") 
 {
    header('location:login');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];


?>

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | <?php echo $userType; ?></title>


 


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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include("links.php") ?>
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
<table id="new-cons" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Sr#</th>
<th>Student Name</th>
<th>Roll No</th>
<th>Department</th>
<th>Section</th>
<th>Enrolled Course</th>
<th>Level</th>
<th>Fall</th>
<th>Teacher</th>
<th>Operation</th>
</tr>
</thead>
<tbody>


<?php
// for connection

include 'connection.php';
$sql = "SELECT * FROM student_course";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	$i=1;
    while($row = $result->fetch_assoc())
     {
     	$roll = $row['s_roll'];
		
		$sqll = "SELECT * FROM student where s_roll = '$roll' and is_dell='no'";
         $resultt = $conn->query($sqll);
		 
		 if ($resultt->num_rows > 0) 
		 {
		 echo "<tr>";
		echo "<td>".$i."</td>";
		
		
         $roww = $resultt->fetch_assoc();
 echo "<td>".$roww['s_name']."</td>";
	echo "<td>".$roww['s_roll']."</td>";
	
	$dept = $roww['s_dept'];
	
	$sqll = "SELECT * FROM department where dept_id = $dept";
         $resultt = $conn->query($sqll);
         $roww = $resultt->fetch_assoc();
	
	echo "<td>".$roww['dept_name']."</td>";
	
	
	
	echo "<td>".$row['s_sec']."</td>";
 
    
		$course = $row['s_course'];
		$sqll = "SELECT * FROM course where c_id = $course";
         $resultt = $conn->query($sqll);
         $roww = $resultt->fetch_assoc();
		 echo "<td>".$roww['c_name']."</td>";
		 echo "<td>".$roww['c_level']."</td>";
		
		 echo "<td>".$row['fall']."</td>";
		

		
		$teacher = $row['teacher'];
		$sqll = "SELECT * FROM  teacher where t_id = $teacher";
         $resultt = $conn->query($sqll);
         $roww = $resultt->fetch_assoc();
		echo "<td>".$roww['t_name']."</td>";
	
	
	
	
	 
	
	echo "<td> 
	<a  onclick='delete_student(".'"'.$roll.'"'.")' ><button type='button' class='btn btn-danger'>Delete</button> </a> 
	</td>";
	
	echo "</tr>";
	$i=$i+1;
	
	 }
    }

                    
   
} else {
        echo "<tr><td colspan='10'> 
	<center style='color:orange'>No Record Added Yet!</center>
	</td>
	 </tr>";
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

 
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>

 


 
 
 
 
<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="../bower_components/select2/js/select2.full.min.js"></script>

<script type="text/javascript" src="../bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
</script>
<script type="text/javascript" src="../bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/pages/advance-elements/select2-custom.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<?php include("scripts.php") ?>