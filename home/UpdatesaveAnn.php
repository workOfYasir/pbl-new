<?php
include 'connection.php';

$aid = $_GET['aid'];
   $level = $_POST['level'];
   $date = $_POST['date']; 
   $title = $_POST['title']; 
   $editor = $_POST['editor']; 
	 
	

 
$sql = "update annoucement  set  level='$level' , last_date='$date' , title='$title' , text='$editor' , fall='F-19'
where a_id='$aid' ";							 

if ($conn->query($sql) === TRUE) {
   
   echo " <script type='text/javascript'>

     
      window.location = 'manager-index.php';
 
       	               
</script>

         ";
          

} else {
    echo  $conn->error  ;
    
}


?>