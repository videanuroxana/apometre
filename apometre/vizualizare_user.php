<?php

require_once("config.php");

$sql = "SELECT * FROM users";
$query = mysqli_query($conn,$sql);
?>
<table border="1">
	<tr>
		<td>Username</td>
		<td>Nume</td>
		<td>Prenume</td>
		<td>Email</td>
		<td>Judet</td>
		<td>Localitate</td>
		<td>Sector</td>
		<td>Bloc</td>
		<td>Scara</td>
		<td>Etaj</td>
		<td>Apartament</td>
	</tr>

<?php 
while ($row = mysqli_fetch_assoc($query)){
	
	echo "<tr>";
	echo "<td>".$row["username"]."</td>";
	echo "<td>".$row["nume"]."</td>"; 
	echo "<td>".$row["prenume"]."</td>";
	echo "<td>".$row["mail"]."</td>"; 
	echo "<td>".$row["judet"]."</td>"; 
	echo "<td>".$row["localitate"]."</td>";
	echo "<td>".$row["sector"]."</td>";
	echo "<td>".$row["bloc"]."</td>";  
	echo "<td>".$row["scara"]."</td>"; 
	echo "<td>".$row["etaj"]."</td>"; 
	echo "<td>".$row["apartament"]."</td></tr>";


}

echo "</table>";


?>