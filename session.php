<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_role = $_SESSION['roles'];
  
   if(!isset($_SESSION['login_user'])){
   	try{
      header("location:indexs.php");
   	}
   	catch(Exception $e){
   		header("location:../indexs.php");
   	}
   }
 //  	if($roles == 2){
 //            header("location: index.php");}
	// else{
	//     header("location: admin/add_slot.php");
	// }
?>