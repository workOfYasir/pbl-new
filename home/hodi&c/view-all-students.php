<?php
include("../constants.php");
?>

<?php

 session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]!="HODI&C")
 {
    header('location:login');
 }
 include '../connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | Students</title>


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


<?php include("../scripts.php"); ?>
