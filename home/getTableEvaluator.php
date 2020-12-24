<?php

 include 'connection.php';
 
 $eve = $_GET['eve'];

$sql = "SELECT evaluators.e_name , groupleader.proj , assign_projects.section,course.c_name, assign_projects.fall , assign_projects.a_id
FROM assign_projects
 JOIN evaluators ON assign_projects.e_id=evaluators.e_id
 JOIN groupleader ON groupleader.gid=assign_projects.grp_id
  JOIN course ON course.c_id=assign_projects.course
  where assign_projects.e_id = '$eve'";

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