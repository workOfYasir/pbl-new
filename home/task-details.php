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

 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Task Detail | PBL</title>

 

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../bower_components/switchery/css/switchery.min.css">

<link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

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
<h4>Task details</h4>
 </div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="#">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Task</a>
</li>
<li class="breadcrumb-item"><a href="#!">Task-Detail</a>
</li>
</ul>
</div>
</div>



<?php

$fall =$_GET['fall'];
$it_id =$_GET['it_id'];
$grp_id =$_GET['grp_id'];


include 'connection.php';
$sql = "SELECT * FROM iterations where fall='$fall' and it_id='$it_id'";

$result = $conn->query($sql);
 
   $row = $result->fetch_assoc();
     
	 $title=$row['it_title'];
	 $it_details=$row['it_details'];
	 $file=$row['file'];
	 $deadline=$row['deadline'];


?>


<div class="page-body">
<div class="row">

<div class="col-xl-4 col-lg-12 push-xl-8 task-detail-right">
<div class="card">
<div class="card-header">
<h5 class="card-header-text"><i class="icofont icofont-clock-time m-r-10"></i>Task Deadline</h5>
</div>
<div class="card-block">
 
 DeadlineDate : <?php echo $deadline; ?><br>
 Time: 11:59PM

</div>


 <div class="card-footer">
 
<form action="upload-task-solution?fall=<?php echo $fall;?>&&it_id=<?php echo $it_id;?>&&grp_id=<?php echo $grp_id;?>" method="POST" enctype="multipart/form-data" >
<div class="f-left">
<span class=" txt-primary"> <i class="icofont icofont-chart-line-alt"></i>
Submit Here:</span>
<div class="dropdown-secondary dropdown d-inline-block">

<input type="file" name="file"  required />
<br>
<br>


 <button type="submit"class="btn btn-sm btn-info   waves-light" type="button" > Submit </button>

 
 <div class="dropdown-menu" aria-labelledby="dropdown4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
 
<div class="dropdown-divider"></div>
 
</div>

</div>
</div>
 </form>
</div>






</div>
 
 
<div class="card">
<div class="card-header">
<h5 class="card-header-text"><i class="icofont icofont-users-alt-4"></i> Assigned users</h5>
</div>
<div class="card-block user-box assign-user">

<?php

include 'connection.php';

$sql = "SELECT * FROM  groupleader where  gid='$grp_id'";

$result = $conn->query($sql);
 
   $row = $result->fetch_assoc();
     
	 $roll=$row['member'];
 


?>

 
<div class="media">
<div class="media-left media-middle photo-table">
<a href="#">
<img class="img-circle" src="assets/images/avatar-1.png" alt="chat-user">
</a>
</div>
<div class="media-body">
<h6><?php echo $roll;?></h6>
<p>Group Leader</p>
</div>
<div>
<a href="#" class="text-muted"> <i class="icon-options-vertical"></i></a>
</div> 
</div>
 



<?php

 
include 'connection.php';

  $sql = "SELECT * FROM  g_members where  gid='$grp_id'";

$result = $conn->query($sql);
 
  while( $row = $result->fetch_assoc())
  
   {
     
	 $roll_no=$row['roll_no'];
 


?>

 


<div class="media">
<div class="media-left media-middle photo-table">
<a href="#">
<img class="img-circle" src="assets/images/avatar-1.png" alt="chat-user">
</a>
</div>
<div class="media-body">
<h6><?php echo $roll_no;?></h6>
<p>Group Member</p>
</div>
<div>
<a href="#" class="text-muted"> <i class="icon-options-vertical"></i></a>
</div> 
</div>

<?php

  }
 

?>

 




 
</div>
</div>
</div>


<div class="col-xl-8 col-lg-12 pull-xl-4">
<div class="card">
<div class="card-header">
<h5><i class="icofont icofont-tasks-alt m-r-5"></i> <?php echo $title; ?></h5>
<?php
date_default_timezone_set("Asia/Karachi");
		 $Todaydate = date("Y-m-d");

if($Todaydate > $deadline)
{

echo '<button class="btn btn-sm btn-danger  f-right   waves-light" type="button"  > Late </button>
';
}
else
{
	echo '<button class="btn btn-sm btn-success   f-right  waves-light" type="button"  > Active </button>
';
}


?>


 </div>
<div class="card-block">
<div class="">


<div class="m-b-20">
 <?php echo $it_details; ?>
</div>
 
  
 
<div class="row">
 
 
 
<div class="col-md-6 col-xl-3">
<div class="card thumb-block">
<div class="thumb-img">
<img src="assets/images/task/task-u4.jpg" class="img-fluid width-100" alt="task-u4.jpg">
<div class="caption-hover">
<span>
<a target="_blank" href="<?php echo $file; ?>" class="btn btn-primary btn-sm"><i class="icofont icofont-ui-zoom-in"></i> </a>
<a target="_blank" href="<?php echo $file; ?>" class="btn btn-primary btn-sm"><i class="icofont icofont-download-alt"></i> </a>
</span>
</div>
</div>
<div class="card-footer text-center">
<a target="_blank" href="<?php echo $file;?>"> File </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card-footer">
<div class="f-left">
<span class=" txt-primary"> <i class="icofont icofont-chart-line-alt"></i>
Status: &nbsp;</span>
<div class="dropdown-secondary dropdown d-inline-block">

<?php
date_default_timezone_set("Asia/Karachi");
		 $Todaydate = date("Y-m-d");

if($Todaydate > $deadline)
{

echo '<button class="btn btn-sm btn-danger   waves-light" type="button"  > Late </button>
';
}
else
{
	echo '<button class="btn btn-sm btn-success   waves-light" type="button"  > Active </button>
';
}


?>
<div class="dropdown-menu" aria-labelledby="dropdown4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
 
<div class="dropdown-divider"></div>
 
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
</div>

 
<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

<script src="../bower_components/countdown/js/jquery.countdown.js"></script>
<script src="assets/pages/counter/task-detail.js"></script>

<script type="text/javascript" src="../bower_components/switchery/js/switchery.min.js"></script>

<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>

<script>
    // Multiple swithces
    var elem = Array.prototype.slice.call(document.querySelectorAll('.js-small'));

    elem.forEach(function(html) {
        var switchery = new Switchery(html, {
            color: '#1abc9c',
            jackColor: '#fff',
            size: 'small'
        });
    });
</script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/task-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:17:28 GMT -->
</html>
