<?php
include 'connection.php';

$fall =$_GET['fall'];
$it_id =$_GET['it_id'];
$grp_id =$_GET['grp_id'];

  $filename = $_FILES["file"]["name"];
 
	  $filetemp = $_FILES["file"]["tmp_name"];
 	$folder= "iteration-submit/".$filename;
	 move_uploaded_file($filetemp, $folder);
 date_default_timezone_set("Asia/Karachi");
	$date = date('Y-m-d');
	  
   $sql = "INSERT INTO  iterations_submittion (it_id,grp_id	,file	,date, fall	 )
         VALUES ('$it_id','$grp_id','$folder','$date','$fall' )";
if ($conn->query($sql) === TRUE) {
header("Location:iterations-work");}

?>