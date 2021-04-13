<?php

include 'connection.php';

$cid = $_GET['cid'];
$fall = $_GET['fall'];
$sec = $_GET['sec'];



$sql = " SELECT * FROM groups group by groupid , fall , course , section having fall = '$fall' and course = '$cid' and section = '$sec' ORDER by gid ";
 
$result = $conn->query($sql);

if($result->num_rows > 0){
 $result_array = Array();
    while($row = $result->fetch_assoc()) {
		
		
        $result_array[] = $row;
		
		
		
    }
   $json_array = json_encode($result_array);
   echo $json_array;
}
else echo "No results found";

 
?>