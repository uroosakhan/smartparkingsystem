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
      
       
        $sql="SELECT user_id FROM register_Admin WHERE username='$myusername' and password='$mypassword'";
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



-<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form  >
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control"  name="username" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
