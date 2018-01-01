<?php
header("Content-Type:application/json");
include ("connection.php");


// $query1="SELECT * FROM slot";
// $result = mysqli_query($db,$query1);

// $rows = array();
// while($r = mysqli_fetch_assoc($result)) {
//     $rows[] = $r;
// }

// if(empty($rows))
// {
// 	response(200,NULL);
// }
// else
// {
// 	response(200,json_encode($rows));
// }


if(!empty($_GET['id']) && !empty($_GET['available']))
{
	$id=$_GET['id'];
	$available = $_GET['available'];

	
	$query="Update `slot` SET `available`= '".$available."' where  `slot_id`='".$id."'";
    //echo $query;
    $update=mysqli_query($db,$query);
	response(200,$update);
	
}
else
{
	response(400,"Invalid Request",NULL);
}
	

function response($status,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}