<?php
   include("connect-db.php");
   session_start();
   $connect = mysqli_connect('localhost','root','','lylich2c');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      
      $sql = "SELECT * FROM amin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Giaodien/QuanLy/index.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>