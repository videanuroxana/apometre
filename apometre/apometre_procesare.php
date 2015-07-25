<?php

require_once('config.php');
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
if (!isset($an)||!isset($luna)||!isset($apaReceBaie)||!isset($apaCaldaBaie)||!isset($apaReceBucatarie)||
!isset($apaCaldaBucatarie)||!is_string($an)||!is_string($luna)||!is_double($apaReceBaie)||
!is_double($apaCaldaBaie)||!is_double($apaReceBucatarie)||!is_double($apaCaldaBucatarie)) {
	echo 'Nu ai introdus toate campurile.<br>
		  Apasa < a href="apometre.html">aici</a> pentru a te intoarce la pagina anterioara';
}

else{$inserareSql="INSERT INTO records (user_id,an,luna,apa_rece_baie,apa_calda_baie,apa_rece_bucatarie,apa_calda_bucatarie) 
VALUES (1,$an,$luna,$apaReceBaie,$apaCaldaBaie,$apaReceBucatarie,$apaCaldaBucatarie)";

	echo $inserareSql.'<br>';

	$query = mysql_query($inserareSql,$conn);


//2. sa ii trimit un mesaj utilizatorului ca au fost introduse si sa le vada in vizualizare.php


	if ($query==false){
	echo 'Eroarea este'.mysql_error($conn);
	die("nu am putut sa execut query-ul");
	}
	else{ 
	echo 'Va multumim.<br>
	   Datele au fost introduse cu succes in baza de date.<br>
	   Pentru vizualizare apasati <a href="vizualizare_apometre.php">aici</a>';
	}

}


?>