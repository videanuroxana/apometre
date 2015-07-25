<?php 

require_once 'config.php';

if (!isset($_SESSION["loggedinUser"]) || $_SESSION["loggedinUser"]==""){
	header("location:login.html");
}
echo "Bine ai venit ".$_SESSION["loggedinUser"];

?>

<html>

	<body>
		
		<form action="apometre_procesare.php" method="post">

			<table>
				<tr>
					<td>An: </td>
					<td><input type="text" name="an" value="" size="4" maxlength="4"></input></td>
				</tr>
			<tr><td>Luna: </td>
			    <td><select name="luna">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>	
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

	</body>

</html>
