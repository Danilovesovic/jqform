<?php 

include_once 'connection.php';

$sql = "SELECT * FROM accounts";
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

if ($query) {
	echo json_encode($result);
}else{
	echo "No query !";
}