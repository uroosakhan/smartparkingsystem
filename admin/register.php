<?php

if(isset($_POST['submit'])){
   $db = mysqli_connect('us-cdbr-azure-central-a.cloudapp.net', 'b034b7d7b2f55d', '2c810d90', 'acsm_e12d9356bae7728');

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $password2=$_POST['pass1'];

       //if($password == $password2){
      //echo "in if"
     //$password =md5($password);
 
        if( $username == "" || $email == "" || $password == '' || $password2 == '' ){
            echo "<h2>Fields Left Blank</h2>", "<p>Some Fields were left blank. Please fill up all fields.</p>";
        }
        
        elseif( !ctype_alnum($username) ){
            echo "<h2>Invalid Username</h2>", "<p>The Username is not valid. Only ALPHANUMERIC characters are allowed and shouldn't exceed 10 characters.</p>";
        }
        elseif($password != $password2){
            echo "<h2>Passwords Don't Match</h2>", "<p>The Passwords you entered didn't match</p>";
        }
        elseif($password == $password2){
            #echo "this condition is running";
            $query="INSERT INTO `register_Admin`(`username`, `password`, `email`) values ('".$username."','".$password."','".$email."')";
            echo $query;
            $id=mysqli_query($db,$query);
            if($id>0){
               header("location: register.php?Message= Congratulations! Account has been Created.");
            }   
            }
        }
?>
<!DOCTYPE html>
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="register.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input  class="form-control" name="username" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="pass" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" name="pass1" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" name="submit" href="login.php">Register</a>
          
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          
        </div>
      </div>
    </div>
  <?php
                     echo '<center>';
          if(isset($_GET['Message'])){
              echo $_GET['Message'];    
          
          }
                     echo '</center>';
                ?>    
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

