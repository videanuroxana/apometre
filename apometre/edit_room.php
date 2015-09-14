<?php
require_once 'config.php';
checkLogin();

$roomName = $_POST["roomName"];
$roomId = $_POST["roomId"];


$sql = "UPDATE rooms SET name='".$roomName."' WHERE id='".$roomId."'";
$update = mysqli_query($conn, $sql);

if ($update!=false){
	header("location:view_rooms.php");
	exit();
}

echo "The error is:".mysqli_error($conn);

?>