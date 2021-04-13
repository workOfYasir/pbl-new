<?php

include 'connection.php';

$gid = $_GET['gid'];
$eid = $_GET['eid'];


$sql = "SELECT * FROM evaluation where   grp_id	='$gid'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
			
echo " <script type='text/javascript'>

      if(window.confirm('Alerady Evaluated!!!!! Thank You'))
      {
      
       	window.location = 'evaluator-index.php';
}
else
{
	window.location = 'evaluator-index.php';
}
       	               
</script>
         ";
}	
else

	{
 
$sqlq = "SELECT * from groupleader 
where gid = '$gid'
";
$resultq = $conn->query($sqlq);
 
$roww = $resultq->fetch_assoc();

$member = $roww['member'];
$k=1;

while($k<17)
{
	$point = $_POST[$k];
	$sql = "INSERT INTO evaluation ( evaluator_id , grp_id	 , member_id	 , rub_id , points	 )
							VALUES ('$eid','$gid','$member','$k','$point')";							 

if ($conn->query($sql) === TRUE) {
  
}
	
	$k++; 
}



////////////////sdssssssssssssssssssssssssssssss

$sqlq = "SELECT * from g_members 
where gid	 = '$gid'
";
$resultq = $conn->query($sqlq);
 
while ($roww = $resultq->fetch_assoc())
{

$member = $roww['roll_no'];
$k=1;

while($k<17)
{
	$point = $_POST[$k];
	$sql = "INSERT INTO evaluation ( evaluator_id , grp_id	 , member_id , rub_id , points	 )
							VALUES ('$eid','$gid','$member','$k','$point')";							 

if ($conn->query($sql) === TRUE) {
  
}
	
	$k++; 
}
}

$sql = "update groupleader set projEvaluate='yes' where gid='$gid'";
							 

if ($conn->query($sql) === TRUE) {
	
}

		
echo " <script type='text/javascript'>

       
      
       	window.location = 'evaluator-index';
    	               
</script>
         ";


	}
 



	





?>