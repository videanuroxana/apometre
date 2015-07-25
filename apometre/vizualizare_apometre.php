<?php

require_once('config.php');

//deoarece pagina asta poate fi apelata direct din browser prin //localhost/apometre/vizualizare_apometre.php si userul ar veni direct, fara sa stiu cine e,
// tb sa ma asigur ca a trecut prin login.php, ca-l pot identifica pentru a stii ce apometre sa-i arat
//verific daca variabila de sesiune setata in pagina de login.php e inca setata
//daca e setata, inseamna ca trecut, user si parola sunt corecte si are voie sa vada pagina
//daca nu e setata, inseamna a apelat direct pagina si-l trimit la login.php ca nu stiu ce apometre sa-i arat


$u = $_SESSION["loggedinUser"];
if (!isset($u) || $u==""){
	header("location:login.html");
}

//vreau sa aflu id-ul userului logat (din tabelul users) pe baza username-ului aflat prin citirea variabilei de sesiune
$sqlUser = "SELECT id FROM users WHERE username='".$u."'";
$queryUser = mysqli_query($conn,$sqlUser);
//print_r($queryUser);-mysqli_result Object ( [current_field] => 0 [field_count] => 1 [lengths] => [num_rows] => 1 [type] => 0 )
//e un set brut de rezultate,nu inteleg nimic din el si de-asta am nevoie de mysql_fetch_assoc sau mysql_fetch_num sau altele


//potrivim rezultatele intoarse de interogarea queryUser intr-un array asociativ, ca cel de mai jos:

$dbUser = mysqli_fetch_assoc($queryUser);

//print_r($dbUser);//pt programatori, te ajuta sa vezi ce e intr-un array la un moment dat
//:Array ( [id] => 1 [username] => coco [password] => rico [nume] => Videanu [prenume] => Roxana [mail] => coco@yahoo.com [judet] => arges [localitate] => pitesti [sector] => 2 [bloc] => 12 [scara] => 1 [etaj] => 2 [apartament] => 4 ) 
//die();
//de lene am pus intr-o variabila $uid ce mi-a intors mysql_fetch_assoc cu privire la querry-ul dat mai devreme
$uid = $dbUser['id'];
//echo $uid;

$sql = "SELECT * FROM records WHERE user_id = ".$uid."";
$query = mysqli_query($conn,$sql);


if (mysqli_num_rows($query)==0){
	echo "Nu ai nicio inregistrare. Du-te <a href='apometre.php'>aici</a> pentru a adauga noi inregistrari ";
}
else{
	while ($row = mysqli_fetch_assoc($query))
	{
		echo" An:".$row['an']."<br> 
	      Luna:".$row['luna']."<br>
	      Apa rece baie:".$row['apa_rece_baie']."<br> 
	      Apa calda baie:".$row['apa_calda_baie']."<br> 
	      Apa rece bucatarie:".$row['apa_rece_bucatarie']."<br>
	      Apa calda bucatarie:".$row['apa_calda_bucatarie']."<br><br>";


	}
}



?>