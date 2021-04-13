<?php

include 'connection.php';


	    
	   $sec = $_POST['sec'];
	   $session = $_POST['session'];
	   $courses = $_POST['courses'];
	   
	   
	  
require_once 'classes/PHPExcel/IOFactory.php';

if(isset($_FILES['excel'])&& !empty($_FILES['excel']['tmp_name']))
{

   $excelObj = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
   $getSheeet = $excelObj->getActiveSheet()->toArray(null);
	
	echo '<pre>';
	//echo var_dump($getSheeet);
	
$count = sizeof($getSheeet );
	
	$i=0;
	
	$groupid=0;
	$type="";
	$member="";
	$proj ="";
	$flag =  0 ;
	$leaderID= 0;
	
	$group="Group";
	
	while ($i < $count)
	{
		
		$cnicc =$getSheeet[$i][0];
	
	$space="";
	$cnicc = trim( preg_replace ('/\s\s+/', ' ', $cnicc));
	$cnicc = str_replace(' ','', $cnicc);
	
 	
	if (strcmp( $cnicc , $space) !== 0) {


	if (strcmp( $cnicc , "Group") !== 0) {
		
		if($flag==1)
		{
			$proj = $cnicc ;
			$leaderID =1;
		}
		else
		{
			
			
			if ($leaderID==1)
			{
			$leaderID =0 ;	
			$member = $cnicc;
			$type = "Group Leader";
				
echo $sql = "INSERT INTO groups ( groupid , fall , course , section	, member , type	, proj  )

							VALUES ( '$group' , '$session'    , '$courses' , '$sec' , '$member', '$type' ,'$proj' )";
							
	if ($conn->query($sql) === TRUE) {
		
	}
			}
			else
			{
				
			$member = $cnicc;
			$type = "Group Member";
				
echo $sql = "INSERT INTO groups ( groupid , fall , course , section	, member , type	, proj  )

							VALUES ( '$group' , '$session'    , '$courses' , '$sec' , '$member', '$type' ,'$proj' )";
							
	if ($conn->query($sql) === TRUE) {
		
	}
			}
			
		}
		
		
		$flag =  0 ;
	}
	else
	{
		
	$groupid ++;
	 $flag =  1 ;
	 $group ="Group";
     $group = $group." ".$groupid;
  	
	}
	

	
	
	
} 
else { 	
           
} 
	
       $i=$i+1;
	   

	}
	 
  
}

echo "<script type='text/javascript'>

      if(window.confirm('New Record Successfully Saved!!! Click Ok for Show Record Click Cancel For Add Another'))
      {
      
      	window.location = 'addnewproj.php';
}
else
{
window.location = 'addnewproj.php';
}
       	               
</script>

         ";
          
 
 
 ?>