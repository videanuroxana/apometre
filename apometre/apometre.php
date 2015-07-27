<?php

require_once('config.php');
checkLogin();

//preluare date din apometre.html
$an = $_POST["an"];
$luna = $_POST["luna"];
$apaReceBaie = $_POST["apaReceBaie"];
$apaCaldaBaie = $_POST["apaCaldaBaie"];
$apaReceBucatarie = $_POST["apaReceBucatarie"];
$apaCaldaBucatarie = $_POST["apaCaldaBucatarie"];


//vreau sa prelucrez datele primite din apometre.html (1.sa le bag in baza de date si 2. sa ii trimit un mesaj utilizatorului ca au fost introduse si sa le vada)

//1. vreau sa inserez in baza de date apometre, in tabelul records, valorile luate din formularul html apometre.html si preluate de apometre.php
//mai intai sa le fac validarea
/*if (!isset($an)||!isset($luna)||!isset($apaReceBaie)||!isset($apaCaldaBaie)||!isset($apaReceBucatarie)||
!isset($apaCaldaBucatarie)||!is_string($an)||!is_string($luna)||!is_double($apaReceBaie)||
!is_double($apaCaldaBaie)||!is_double($apaReceBucatarie)||!is_double($apaCaldaBucatarie)) {
	echo 'Nu ai introdus toate campurile.<br>
		  Apasa < a href="apometre.html">aici</a> pentru a te intoarce la pagina anterioara';
}

else{
*/	

	$u = $_SESSION["loggedinUser"];
	
	/* a fost inlocuita cu versiunea cu functie de mai jos  
	//vreau sa aflu id-ul userului logat (din tabelul users) pe baza username-ului aflat prin citirea variabilei de sesiune
	$sqlUser = "SELECT id FROM users WHERE username='".$u."'";
	$queryUser = mysqli_query($conn,$sqlUser);	
	$dbUser = mysqli_fetch_assoc($queryUser);	
	$uid = $dbUser['id'];
	*/
	
	$uid = getUserIdByUsername($u);
	
	$inserareSql="INSERT INTO records (user_id,an,luna,apa_rece_baie,apa_calda_baie,apa_rece_bucatarie,apa_calda_bucatarie) 
VALUES ($uid,$an,$luna,$apaReceBaie,$apaCaldaBaie,$apaReceBucatarie,$apaCaldaBucatarie)";

	echo $inserareSql.'<br>';

	$query = mysqli_query($conn,$inserareSql);


//2. sa ii trimit un mesaj utilizatorului ca au fost introduse si sa le vada in vizualizare.php


	if ($query==false){
	echo 'Eroarea este'.mysqli_error($conn);
	die("nu am putut sa execut query-ul");
	}
	else{ 
	echo 'Va multumim.<br>
	   Datele au fost introduse cu succes in baza de date.<br>
	   Pentru vizualizare apasati <a href="vizualizare_apometre.php">aici</a>';
	}

//}


?>