<?php

 include 'connection.php';
 
 $section = $_GET['sec'];

$sql = "SELECT * FROM groupleader where section='$section' and course='3' and position='open' ";

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

$conn->close();
?>