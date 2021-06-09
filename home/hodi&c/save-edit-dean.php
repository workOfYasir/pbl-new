<?php

include '../connection.php';


	   $name = strtoupper($_POST['name']);
      $u_id = $_POST['u_id'];

//   $email = strtoupper($_POST['email']);

       $dean_id = $_GET['dean'];
      //  $sql =mysqli_query($conn, "UPDATE  dean SET 
      //                       `name`='$name'
      //                       WHERE `id` = '$dean_id'");             
       if (isset($_POST['depats'])) {
           //$sql3 =mysqli_query($conn, "DELETE FROM dean_dept WHERE  `dean_id`='$dean_id'");            
           foreach ($_POST["depats"] as $key =>  $value) {
               // $sql2 =mysqli_query($conn, "INSERT INTO dean_dept SET 
               //    `dept_id`='$value',
               //    `dean_id`='$dean_id'");
               echo $value.'<br>';
               echo '--------'.$dean_id;
           }
       }          
       if ($sql == true) {
      // $sql2 = mysqli_query($conn,"UPDATE `users` SET
      // `u_name`='$name'
      // WHERE `u_id` = '$u_id'");

// echo " <script type='text/javascript'>
// if(window.confirm('New Record Successfully Saved!!!  '))
// {
//        window.location = 'view-all-deans';
// }
// else{
// window.location = 'view-all-deans';
//       }              
// </script>
//    ";
       }

	
                                                

 
	   

 
	 
  
          
 
 
 ?>