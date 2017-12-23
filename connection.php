<?php



$db = mysqli_connect('us-cdbr-azure-central-a.cloudapp.net', 'b034b7d7b2f55d', '2c810d90', 'smartdb');

//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($db)
{
	echo 'connection';
}
else die('Could not connect to MySQL: ' .mysqli_connect_error());


?>