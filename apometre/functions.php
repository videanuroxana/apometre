<?php


/**
 * getUserIdByUsername
 * returns the user id for a specified user name
 * @param string $username - the user name that you want to find id for
 */

function getUserIdByUsername($username){
	
	global $conn;
	
	//vreau sa aflu id-ul userului logat (din tabelul users) pe baza username-ului aflat prin citirea variabilei de sesiune
	$sqlUser = "SELECT id FROM users WHERE username='".$username."'";
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
		
	return $uid;
}


/**
 * check if the user is logged in or not
 */

function checkLogin(){
	
	$isLoggedIn = $_SESSION["loggedIn"];
	
	if (!isset($isLoggedIn) || $isLoggedIn == false){
		header("location:login_form.php");
	}
	
	
}

?>