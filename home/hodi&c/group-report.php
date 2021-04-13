<?php

session_start();

if (empty($_SESSION["userName"]) || $_SESSION["userType"] != "HODI&C") {
    header('location:login');
}
include 'connection.php';

$userName = $_SESSION["userName"];
$userType = $_SESSION["userType"];
$userRoll = $_SESSION["userRoll"];

$departmentQuery = mysqli_query($conn, "SELECT * FROM `department`")


?>

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>PBL | Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <?php
    if (isset($_GET['course']) && isset($_GET['depart'])) {

        $courseID = $_GET['course'];

        $deptID = $_GET['depart'];



        $result = mysqli_query($conn, "SELECT DISTINCT`sc`.`s_sec`,`teacher`.`t_dept`,`teacher`.`t_name`
FROM `student_course` as `sc`
INNER JOIN `teacher` ON `sc`.`teacher`=`teacher`.`t_id`
WHERE `sc`.`s_course`='$courseID' AND `teacher`.`t_dept`='$deptID'");

        $dataPoints1 = array();
        $dataPoints2 = array();
        while ($fetchGraph = mysqli_fetch_array($result)) {
            $teacher = $fetchGraph['t_name'];
            $sec = $fetchGraph['s_sec'];
            $concat = $teacher.'-'.$sec;
            $dept = $fetchGraph['t_dept'];
            $result2 = mysqli_query($conn, "SELECT COUNT(*) as num FROM `g_members`
     INNER JOIN `groupleader` ON `g_members`.`gid`=`groupleader`.`gid`
     WHERE `groupleader`.`course`='$courseID' AND `groupleader`.`section`='$sec'");
            $count = mysqli_fetch_assoc($result2);
            $groupCreated = $count['num'];

            array_push($dataPoints1, array("label" => $concat, "y" => $groupCreated));
            
            //print_r($dataPoints1);
            $result3 = mysqli_query($conn, "SELECT count(*) as total FROM `student_course` WHERE `s_sec`='$sec' AND `s_course`='$courseID' ");
            $count2 = mysqli_fetch_assoc($result3);
            $totalStudent = $count2['total'];
            
            $notCreatedGroup = $totalStudent - $groupCreated;
            
            array_push($dataPoints2, array("label" => $concat, "y" => $notCreatedGroup));
        }
    }
    ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Group Reports"
                },
                axisY: {
                    includeZero: true
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "center",
                    horizontalAlign: "right",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "column",
                    name: "Created Groups",
                    indexLabel: "{y}",
                    yValueFormatString: "#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Non Groups",
                    indexLabel: "{y}",
                    yValueFormatString: "#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
        
    </script>

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
                                    <a href="#!" onclick='javascript:toggleFullScreen()'>
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
                                <h5>Group Reports</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>

                            <div class="card-block">
                                <form action="">
<fieldset>
                            <div class="form-row">
                                
                            <div class="form-group col-md-6">
                                <label for="sel_depart">Departments</label>
                                 

                                    <select class="form-select" aria-label="Default select example" id="sel_depart" name="depart">
                                        <option value="0">- Select -</option>
                                        <?php
                                        // Fetch Department
                                        $sql_department = "SELECT * FROM department";
                                        $department_data = mysqli_query($conn, $sql_department);
                                        while ($row = mysqli_fetch_assoc($department_data)) {
                                            $departid = $row['dept_id'];
                                            $depart_name = $row['dept_name'];

                                            // Option
                                            echo "<option value='" . $departid . "' >" . $depart_name . "</option>";
                                        }
                                        ?>
                                    </select></div>
                                    <div class="clear"></div>

                                  

                                    <div class="form-group col-md-6">
                                <label for="sel_user">Courses</label>
                                
                                <select class="form-select" aria-label="Default select example" id="sel_user" name="course">
                                    <option value="0">- Select -</option>
                                </select>
                                </div>
                            </div>
                                </fieldset>
                                
                                <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary m-10 " name="submit" onclick="name(this);" value="submit">
                                </div>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            </head>

                <body>
                    <div id="chartContainer" style="height: 380px; width: 85%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>





                    <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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
                    <script type="text/javascript">
                    
                        $(document).ready(function() {

                            $("#sel_depart").change(function() {
                                var deptid = $(this).val();

                                $.ajax({
                                    url: 'deptcourseajax.php',
                                    type: 'post',
                                    data: {
                                        depart: deptid
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        var len = response.length;

                                        $("#sel_user").empty();
                                        for (var i = 0; i < len; i++) {
                                            var id = response[i]['c_id'];
                                            var name = response[i]['c_name'];

                                            $("#sel_user").append("<option value='" + id + "'>" + name + "</option>");

                                        }
                                    }
                                });
                            });

                        });
                    </script>

                </body>

                                    <!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->

</html>