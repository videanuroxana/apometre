<?php
require_once 'config.php';
checkLogin();

$roomId = $_GET["rid"];


$sql = "UPDATE rooms SET deleted=1 WHERE id='".$roomId."'";
$update = mysqli_query($conn, $sql);

if ($update!=false){
	header("location:view_rooms.php");
	exit();
}

echo "The error is:".mysqli_error($conn);
