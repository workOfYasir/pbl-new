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


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:52:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Assign Projects</title>


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


<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
 

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
<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" href="../bower_components/select2/css/select2.min.css" />

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
<link rel="stylesheet" type="text/css" href="../bower_components/multiselect/css/multi-select.css" />

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 
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
<div class="page-header">
<div class="page-header-title">
<h4>Assign  | Evaluators | Projects</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="manager-index.php">
<i class="icofont icofont-home"></i>
</a>
</li>
 
<li class="breadcrumb-item"><a href="#!">Dashboard</a>
</li>
</ul>
</div>
</div>
<div class="page-body">
<div class="row">


<div class="modal fade modal-flex" id="Modal-tab" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tab-home" role="tab">Add New Evaluator</a>
</li>
<li class="nav-item">
<a class="nav-link " data-toggle="tab" href="#tab-update" role="tab">Update Evaluator</a>
</li>
 
 
 
 
</ul>
<div class="tab-content modal-body">
<div class="tab-pane active" id="tab-home" role="tabpanel">
<h6>New Evaluator</h6>
<form action="add-Evaluator.php" method="POST">
Evaluator Name:
<input pattern="[a-zA-Z_- ]*" style="margin-bottom:5px;width:60%;"  autocomplete="off" type="text"  name="title"  class="form-control" required/>
Email:
<input   style="margin-bottom:5px;width:80%;"  autocomplete="off" type="email"  name="email"  class="form-control" required/>
                        
						 
 
						<input style="display:none;" name="level" type="number" value="1" required/>
						  <button type="submit" class="btn btn-success float-right">Save</button>
 </form>
</div>
<script>
function drop(id)
{
	//window.alert(id);
	window.location="dellEvaluator.php?eid="+id;
}
</script>

<div class="tab-pane " id="tab-update" role="tabpanel">
<h6>Update Evaluator</h6>
 
 						<?php
						include 'connection.php';

 
$sql = "SELECT * FROM  evaluators  ";
$resul = $conn->query($sql);
 if ($resul->num_rows > 0) {
	 			echo '
<div class="dt-responsive table-responsive">
<table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
<thead>
<tr>
<th>Sr.#</th>
<th>Name</th>
<th>Drop</th>
 
</tr>
</thead>
<tbody>';
$i=1;
	   
   while( $row = $resul->fetch_assoc())
 
 {
			
echo'
 
<tr>
<td>'.$i.'</td>
<td>'.$row['e_name'].'</td>
<td onclick="drop('.$row['e_id'].')" style="color:red;cursor:pointer;">Drop</td>
 
</tr>';
 
 $i++;
 
  
 }
 
 echo'
</tbody>
</table>
 </div>';
 }
 else
 {
 
	 echo "<br><span style='color:orange;'>Comming soon!</span>";
 }
?> 						   
 
</div>
                           

  
 
</div>
</div>
</div>
</div>
</div>





 

<div class="col-md-8">
<div class="row">



<div class="col-md-12">
<div class="card">
<div class="card-block">
<h5 >Assign Projects | </h5><span>Object Oriented Programming &nbsp; &nbsp; <h5> | </h5> F-19  </span> <h5 style="padding-left:8px;"> | </h5> <span style="color:orange;"><i> Level 2 </i><span>
<button type="button" class="btn btn-primary   float-right btn-mini btn-skew" data-toggle="modal" data-target="#Modal-tab">Add New Evaluator</button>
 </div>
<div class="card-block product-table">
<div class="table-responsive">
<form action="Assign-Projects.php" method="POST" >
<div class="row">
<div class="col-sm-6">
<script>
var studentsT = Array();

