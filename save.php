<?php 

include_once 'connection.php';
$name = $_POST['name'];
$deposit = $_POST['deposit'];
$cCard = $_POST['cCard'];
$sql = "INSERT INTO accounts VALUES (NULL,'$name','$deposit','$cCard')";
$query = mysqli_query($db,$sql);

if ($query) {
	echo "200";
}else{
	echo "502";
}