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

<!-- Mirrored from html.codedthemes.com/mash-able/light/task-board.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:17:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Manage Groups | PBL</title>


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

<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<link rel="stylesheet" type="text/css" href="../assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../../bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../bower_components/sweetalert/css/sweetalert.css">


<link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="../assets/pages/menu-search/css/component.css">
<link rel="stylesheet" type="text/css" href="../assets/css/component.css">


<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<link rel="stylesheet" type="text/css" href="../assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">

<style>
 
 
 

.notification {
 
  position: relative;
  display: inline-block;
 
}


.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
div.div_class_name {     /* this will hide div with class div_class_name */
  display:none;
}

#diamond {
position:absolute;  
z-index:auto;  
}
#spade {
position:absolute;  
z-index:1;
  
left:65px;  
top:20px;  
}

</style>

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
<div class="navbar-logo" >
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="#">
<img class="img-fluid" src="../assets/images/auth/loginn.png" alt="Theme-Logo" height="60px;" width="60px;" />
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
<img src="../assets/images/user.png" alt="User-Profile-Image">
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
<img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">


</a>
<div class="media-body">
<div class="f-13 chat-header">Josephin Doe</div>
</div>
<button class="btn btn-mini btn-success btn-round">send request</button>
</div>

*
</div>
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
<div class=" row">
<div class="col-4">
<h4>All Groups Groups</h4> 
</div>
<div class="col-4">

<?php

include 'connection.php';
  $iteration = $_GET['iteration'];

 $sql = "SELECT * FROM iterations WHERE it_id='$iteration' ";

 $res = $conn->query($sql);
 $row = $res->fetch_assoc();

 $deadline = $row['deadline'];
 $fal = $row['fall'];
 
 $cour = $_GET['cour'];
  

 
 ?>
<h4>Deadline : <small style="color:orange;"> <?php echo $deadline;?></small></h4> 

 
</div>
<div class="col-4">

 </div>
</div>

</div>


<form action="save.php" method="POST">
 
</form>
 

<div class="page-body">




<div class="row">


 
 
<?php

include 'connection.php';
 
	 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 
	 
	 include 'connection.php';
	 
	 
   

   
   
   
$sql = "SELECT * FROM iterations_submittion where it_id='$iteration'";

$result_grp_id = $conn->query($sql);

if ($result_grp_id->num_rows > 0) {
  

	
    while($row_grp_id = $result_grp_id->fetch_assoc())
     {
		$submit_grp_id = $row_grp_id['grp_id'];
		$submit_grp_id_date = $row_grp_id['date'];
		$submit_grp_id_fall = $row_grp_id['fall'];
		$file = $row_grp_id['file'];
   
$sql = "SELECT * FROM  iteration_evaluation where
 it_id='$iteration' and grp_id	='$submit_grp_id'";

$r = $conn->query($sql);

if ($r->num_rows > 0) {
  
}
else{
		
$sql = " SELECT * FROM groupleader  where gid='$submit_grp_id'  ";
$result = $conn->query($sql);
$i=1;
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		                        
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].' </span>
</div>
<div class="col-sm-4">';

if($submit_grp_id_date > $deadline)
{
echo '<span class="label label-warning f-right">Late Submission</span>';
}
else{
echo '<span class="label label-success f-right">On Time </span>';
}
echo '</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L) </td>
	  <td></td>
      <td  >'.$row['member'].'  </td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
<a href="'.$file.'" target="_blank"> <button type="button" class="btn btn-info btn-mini f-right m-1 alert-drop m-b-10"  >Download File</button>
 </a>
<a href="iteration-evaluation-sheet?gid='.$gid.'&it_id='.$iteration.'&cour='.$cour.'" target="_blank"><button type="button" class="btn btn-success btn-mini f-right m-1 alert-drop m-b-10"  >Evaluate</button>
 </a>
 

 



</div>

</div>
</div>';

$i= $i+1;
	 }
	 

	 
	 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 
	 
	 }
}
}
	 else
	 {
	
 
 

echo '
<div class="col-sm-12">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<h3 style="color:orange;" >No Submission 
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate=';
	 echo "'" ;
	 echo '[ "Yet !", "Yet! For This Iteration ", "Yet !", "Yet! For This Iteration ", "Yet !" ]';
	 echo "'";
	 echo '></span>
</h3>
<h4> '.$sec.' </h4></div></center>';

}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  // show whow not submit iteration yet   
	  // show whow not submit iteration yet   
	  // show whow not submit iteration yet   
	  // show whow not submit iteration yet   
	  // show whow not submit iteration yet   
	  // show whow not submit iteration yet   
	    

		
			 
	$sql = "SELECT * FROM groupleader where fall='$fal' and   
	course	='$cour'   ";

