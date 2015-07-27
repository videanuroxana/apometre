<?php
session_start();

//database parameters
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "euforia";
$dbName = "apometre";


//sa vad daca ma pot conecta la mysql

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName) or die ("Canot connect to database!");


require_once 'functions.php';
?>