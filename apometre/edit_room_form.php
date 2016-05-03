<?php
require_once 'config.php';
checkLogin();
require_once ('header.php');

$roomId = $_GET['room_id'];
$roomName = getRoomNameById($roomId);

?>
<tr>
	<td>
		<form action="edit_room.php" method="POST">
		<table border="1">
			<tr>
				<td>Room: </td>
				<td><input type="text" name="roomName"  value="<?php echo $roomName;?>"/></td>
			</tr>
			
			
			
			
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Update"/></td>
			</tr>
			
			
		
		</table>
		<input type="hidden" name="roomId"  value="<?php echo $roomId;?>"/>
		</form>
	
	
	
	</td>
</tr>
<?php 
require_once('footer.php');

?>