function displayTwo()
{
		
	var eve = document.getElementById("eve").value;
	 
	if (eve =="")
	{
		 document.getElementById('table').innerHTML = " ";
		 document.getElementById('ename').innerHTML = "Evaluator Name" ;
		 
	}

	    
		 var xmlhttp = new XMLHttpRequest();
		 
        xmlhttp.open("GET", "getTableEvaluator.php?eve="+eve, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				//window.alert(this.responseText);
               studentsT = JSON.parse(this.responseText);
               showTwo(studentsT);
            }
        };
		
    
	
	
}
  function showTwo(record) {
	  
	  var table = "";
	  

  
       
        for (var i = 0; i < record.length; i++) {
			
           table += "<tr>";
            table += "<td  >" + (i+1) + "</td>";
            table += "<td  >" + record[i].e_name + "</td>";
            table += "<td  >" + record[i].section + "</td>";
            table += "<td  >" + record[i].c_name + "</td>";
            table += "<td  >" + record[i].proj + "</td>";
            table += "<td style='color:red;cursor:pointer;' onclick='dellProj("+ record[i].a_id +")' > Drop </td>";
 
            table += "</tr>";
			document.getElementById('ename').innerHTML = record[i].e_name ;
		 
             
        }
		 table += "</select>";
        document.getElementById('table').innerHTML = table;
		 
    }
	function dellProj(id)
	{
		window.location ="dellAssignProj.php?a_id="+id;
		
	}
	

</script>
<h4 class="sub-title">Select Evaluator</h4>
<select onchange="displayTwo()" id="eve" name="evaluator" class="form-control form-control-inverse" required>
<option value="">Select Evaluator</option>
<?php
// for connection

include 'connection.php';



$sqlq = "SELECT  * from evaluators  ";
$resultq = $conn->query($sqlq);
$i=1;
while($roww = $resultq->fetch_assoc())
     
	 {
		 echo '
<option value="'.$roww['e_id'].'">'.$roww['e_name'].'</option>';
	 }
 ?>
</select>
</div>

<div class="col-sm-6">
<h4 class="sub-title">Select Section</h4>
<select onchange="display()" id="section" name="section" class="form-control form-control-inverse" required>
<option value="">Select Section</option>
<?php
// for connection

include 'connection.php';



$sqlq = "SELECT DISTINCT(s_sec),s_course FROM student_course   where fall='F-19' and s_course=3  ";
$resultq = $conn->query($sqlq);
$i=1;
while($roww = $resultq->fetch_assoc())
     
	 {
		 echo '
<option value="'.$roww['s_sec'].'">'.$roww['s_sec'].'</option>';
	 }
 ?>
</select>
</div>
</div>
<script>
var students = Array();

function display()
{
	var sec = document.getElementById("section").value;
	
	if (sec=="")
	{
		 document.getElementById('paste').innerHTML = " ";
	}
	    
		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "getProjects.php?sec="+sec, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				//window.alert(this.responseText);
                students = JSON.parse(this.responseText);
                show(students);
            }
        };
		
    
	
	
}
  function show(record) {
	  
	  var table = "";
	  

table += '<select style="width:250px;height:250px;" name="path[]" id="public-methods" multiple="multiple" required>';
  
       
        for (var i = 0; i < record.length; i++) {
             
			 table += "<option value='"+record[i].gid+"'>"+record[i].proj+"</option>";
             
        }
		 table += "</select>";
        document.getElementById('paste').innerHTML = table;
		 
    }

</script>
 <br>
 
<h4 class="sub-title">Assign Projects</h4>
	 <button type='button' class='btn btn-primary waves-effect waves-light m-b-10' id='select-all'>select all</button> 
 <button type='button' class='btn btn-primary waves-effect waves-light m-b-10' id='deselect-all'>deselect all</button> 
 <button type='button' class='btn btn-primary waves-effect waves-light m-b-10' id="select-5">select 5 elems</button> 
 <button type='button' class='btn btn-primary waves-effect waves-light m-b-10' id="deselect-5">deselect 5 elems</button> 
 <button type='submit' class='btn btn-success waves-effect waves-light m-b-10 float-right btn-round' > Assign Projects</button> 

 <span id="paste">
 


