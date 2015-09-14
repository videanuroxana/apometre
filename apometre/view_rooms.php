<?php
require_once('config.php');
checkLogin();

require_once ('header.php');
echo "<tr><td>";



$userId = $_SESSION["loggedinUserId"];
$sqlRoom = "SELECT id,name FROM rooms WHERE user_id = '".$userId."'";
$queryRoom = mysqli_query($conn, $sqlRoom);


echo "<table border='1'>";
echo "<tr>";
	echo "<td>Camera </td>";
	echo "<td>Edit </td>";
	echo "<td>Delete </td>";
echo "</tr>";

while($row = mysqli_fetch_assoc($queryRoom)){
	echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td><a href='edit_room_form.php?rid=".$row['id']."'>Edit</a></td>";
		echo "<td><a href='delete_room.php?rid=".$row['id']."'>Delete</a></td>";
		
	echo "</tr>";
}
echo "</table>";







echo "</td></tr>";
require_once ('footer.php');