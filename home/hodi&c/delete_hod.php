<?php
include '../connection.php';

$id= $_GET['id'];

$result=mysqli_query($conn,"DELETE FROM hods WHERE id=$id");
if($result==true){
header("Location:view-all-hods.php");
    }else{


    header("Location:view-all-hods.php");

         

}
?>