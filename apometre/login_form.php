<?php
require_once ('config.php');
require_once("header.php");
?>

<tr>

	<td align="center">
		<form action="login.php" method="post">

		<table>
			<tr>
				<td>Utilizator:</td>
				<td><input type="text" name="user" value="" size="15" maxlength="255"/></td>
			</tr>
			<tr>
				<td>Parola:</td>
				<td> <input type="password" name="password" size="15" maxlength="255"/></td>
			</tr>
		</table>
		<table cellspacing="10"> 
			<tr>	
				<td><a href="creare_user.html">Vreau un cont</a></td>
				<td><a href="forgot.html">Am uitat parola</a></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="Login" /></td>
			</tr>
		</table>
		</form>
	</td>
</tr>
			
			
<?php
require_once("footer.php");
?>

		
		