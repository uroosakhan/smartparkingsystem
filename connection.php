<?php



$db = mysqli_connect('localhost', 'root', '', 'sps');

//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($db)
{
	echo 'connection';
}
else die('Could not connect to MySQL: ' .mysqli_connect_error());


?>