
<?php

include 'connection.php';
 
 
require_once 'classes/PHPExcel/IOFactory.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(isset($_FILES['excel'])&& !empty($_FILES['excel']['tmp_name']))
{

   $excelObj = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
   $getSheeet = $excelObj->getActiveSheet()->toArray(null);
	
	echo '<pre>';
	//echo var_dump($getSheeet);
	
$count = sizeof($getSheeet );
	
	 $i=0;
	 $j=0;
	
	while ($i < $count)
	{
          
		   
		$name =$getSheeet[$i][0];
		$name = trim( preg_replace ('/\s\s+/', ' ', $name));
	 
 
echo $name." ";
  
	
	$roll =$getSheeet[$i][1];
		$roll = trim( preg_replace ('/\s\s+/', ' ', $roll));
	$roll = str_replace(' ','', $roll);
	
	echo $roll."<br>";
	$email=$roll."@SUPERIOR.EDU.PK";
	
	$sql = "INSERT INTO users ( u_name , u_email , u_idno , u_password	, u_type , is_dell	,f_password   )

							VALUES ( '$name' ,  '$email' ,'$roll' ,'pbl123*' ,'Student' ,'no','none' )";
							
	if ($conn->query($sql) === TRUE) {
		 
	}
		else
		{
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
			
	
$i=$i+1;
   
}

 
}
}
 
 
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  action="" method="POST"  enctype="multipart/form-data"  >
<input type="file" name="excel" required/>
<input type="submit" value="submit"  required/>


</form>

</body>
</html>