</span>
</form>
 

 
</div>
</div>
</div>
</div>
  
  
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->
 
 
  
 
  
 
 
 
 

<div class="col-md-12">

<div class="card">
<div class="card-header">
<h5>Evaluator's Assigned Projects</h5>
 <div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i> 
</div>
</div>
<div class="card-block">


<div class="dt-responsive table-responsive">
<table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
<thead>
<tr>
<th>Sr.#</th>
<th>Evaluator Name</th>
<th>Section</th>
<th>Course</th>
<th>Project</th>
<th>Drop</th>
</tr>
</thead>
<tbody id="table">
 
 
 
 
 
 
  
</tbody>
</table>
 </div>
 
</div>
</div>
</div>
  









 
  
 
 
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->
 <!-- ///////////////////////////////               -->




</div>

</div>
 
 
 
 
 
 
 

<div class="col-xl-4 col-md-4">

<div class="card">
<div class="card-header" >
<h5 style="color:#38b5ea;">Groups | Projects | Details</h5>
 <div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i> 
</div>
</div>
<div class="card-block">
<div class="table-responsive">
<table class="table table-xs">
<thead>
<tr>
 
<th>Section</th>
<th title="Remaining Groups">R.G</th>
<th title="Total Groups">T.G</th>
</tr>
</thead>
<tbody>
<?php

include 'connection.php';

 
$sqlq = "SELECT DISTINCT(s_sec),s_course FROM student_course   where fall='F-19' and s_course=3  ";
$resultq = $conn->query($sqlq);
$i=1;
while($roww = $resultq->fetch_assoc())
     
	 {
		 $sc = $roww['s_sec'];
		 $c = $roww['s_course'];
$sql = "SELECT * FROM student_course where   s_sec='$sc'  and s_course='$c'";

$result = $conn->query($sql);
 
    $row = $result->fetch_assoc();
     
	 

echo '
<tr>
 
<td>'.$i.". ".$row['s_sec'].'</td>';

 
 
 $sc =$row['s_sec'];
 
 $sqlcounNAme = "SELECT count(fall) as total FROM groupleader where course=3 and fall='F-19' and section='$sc'  "; 
$resultcounName = $conn->query($sqlcounNAme);

$rowcounName = $resultcounName->fetch_assoc();

 $total = $rowcounName['total'];
 
 
 $sqlcounNAme = "SELECT count(fall) as total FROM groupleader where course=3 and fall='F-19' and section='$sc' and position ='open'"; 
$resultcounName = $conn->query($sqlcounNAme);

$rowcounName = $resultcounName->fetch_assoc();

 $Rtotal = $rowcounName['total'];
 

echo '
 
<td>'.$Rtotal.'</td>
<td>'.$total.'</td>
 
</tr>';
$i++;
   }

?> 
</tbody>
</table>
</div>
</div>
</div>



<div class="user-card-block card">
<div class="card-block">
<div class="top-card text-center">
<img height=99 width=99 src="assets/images/widget/avatar-4.png" class="img-responsive" alt="">
</div>
<div class="card-contain text-center p-t-15">
<h5 class="text-capitalize p-b-10" id="ename">Evaluator Name</h5>
<p class="text-muted">Evaluator</p>
</div>
<div class="card-data m-t-10">
<div class="row">

<div class="col-6 b-r-default text-center">
 <span>Questions</span>
<p class="text-muted">coomig soon</p>
</div>
<div class="col-6 text-center">
<span>Answers</span>
<p class="text-muted">coomig soon</p>

</div>
</div>
</div>
<div class="card-button p-t-35">
<div class="row">
<div class="col-6 text-right">
 <button class="btn btn-primary btn-round" title="Available Soon"  disabled>Follow</button>
</div>
<div class="col-6 text-left">
<button class="btn btn-success btn-round"  title="Available Soon"  disabled>Message</button>
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
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 13:58:07 GMT -->
</html>
