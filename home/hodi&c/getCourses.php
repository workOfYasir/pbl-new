<?php


include 'connection.php';

$id = $_GET['sid'];

$sql = "SELECT * from course where c_id IN (SELECT DISTINCT s_course FROM student_course where fall = '$id') ";

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