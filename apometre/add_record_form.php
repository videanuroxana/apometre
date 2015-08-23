<?php 
require_once 'config.php';
checkLogin();
require_once ('header.php');
?>
<tr>
	<td>
		<form action="add_record.php" method="POST">

			<table border="1">
				<tr>
					<td>An: </td>
					<td><input type="text" name="an" value="" size="4" maxlength="4"></input></td>
				</tr>
				<tr>
					<td>Luna: </td>
			    	<td>
			    		<select name="luna">
			    			<option value="0">-- SELECT --</option>
			    			<?php 
					    		for ($i=1; $i<13;$i++){
					    			echo '<option value="'.$i.'">'.$months[$i].'</option>';
					    		}	
							?>
				  		</select>
			   		</td>
				</tr>
				<tr>
					<td>Room:</td>
					<td>
						<select name="roomId">
							<option value="0">--SELECT--</option>
							<?php 
								$uid = $_SESSION["loggedinUserId"];
								$sql = "SELECT * FROM rooms WHERE user_id ='".$uid."'";
								$query = mysqli_query($conn, $sql);
								while($row=mysqli_fetch_assoc($query)){
									echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}		
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Apa rece: </td>
					<td>
						<input type="text" name="apaRece" value="" size="15" maxlength="40" placeholder="5.2"/>
					</td>
				</tr>
				<tr>
					<td>Apa calda: </td><td><input type="text" name="apaCalda" value="" size="15" maxlength="40" placeholder="5.2"/>
					</td>
				</tr>
					
			</table>		
		
				<input type="submit" value="Trimite valori"></input>	
			
		</form>
		</td>
</tr>
<?php 
require_once('footer.php');
?>

