<?php

session_start();

if (empty($_SESSION["userName"]) || $_SESSION["userType"] != "Evaluator") {
  header('location:login');
}
include 'connection.php';

$userName = $_SESSION["userName"];
$userType = $_SESSION["userType"];
$userRoll = $_SESSION["userRoll"];


$sqlq = "SELECT * from evaluators where email = '$userRoll'";
$resultq = $conn->query($sqlq);

$roww = $resultq->fetch_assoc();

$eid = $roww['e_id'];

$gid=$_GET['gid'];

$sql = "SELECT * from groupleader where gid = '$gid'";
$result22 = $conn->query($sql);

$roww2 = $result22->fetch_assoc();

$cid = $roww2['course'];
echo $cid;

$sql2 = "SELECT * from iterations where course_id = '$cid'";



$result22 = $conn->query($sql2);

// $roww22 = $result22->fetch_assoc();

//$id_title = $roww22['it_title'];







$sqlq = "SELECT assign_projects.section , groupleader.proj	, student.s_name  ,assign_projects.e_id	, assign_projects.grp_id	from assign_projects 
       JOIN  groupleader on groupleader.gid=assign_projects.grp_id
	   JOIN student on student.s_roll = groupleader.member
	   where assign_projects.e_id = '$eid'  and groupleader.projEvaluate ='no'
	   ";
$resultq = $conn->query($sqlq);


?>

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>PBL | <?php echo $userType; ?></title>




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
  <link rel="stylesheet" type="text/css" href="assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
          <div class="navbar-logo" data-navbar-theme="theme4">
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


          include 'evaluator_nav.php';


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

                            <form action="add-meeting-db" method="post" enctype="multipart/form-data">
                              <!-- <div class="form-row"> -->
                              <fieldset>
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputPassword4">Date</label>
                                    <input type="date" name="date" class="form-control" id="inputPassword4">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputProjects">Project</label>
                                    <select class="form-control" name="iteration">
                                      <option value="0" disabled selected> --SELECT PROJECT-- </option>
                                    <?php   while ($roww22 = $result22->fetch_assoc())
                                    {
                                   ?><option value="<?php   echo $roww22['it_id']; ?>"><?php 
                                    echo $roww22['it_title']; ?></option>
                                    <?php } ?>
                                    </select>
                                 
                                  </div>
                                  
 

  
  

 
	 
}
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputEmail4">Ajanda</label>
                                    <input type="text" class="form-control" name="ajanda" id="inputEmail4" placeholder="Ajanda">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputPassword4">Start time:</label>
                                    <input type="time" name="s_time" class="form-control" id="inputPassword4">
                                  </div>
                                  <div class="form-group col-md-4 ">
                                    <label for="inputPassword4">End time:</label>
                                    <input type="time" name="e_time" class="form-control" id="inputPassword4">
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group row col-md-12">
                                  <div class="col-md-12">
                                    <label class="col-form-label" for="input-id-1">Next Meeting Schedule:</label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" name="next" id="next" type="date" placeholder="Question Number 1">
                                  </div>

                                </div>
                              </fieldset>
                              <hr>
                              <!-- </div> -->
                              <div class="form-row">
                                <div class="col-md-3"></div>
                                <!--<div class="form-group col-md-6">
      <label for="inputCity">Enter Survey Questions</label>
      <input type="text" placeholder="Enter Question 1" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 2" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 3" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 4" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 5" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 6" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 7" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 8" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 9" class="form-control" id="inputCity">
      <input type="text" placeholder="Enter Question 10" class="form-control" id="inputCity">
      
    </div> -->

                              </div>



                              <!-- <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  </div> -->
                              <center>
                                <button type="submit" class="btn btn-primary ">Submit</button>
                              </center>
                            </form>

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

  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
  <script src="assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
  <script src="../bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

  <script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
  <script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
  <script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
  <script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

  <script src="assets/pages/data-table/extensions/responsive/js/responsive-custom.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <script src="assets/js/pcoded.min.js"></script>
  <script src="assets/js/demo-12.js"></script>
  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->

</html>