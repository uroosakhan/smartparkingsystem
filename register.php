
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
            //echo "this condition is running";

            $sql="SELECT user_id FROM register WHERE username='".$username."' or email='".$email."'";
            //print
            $result=mysqli_query($db,$sql);
            $count=mysqli_num_rows($result);
            //echo count;
            if($count > 0){
              header("location: indexs.php?Message= Username Already Exists ");
            }

            $query="INSERT INTO `register`(`username`, `password`, `email`,`roles`) values ('".$username."','".$password."','".$email."',2)";
            echo $query;
            $id=mysqli_query($db,$query);
            
            if($id>0){
               header("location: indexs.php?Message= Congratulations! Account has been Created.");
            }   
            
        }



   
   //else{
   	//$_SESSION['message']="You are now logged in";
   	//$_SESSION['username'] = $username;
   	//header("location: home.php");
   //}
   //else{
   	//$_SESSION['message']="The two passwords donot match";
   //}
//}
 // $query1="Select * from register";
 // $result = mysqli_query($db,$query1);
 //    while($res=mysqli_fetch_array($result)){
 //      echo '<tr>' ;
 //             echo '<td>'.$res['username'].'</td>'; 
 //             echo '<td>'.$res['password'].'</td>';
 //             echo '<td>'.$res['email'].'</td>';
 //             echo '<tr>';
 //  }
          
}
?>