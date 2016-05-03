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
	$uid = $dbUser['id'];		
	return $uid;
}


/**
 * check if the user is logged in or not
 */

function checkLogin(){
	
	$isLoggedIn = $_SESSION["loggedIn"];	
	//daca isLoggedIn nu e setata sau e setata dar cu alta valoare decat true, rezulta ca userul nu e logat, deci il trimitem la login
	if (!isset($isLoggedIn) || $isLoggedIn == false){
		header("location:login_form.php");
	}	
}


function getRoomNameById($roomId){
	
	
	global $conn;
	$sql = "SELECT name FROM rooms WHERE id='".$roomId."'";
	$q = mysqli_query($conn, $sql);
	
	if ($q!=false){		
		$rez = mysqli_fetch_assoc($q);		
		return $rez["name"];
	}
	
	
	echo mysqli_error($conn);
	
	
}



?>