
<!-- <?php
// session_start();

// if (isset($_SESSION['login_user'])) {
//   header("location: index.php");
// }

?> -->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css1/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
 

	<div class="main">
	<a class="navbar-brand" href="index.php">
	<img src="assets/images/logo.png" class="logo" alt="" style="margin-top:-10px; width:200px;  "></a>
		<div class="header" >
			<h1>Login or Create a Free Account!</h1>
		</div>
		
			<form method="post" action="register.php">
				<ul class="left-form">
					<h2>New Account:</h2>
					<li>
						<input type="text" name="username"  placeholder="Username" required/>
											<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"  name="email" placeholder="Email" required/>
										<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="pass"  placeholder="password" required/>
												<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="pass1"   placeholder="password" required/>
						
						<div class="clear"> </div>
					</li> 
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Please inform me of upcoming  Promotions and news of smart parking system.</label>
					<input type="submit" name="submit" onclick="myFunction()" value="Create Account">
						<div class="clear"> </div>
				</ul></form>
				<form  method="post" action="login.php">
				<ul class="right-form">
					<h3>Login:</h3>
					<div>
						<li><input type="text" name="username" placeholder="Username" required/></li>
						<li> <input type="password" name="password" placeholder="Password" required/></li>
						<h4>I forgot my Password!</h4>
							<input type="submit"  value="Login" >
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>

					<?php
                     echo '<center>';
					if(isset($_GET['Message'])){
    					echo $_GET['Message'];		
					
					}
                     echo '</center>';
								?>		
			</form>

		</div>
			
</body>
</html>