<?php
session_start();
//remove all session variables
session_unset();  
session_destroy(); 

echo " <script type='text/javascript'>

       
       	window.location = '../login.php';
 
       	               
</script>
         ";


?>