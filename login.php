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
      $roles = 1;
       
        $sql="SELECT * FROM register WHERE username='$myusername' and password='$mypassword'";
           $result=mysqli_query($db,$sql);
  $count=mysqli_num_rows($result);
 
  if($count > 0){
    
    while($row=mysqli_fetch_assoc($result))
    {
      //echo $row['roles'];
      $roles = $row['roles'];
      $_SESSION['roles'] = $row['roles'];
    } 
  	 $_SESSION['login_user'] = $myusername; 
          //echo $roles;
          if($roles == 2){
            header("location: index.php");}
          else{
            header("location: admin/add_slot.php");
          }
      
      }
      else {
      echo "Wrong Username or Password";
      }
  }
?>