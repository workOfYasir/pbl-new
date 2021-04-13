
<?php

 
 include 'connection.php';
 echo $_POST['section'];
 echo $_POST['evaluator'];
 
foreach ($_POST['path'] as $selectedOption)
{ echo $selectedOption."\n";
} 

     
    
?>