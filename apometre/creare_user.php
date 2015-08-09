<?php

require_once('config.php');





//preluare date din creare_user.html
$username = $_POST["username"];
$password = $_POST["password"];
$rePassword = $_POST["rePassword"];
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$mail = $_POST["mail"];
$judet = $_POST["judet"];
$localitate = $_POST["localitate"];
//aici nu are nume dupa care sa-l iau 
$sector = $_POST["sector"];
$bloc = $_POST["bloc"];
$scara = $_POST["scara"];
//aici nu are nume dupa care sa-l iau 
$etaj = $_POST["etaj"];
$apartament = $_POST["apartament"];



//vreau sa prelucrez datele primite din creare_user.html (1.sa le bag in baza de date si 2. sa ii trimit un mesaj utilizatorului ca au fost introduse si sa le vada)


//1. vreau sa inserez in baza de date apometre, in tabelul utilizator, valorile luate din formularul html creare_user.html si preluate de creare_user.php
 //a. validare date introduse:

//if .....nu ai introdus sau nu sunt corecte

$errors = "";





if ($username == '' || strlen($username)<3){
	$errors = $errors." Username nu este setat/valid!<br>";
}

if ($password == ''||strlen($password)<3){
	$errors = $errors." Parola nu este setata/valida!<br>";
}

if ($password != $rePassword){
	$errors = $errors." Cele 2 parole nu coincid!<br>";
}
if (!isset($nume) || strlen($nume)<3){
	$errors = $errors."Numele nu este setat/valid!<br>";
}

if ($prenume ==''){
	$errors = $errors."Prenumele nu este setat!<br>";
}

if (!isset($mail) ||!filter_var($mail,FILTER_VALIDATE_EMAIL)){
	$errors = $errors."Mailul nu este setat/valid!<br>";
}

if (!isset($judet)){
	$errors = $errors."Judetul nu este setat!<br>";
}

if (!isset($localitate)){
	$errors = $errors."Localitatea nu este setata!<br>";
}

if (!isset($sector) || !is_numeric($sector)){
	$errors = $errors."Sectorul nu este setat!sectorul curent = $sector<br>";
}

if (!isset($bloc)){
	$errors = $errors."Blocul nu este setat!<br>";
}

if (!isset($scara)){
	$errors = $errors."Scara nu este setata!<br>";
}
 
if (!isset($etaj) || $etaj=="-100"){
	$errors = $errors."Etajul nu este setat!<br>";
}

if (!isset($apartament) || !is_numeric($apartament)){
	$errors = $errors."Apartamentul nu este setat!<br>";
}
if($errors!=""){
	
	echo 'Nu ai introdus toate campurile.<br>'.$errors.'
		  Apasa <a href="creare_user.html">aici</a> pentru a te intoarce la pagina anterioara';
	exit();
}


$md5Password = md5($password);

$inserareSql="INSERT INTO users(username,password,nume,prenume,mail,judet,localitate,sector,bloc,scara,etaj,apartament) 
VALUES ('".$username."','$md5Password','$nume','$prenume','$mail','$judet','$localitate',$sector,'$bloc','$scara',$etaj,$apartament)";

	$query = mysqli_query($conn,$inserareSql);
//2. sa ii trimit un mesaj utilizatorului ca au fost introduse si sa le vada in vizualizare_user.php

	if ($query==FALSE){
		echo 'Eroarea este'.mysqli_error($conn);
	}
	else{
		echo 'Va multumim.<br>
	   Datele au fost introduse cu succes in baza de date.<br>
	   Pentru vizualizare apasati <a href="vizualizare_user.php">aici</a>';

	}

?>