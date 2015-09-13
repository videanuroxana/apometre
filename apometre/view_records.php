<?php

require_once('config.php');
require_once 'header.php';

//deoarece pagina asta poate fi apelata direct din browser prin //localhost/apometre/vizualizare_apometre.php si userul ar veni direct, fara sa stiu cine e,
// tb sa ma asigur ca a trecut prin login.php, ca-l pot identifica pentru a stii ce apometre sa-i arat
//verific daca variabila de sesiune setata in pagina de login.php e inca setata
//daca e setata, inseamna ca trecut, user si parola sunt corecte si are voie sa vada pagina
//daca nu e setata, inseamna a apelat direct pagina si-l trimit la login.php ca nu stiu ce apometre sa-i arat

checkLogin();

$uid = $_SESSION["loggedinUserId"];

$sql = "SELECT records.*,rooms.name FROM records LEFT JOIN rooms ON records.room_id=rooms.id WHERE records.user_id = ".$uid."";
$query = mysqli_query($conn,$sql);

echo "<tr><td>";

if (mysqli_num_rows($query)==0){
	echo "Nu ai nicio inregistrare. Du-te <a href='add_record_form.php'>aici</a> pentru a adauga noi inregistrari ";
}
else{
	
	?>
	<table border="1">
		<tr>
			<td>Data</td>
			<td>Apa rece</td>
			<td>Apa calda</td>
			<td>Camera</td>
		</tr>
	<?php 
	while ($row = mysqli_fetch_assoc($query)){

	
		
		echo "<tr>";
			echo "<td>".$row["an"]."-".$row["luna"]."</td>";
			echo "<td>".$row["apa_rece"]."</td>";
			echo "<td>".$row["apa_calda"]."</td>";
			echo "<td>".$row["name"]."</td>";						
		echo "</tr>";
		
	}
	echo "</table>";
echo "</td></tr>";
require_once 'footer.php';
}



?>