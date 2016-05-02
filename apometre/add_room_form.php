<?php
require_once ('header.php');
checkLogin();
?>
<tr>
	<td>
		<form action="add_room.php" method="POST">
		<table border="1">
			<tr>
				<td>Room: </td>
				<td><input type="text" name="roomName"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Add"/></td>
			</tr>
		
		
		</table>
		</form>
	
	
	
	</td>
</tr>
<?php 
require_once('footer.php');

?>
