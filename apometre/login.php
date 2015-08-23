<?php

/*
fisier de prelucrare a datelor din login.html
1. preluam valorile parametrilor din form-ul de login- user si parola
2.vrem sa vedem daca exista un username si o parola in baza de date cu valorile date din formular
2.1. daca exista, inseamna ca are cont si-l redirectionam sa-si vada apometrele
2.2 daca nu exista in baza de date, fie a gresit user sau parola, fie n-are cont
 */

require_once('config.php');


$user = $_POST["user"];


$md5Pass = md5($_POST["password"]);

//formam interogarea asa cum ii place lui sql, adica ii trimitem un string cu o instructiune sql valida
$sqlString = "SELECT * FROM users WHERE username='".$user."' AND password='".$md5Pass."'";
//SELECT * FROM users WHERE username='adrian' AND password='roxana';
//odata stringul format il trimitem serverului pentru interpretare
$query = mysqli_query($conn,$sqlString);

//numaram cate linii din tabel a intors interogarea sql; daca username si parola sunt gresite, rezulta 0 linii; daca sunt bune, rezulta o linie; daca sunt mai mult de 1, userii nu sunt unique , nu e ok
//username sunt unique din motive de identificare unica in sistem (daca s-ar loga 2 cu acelasi user, le-as incurca inregistrarile de la apometre; as avea id-uri diferite, dar n-as mai stii pe care id sa-l iau de bun
$counter = mysqli_num_rows($query);

if ($counter ==1){
	//sa tin minte ca e logat; nu tb cand apeleaza diferite pagini sa se logheze de fiecare data
	//toate variabilele normale dintr-un script sunt distruse la sf scriptului (s-a terminat de executat fisierul ? >), mai putin cele de sesiune, care sunt distruse de user intentionat la logout, fie dupa ce expira un timeout pe server-setari de-ale php-ului
	//variabilele de sesiune pt 2 useri diferiti au valori diferite; desi avem aceeasi loggedinUser, pt mine are o valoare si pt alt utilizator are o alta; daca s-ar loga 2, ar ramene apometrele ultimului logat si le-ar vedea toti doar pe alea; 
	//cu mecanismul de session se rezolva asta
	$row = mysqli_fetch_assoc($query);
	$_SESSION["loggedinUser"] = $row['username'];
	$_SESSION["loggedinUserId"] = $row['id'];
	header("location:view_records.php"); //redirectioneaza direct, fara a href si interventie manuala din partea userului
}
else{
	echo "User/parola sunt incorecte<br>";
	echo "Apasa <a href='login.html'>aici</a> pentru a reincerca";
}


?>