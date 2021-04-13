<?php

 include 'connection.php';
$it_id = $_GET['it_id'];
 $grpid = $_GET['grpid'];
 $fall = $_GET['fall'];
 $cour = $_GET['cour'];

 $sqlq = "SELECT  * from iterations_ruberics
where iteration_id = '$it_id'
";
$resultq = $conn->query($sqlq);
 
 
while($roww = $resultq->fetch_assoc())
{
	
	$rid =$roww['r_id'];
	$point =$_POST[$rid];
  
	$sql = "INSERT INTO iteration_evaluation ( 
	it_id , grp_id		 , rub_id	 , point , fall	 )
 VALUES ('$it_id','$grpid','$rid','$point','$fall')";							 

if ($conn->query($sql) === TRUE) {
  
}

}
header ("Location:evaluate-groups?iteration=".$it_id."&cour=".$cour."")
?>