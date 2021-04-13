<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="Student")
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

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:52:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Student</title>

 

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

 

</div>
</div>
</div>
</nav>

 
 
<div class="pcoded-main-container">
<div class="pcoded-wrapper">




<nav class="pcoded-navbar">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
<li >
<a href="student-index">
<span class="pcoded-micon"><i class="ti-home"></i></span>
<span class="pcoded-mtext" data-i18n="nav.animations.main">Dashboard</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
 <li class="active" >
<a href="iterations-work">
<span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.animations.main">Manage Iterations</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

 
 



</ul>





</div>
</nav>





<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>Manage Iterations</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="student-index.php">
<i class="icofont icofont-home"></i>
</a>
</li>
 
<li class="breadcrumb-item"><a href="#">Manage Iterations</a>
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
		 
	date_default_timezone_set("Asia/Karachi");
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


 
 

 


<div class="col-md-12">
<div class="card">
<div class="card-block">
<h5>Task Details</h5>
</div>
<div class="card-block product-table">
<div class="table-responsive">
<table class="table">
<thead>
<tr class="text-uppercase">
<th>section</th>
<th>Subject</th>
<th>Task</th>
<th>Due Date</th>
<th>Department</th>
<th>Fall</th>

<th>Task Status</th>
<th>Group Status</th>
<th> Result</th>

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
     
	 {    $fal= $row['fall'];
	      $sec = $row['s_sec'];
		  $cid = $row['s_course'];
		 $sql = "SELECT * FROM iterations where fall='F-19' and course_id='$cid'";

$result_it = $conn->query($sql);

// for iterations 		 
		  while($row_it = $result_it->fetch_assoc())
     
	 {
	     
	      $it_id=$row_it['it_id'];

 echo '<tr>
<td>'.$i.". ".$sec.'</td>
 ';

  
 $sqlcNAme = "SELECT * FROM course where c_id=$cid";

$resultcName = $conn->query($sqlcNAme);

$rowcName = $resultcName->fetch_assoc();

 $cname = $rowcName['c_name'];
 
 
 
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 
  $isMember = "";
  $isReq = "";
  $isOpen = "";
  $grpid = "";
   
 
	 
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
			  $grpid = $gropId;
 
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
  $grpid = $roww['gid'];
 
  }
  
 
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////////////////
 
 
 
 
 
 
 
 
 
 
echo '
<td>'.$cname.'</td>
<td>'.$row_it['it_title'].'</td>
<td><i class="icofont icofont-ui-calendar"></i>&nbsp;'.$row_it['deadline'].'</td>
<td>Computer Science</td>
<td>'.$row['fall'].'</td>';

$sql = "SELECT * FROM   iterations_submittion   
where it_id='$it_id' and grp_id='$grpid'";
$resul = $conn->query($sql);

$flag_for_submittion=0;

 if ($resul->num_rows > 0) {
	 $flag_for_submittion=1;

echo '<td><center style="color:green">Submited</center></</td>';
 }
 else
 {
	$deadline=$row_it['deadline'];
date_default_timezone_set("Asia/Karachi");
		 $Todaydate = date("Y-m-d");
		 
if( $deadline < $Todaydate )
{	
		 
echo '<td><center style="color:red">Deadline Over (Late)</center></</td>';
}
else
{
echo '<td><center style="color:green">Active(Un-Submit)</center></</td>';	
} 
	 
 }





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



	 if($flag_for_submittion==0)
	 {		 
if($isMember=='yes')
{
echo '<td><a href="task-details?fall='.$fal.'&&it_id='.$it_id.'&&grp_id='.$grpid.'"><button type="button" class="btn btn-success btn-round ">View</button></a></td>
</tr>';
}
else
{
	echo '<td> <span style="color:red;">First Join Group</span> </td></tr>';
	 }
	 
	 
	 }
else
{
	
	  $sql = "SELECT  AVG(point) as marks from iteration_evaluation where
 it_id='$it_id' and grp_id	='$grpid'";

$r = $conn->query($sql);
	$row = $r ->fetch_assoc();
	  $mark= round($row['marks']);
if ($mark!=0) {
    
 

  echo '<td> <h5 style="color:Green;">'.round($row['marks']).' marks</h5> </td></tr>';
}
else{
	echo '<td> <h5 style="color:Green;">N/A</h5> </td></tr>';
}	}
		 
		 $i=$i+1;	 
}// for iterations

	 }


}
?>
 
 
 
 
</tbody>
</table>


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
