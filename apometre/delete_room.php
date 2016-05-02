<?php
require_once 'config.php';
checkLogin();

$roomId = $_GET["room_id"];


//verificam daca nu cumva vrea sa stearga camerele altora. Validam daca roomId-ul trimis prin GET are coloana user_id din tabelul rooms egala cu user_id-ul din sesiune


$sql1 = " SELECT * FROM rooms WHERE id='".$roomId."'";
$query = mysqli_query($conn,$sql1);

$rez = mysqli_fetch_assoc($query);
$dbUserId = $rez['user_id'];


//daca userul din db nu este egal cu cel din sesiune, il retrimitem la view_records.php
if ($dbUserId!=$_SESSION["loggedinUserId"]){
	header("location:view_records.php");
}

$sql = "UPDATE rooms SET deleted=1 WHERE id='".$roomId."'";
$update = mysqli_query($conn, $sql);

if ($update!=false){
	header("location:view_rooms.php");
	exit();
}

echo "The error is:".mysqli_error($conn);
