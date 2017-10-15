<?php



$db = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net', 'bd175965a430e4', 'b91694c2', 'testappuroo');

//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($db)
{
	echo 'connection';
}
else die('Could not connect to MySQL: ' .mysqli_connect_error());


?>