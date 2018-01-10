<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

 include("connection.php");


// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
echo $id;
$query = "DELETE FROM slot_admin WHERE slot_id='".$id."'";
$result = mysqli_query($db,$query);
if($result > 0){
	header("Location: ../admin/adslots.php");
}
else{
	echo "delete failed";			
}




// redirect back to the view page

#header("Location: ../admin/admin_slot.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

echo "delete failed";

}



?>