<?php
require_once ('header.php');
checkLogin();


echo "<tr><td>";



$userId = $_SESSION["loggedinUserId"];

//get all non deleted rooms for current(session) user
$sqlRoom = "SELECT id,name FROM rooms WHERE user_id = '".$userId."' AND deleted=0";

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
		echo "<td><a href='edit_room_form.php?room_id=".$row['id']."'>Edit</a></td>";
		echo "<td><a href='delete_room.php?room_id=".$row['id']."'>Delete</a></td>";
		
	echo "</tr>";
}
echo "</table>";



echo "</td></tr>";
require_once ('footer.php');
?>