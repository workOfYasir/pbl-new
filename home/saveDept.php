<?php
include 'connection.php';

   $name = $_POST['name'];
	   $code = $_POST['code'];
	

$sql = "INSERT INTO department (dept_name,dept_code)
							VALUES ('$name','$code')";

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!! '))
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