$result_not= $conn->query($sql);

 
	
    while($result_not_row = $result_not->fetch_assoc())
     {
          
		 $g = $result_not_row['gid']; 
	 
	 
	$sql = "SELECT * FROM iterations_submittion where
	it_id='$iteration' and grp_id='$g'";

$result_grp_id = $conn->query($sql);

  if ($result_grp_id->num_rows > 0) {
	  

  }
  else
  {
    // while($row_grp_id = $result_grp_id->fetch_assoc())
    // {
		
 $sql = "SELECT * FROM  iteration_evaluation where
 it_id='$iteration' and grp_id	='$g'";

$r = $conn->query($sql);

if ($r->num_rows > 0) {
  
}
else{
  $sql = " SELECT * FROM groupleader  where gid='$g'  ";
$result = $conn->query($sql);
$i=1;
 while($row = $result->fetch_assoc())
	 
	 {
		 
		 $fall = $row['fall'];
		 $sec = $row['section'];
		 $course = $row['course'];
		 $gid = $row['gid'];
 
		                        
 

echo '
<div class="col-sm-4">
<div class="card card-border-default">
<div class="card-header">
<div class="row">
<div class="col-sm-8">
<span style="text:60px;" class="label label-primary f-left">'.$row['proj'].' </span>
</div>
<div class="col-sm-4">';

 
echo '<span class="label label-danger f-right">Not Submit</span>';
 
 
echo '</div>
</div>
</div>
<div class="card-block">
<h5 >Members<br><br> </h5>

<table>
  
    <tr>
      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Name</strong></p></td>
      <td> &nbsp&nbsp </td>      
      <td scope="col"><p class="task-due"><strong style="font-size:13px" class="label label-danger">Roll no</strong></p></td>

      
    </tr>
  
  <tbody>';
  
   $roll = $row['member'];
  
  $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		    $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   $rsroll = $rroll->fetch_assoc(); 
	  
    echo '<tr>
      
      <td >'.$mname.' (L) </td>
	  <td></td>
      <td  >'.$row['member'].'  </td>
      
    </tr>';
  

 
	 $sqlm = "SELECT * FROM  g_members where  gid ='$gid'  ";

		   $resm = $conn->query($sqlm);
		  
		   
	 
        
  while( $rowm = $resm->fetch_assoc())
  {
	 
	 $roll = $rowm['roll_no'];
	 $sroll = "SELECT * FROM  student where  s_roll ='$roll'  ";

		   $rroll = $conn->query($sroll);
		   
		   $mname="No Record Found";
		   
		   if ($rroll->num_rows > 0) {
  $rsroll = $rroll->fetch_assoc(); 
  
   $mname=$rsroll['s_name'];
		   }
		  
		   
		   
		   
	  
    echo '<tr>
      
      <td >'.$mname.'</td>
	  <td></td>
      <td>'.$rowm['roll_no'].'</td>
      
    </tr>';
  }
   
  echo '</tbody>
</table>


</div>
<div class="card-footer">
<div  >
 
<a >'.$fall.' | </a>
<a>'.$sec.' | </a>';


$s = "SELECT * FROM course where  c_id ='$course'  ";

		   $r = $conn->query($s);
		   $rs = $r->fetch_assoc();
		   

echo '<a >'.$rs['c_name'].'</a>



 

</div>
 
  <a href="iteration-evaluation-sheet?gid='.$gid.'&it_id='.$iteration.'&cour='.$cour.'" target="_blank"><button type="button" class="btn btn-success btn-mini f-right m-1 alert-drop m-b-10"  >Evaluate</button>
 </a>

 



</div>

</div>
</div>';

$i= $i+1;
	 }
	 

	 
	 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 // show remaining for group leader 
	 
	 
	// }
	 }}
	 
	 } 
	 
	 

?>


<script>

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
 


 
 

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
                    <img src="../assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

<script type="text/javascript" src="../../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../../bower_components/classie/js/classie.js"></script>

<script type="text/javascript" src="../assets/pages/task-board/task-board.js"></script>

<script type="text/javascript" src="../../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="../assets/js/pcoded.min.js"></script>
<script src="../assets/js/demo-12.js"></script>
<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/jquery.mousewheel.min.js"></script>

<script type="text/javascript" src="../../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../../bower_components/classie/js/classie.js"></script>
<script type="text/javascript" src="../../bower_components/sweetalert/js/sweetalert.min.js"></script>
<script type="text/javascript" src="../assets/js/conf.js"></script>

<script type="text/javascript" src="../assets/js/modalEffects.js"></script>
<script type="text/javascript" src="../assets/js/classie.js"></script>

<script type="text/javascript" src="../assets/pages/task-board/task-board.js"></script>

<script type="text/javascript" src="../../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="../assets/js/pcoded.min.js"></script>
<script src="../assets/js/demo-12.js"></script>
<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/jquery.mousewheel.min.js"></script>
<?php include("../scripts.php"); ?>
