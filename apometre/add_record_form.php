<?php 
require_once 'config.php';
checkLogin();
require_once ('header.php');
?>
<tr>
	<td>
		<form action="add_record.php" method="POST">

			<table>
				<tr>
					<td>An: </td>
					<td><input type="text" name="an" value="" size="4" maxlength="4"></input></td>
				</tr>
			<tr><td>Luna: </td>
			    <td><select name="luna">
			    	<option value="0">-- SELECT --</option>
			    	<?php 
			    		for ($i=1; $i<13;$i++){
			    			echo '<option value="'.$i.'">'.$months[$i].'</option>';
			    		}	
					?>
				  </select>
			    </td>
			</tr>
			</table>
			<p>Introdu indecsii:</p>
			<table>
				<tr> 
					<td rowspan="2" align="center">Baie</td>
					<td>Apa calda<input type="text" name="apaCaldaBaie" value=""></input></td>

				</tr>
				
				<tr> <td>Apa rece<input type="text" name="apaReceBaie" value=""></input></td>

			
		
				<tr> 
					<td rowspan="2" align="center">Bucatarie</td>
					<td>Apa calda<input type="text" name="apaCaldaBucatarie" value=""/>  </td>

				</tr>
				
				<tr> <td>Apa rece<input type="text" name="apaReceBucatarie" value=""/></td>

			</table>
			
		
				<input type="submit" value="Trimite valori"></input>	
			
		</form>
		</td>
</tr>
<?php 
require_once('footer.php');
?>

