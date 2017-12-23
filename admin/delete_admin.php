<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

$db = mysqli_connect('us-cdbr-azure-central-a.cloudapp.net', 'b034b7d7b2f55d', '2c810d90', 'smartdb');




// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
echo $id;
$query = "DELETE FROM slot WHERE slot_id='".$id."'";
$result = mysqli_query($db,$query);
if($result > 0){
	header("Location: ../admin/admin_slot.php");
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