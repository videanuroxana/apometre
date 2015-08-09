<?php

require_once("header.php");

?>		
<tr>
	<td>
		<form action="creare_user.php" method="post">

			<table>
			<tr><td>Username: </td><td><input type="text" name="username" value="" size="15" maxlength="40" placeholder="ionescu.alin"/></td></tr>
			<tr><td>Password: </td><td><input type="password" name="password" value="" size="15" maxlength="40"/></td></tr>
			<tr><td>Repassword: </td><td><input type="password" name="rePassword" value="" size="15" maxlength="40"/></td></tr>
			<tr><td>Nume: </td><td><input type="text" name="nume" value="" size="15" maxlength="40" placeholder="Ionescu"/></td></tr>
			<tr><td>Prenume:</td><td> <input type="text" name="prenume" value="" size="15" maxlength="40" placeholder="Alin"/></td></tr>
			<tr><td>Adresa mail:</td><td> <input type="text" name="mail" value="" size="15" maxlength="40" placeholder="ionescu.alin@yahoo.com"/></td></tr>
			<tr><td>Judet:</td><td> <input type="text" name="judet" value="" size="10" maxlength="40" placeholder="Arges"/></td></tr>
			<tr><td>Localitate: </td><td><input type="text" name="localitate" value="" size="10" maxlength="40" placeholder="Pitesti"/></td></tr>
			<tr><td>Sector: </td>
			    <td>
			    	<select name="sector">
						<option value="0">-</option>
					<?php 
						for ($j=1;$j<7;$j++){
					?>
						<option value="<?php echo $j; ?>"><?php echo $j; ?></option>				
						<?php 	
							
						}
					
					?>	
						
				  	</select>
			    </td>
			</tr>

			<tr><td>Bloc: </td><td><input type="text" name="bloc" value="" size="3" maxlength="7"></input></td></tr>
			<tr><td>Scara: </td><td><input type="text" name="scara" value="" size="1" maxlength="4"></input></td></tr>
			<tr><td>Etaj: </td>
			    <td><select name="etaj">
			    	<option value="-100">-- Select --</option>
			    <?php 
			    	for ($i=-1;$i<=11;$i++){
			    		echo '<option value="'.$i.'">'.$i.'</option>';
			    	}
			    ?>
					
				  </select>
			    </td>
			</tr>

			<tr><td>Apartament: </td><td><input type="text" name="apartament" value="" size="3" maxlength="5"></input></td></tr>
	
			</table>
				<input type="submit" value="Create"></input>	
			
		</form>

	</td>
</tr>

<?php

require_once("footer.php");
?>

	