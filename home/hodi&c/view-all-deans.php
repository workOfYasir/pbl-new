<?php
include("../constants.php");
session_start();
 
  if(empty($_SESSION["userName"]) || $_SESSION["userType"]=="Student") 
 {
    header('location:login.php');

 }
 include 'connection.php';
 
 $userName=$_SESSION["userName"];
 $userType=$_SESSION["userType"];
 $userRoll=$_SESSION["userRoll"];


?><!DOCTYPE html>

<html lang="en">

<!-- Mirrored from html.codedthemes.com/mash-able/light/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 14:09:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>PBL | <?php echo $userType; ?>Teachers</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
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
<img class="" src="../assets/images/auth/loginn.png" alt="Theme-Logo" height="60px;" width="60px;" />
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
 

 

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

 <?php
 
 include 'hodi&c_nav.php';
 
 ?>
 
 
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

 


 
 
 
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>View All Teachers</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
 
</div>
</div>
<div class="card-block tab-icon">

<div class="row">
<div class="col-lg-12 col-xl-12">

 
 





 
<div class="tab-pane active" id="messages7" role="tabpanel">


<table id="simpletable" class="table table-striped table-bordered nowrap">

<thead>
<tr>
<th>Sr#</th>
<th>Dean Name</th>
<th>Department</th>

<th>Operation</th>
 
</tr>
</thead>

<tbody>
<tr>
<?php
 

include 'connection.php';
$sql = "SELECT * FROM dean where is_dell='no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	

	$ii=1;
    while($rowe = $result->fetch_assoc())
     {
     	echo "<tr>";
		
	echo "<td>".$ii."</td>";
	echo "<td>".$rowe['name']."</td>";
  echo "<td>";
    $sql = mysqli_query($conn,"SELECT * FROM `dean_dept`");
    while( $sqlresult = $sql->fetch_assoc())
 
{
   
    	$id = $sqlresult['dept_id'];
	
	
	$s = "SELECT * FROM department where dept_id= $id ";

$resultt = $conn->query($s);
$roww = mysqli_fetch_assoc($resultt);

	echo $roww['dept_name'],' ,';


}
echo "</td>";
	echo '<td class="action-icon">
<a href="edit-dean?dean='.$rowe['id'].'" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
<a href="#" onclick="delete_dean('.$rowe['id'].')" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i>
</a>
</td>';
 
	
	
	echo "</tr>";
	$ii=$ii+1;
	
	
	
    }
	
	

                    
   
} else {
    echo "<tr><td colspan='4'> 
	<center style='color:orange'>No Record Added Yet!</center>
	</td>
	 </tr>";
}

?>
   
 
</tr>
 
 </tbody>
 
 
</tfoot>
</table>
 


</div>
 
</div>


</div>
 
</div>

</div>
</div>

</div>
</div>
 
<script>

function delete_dean(id)
{
	
	swal({
  title: "Are you sure?",
  text: "Once deleted, It Will Not Assign No Section!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("! Your Selected Teacher has been deleted!", {
      icon: "success",
    });
	
	window.location="delete-single-dean?dean="+id;
	
    swal(" Your Selected Teacher has been deleted!");
  } else {
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


<?php include("../scripts.php"); ?>