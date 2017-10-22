 <?php
if(isset($_POST['submit'])){
        	
            $Slot=$_POST['Select'];
            $Time=$_POST['timeX'];
            if (isset($_SESSION['login_user'])) {
         
        	    $query= "INSERT INTO `slot` (`slot_no`,`time_added`,`user_id`) VALUES('".$Slot."','".$Time."','".$id."')";
        		mysqli_query($db,$query);
        	
            }
        }
 ?>