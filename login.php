<?php
include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   	 $myusername=$_POST['username']; 
      $mypassword=$_POST['password']; 
      $myusername = stripslashes($myusername);
      $mypassword = stripslashes($mypassword);
      $myusername = mysqli_real_escape_string($db,$myusername);
      $mypassword = mysqli_real_escape_string($db,$mypassword);
      
       
        $sql="SELECT user_id FROM register WHERE username='$myusername' and password='$mypassword'";
           $result=mysqli_query($db,$sql);
  $count=mysqli_num_rows($result);
 
  if($count > 0){
  	 $_SESSION['login_user'] = $myusername;         
          header("location: index.php");
      
      }
      else {
      echo "Wrong Username or Password";
      }
  }
?>