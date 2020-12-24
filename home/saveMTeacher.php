<?php

include 'connection.php';


	   


require_once 'classes/PHPExcel/IOFactory.php';

if(isset($_FILES['excel'])&& !empty($_FILES['excel']['tmp_name']))
{

   $excelObj = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
   $getSheeet = $excelObj->getActiveSheet()->toArray(null);
	
	echo '<pre>';
	//echo var_dump($getSheeet);
	
$count = sizeof($getSheeet );
	
	$i=0;
	
	
	while ($i < $count)
	{
		
		$k=0;
		 
		$name=$getSheeet[$i][$k];
	
		$k=$k+1;
		
		$dept =$getSheeet[$i][$k];
	
	 	$sql = "INSERT INTO teacher (	t_name	,	t_dept )
							VALUES ('$name','$dept')";
			
if ($conn->query($sql) === TRUE) {
 
} 
			
	$i=$i+1; 
  
}
}

echo " <script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!! '))
      {
      
          	window.location = 'view-all-teachers';
}
else
{
	       	window.location = 'view-all-teachers';
}
       	               
</script>

         ";
          
 
 
 ?>