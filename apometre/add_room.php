<?php
require_once('config.php');
checkLogin();
$roomName = $_POST["roomName"];
$uid = $_SESSION["loggedinUserId"];

$sql = "INSERT INTO rooms (name,user_id) VALUES ('".$roomName."','".$uid."')";
$query = mysqli_query($conn, $sql);


if ($query==FALSE){
	echo "Nu s-au putut insera camere";
	echo mysqli_error($conn);
	die();
}

echo 'Va multumim.<br>
	   Datele au fost introduse cu succes in baza de date.<br>
	   Pentru vizualizare apasati <a href="view_rooms.php">aici</a>';





?>