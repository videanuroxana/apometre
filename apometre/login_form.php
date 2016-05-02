<?php
require_once("header_login.php");
?>

<tr>

	<td align="center">
		<form action="login.php" method="post">

		<table style="width:300px;" border="0"	>
			<tr>
				<td colspan="2" style="text-align: center; font-weight:bold; background-color:#FFFFFF;">Water meter</td>
			</tr>
			<tr>
				<td>Utilizator:</td>
				<td><input type="text" name="user" value="" size="15" maxlength="255"/></td>
			</tr>
			<tr>
				<td>Parola:</td>
				<td> <input type="password" name="password" size="15" maxlength="255"/></td>
			</tr>
	
			<tr>	
				<td  style="text-align: center;" ><a href="creare_user.html">Vreau un cont</a></td>
				<td style="text-align: center;"><a href="forgot.html">Am uitat parola</a></td>
			</tr>

			<tr>
				<td colspan="2" style="text-align:center; background-color:#FFFFFF;"><input type="submit" value="Login" /></td>
			</tr>
		</table>
		</form>
	</td>
</tr>
			
			
<?php
require_once("footer_login.php");
?>

		
		