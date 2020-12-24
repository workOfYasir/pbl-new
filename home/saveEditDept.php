<?php
include 'connection.php';

   $name = $_POST['name'];
	   $code = $_POST['code'];
	$department = $_GET['department'];

$sql = "update

 department 
 set 
 dept_name ='$name',
 dept_code ='$code'
    where 
	dept_id = '$department'
	";

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

      if(window.confirm('Edit Record Successfully Saved!!! '))
      {
      
       	window.location = 'view-all-dept';
}
else
{
	window.location = 'view-all-dept';
}
       	               
</script>

         ";
          

}  


?>