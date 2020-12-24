<?php



include 'connection.php';

$cid = $_GET['cid'];
$fall = $_GET['fall'];

$sql = "SELECT DISTINCT  s_sec from  student_course where fall = '$fall' and s_course = '$cid'   ";

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