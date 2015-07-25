<?php
//pornim sesiunea
session_start();

//Informatii baza de date

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "euforia";
$dbName = "apometre";


//sa vad daca ma pot conecta la mysql

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName) or die ("Nu ma pot conecta la MySql!");






?>