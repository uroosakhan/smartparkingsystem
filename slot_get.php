<?php
header("Content-Type:application/json");
include ("connection.php");

 
$query1="SELECT * FROM slot";
$result = mysqli_query($db,$query1);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

if(empty($rows))
{
	response(200,NULL);
}
else
{
	response(200,json_encode($rows));
}
	

function response($status,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}