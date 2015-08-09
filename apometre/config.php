<?php
session_start();


define("APP_VERSION","1.0.0");



//database parameters
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "euforia";
$dbName = "apometre";


//sa vad daca ma pot conecta la mysql

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName) or die ("Canot connect to database!");




$months = array("1"=>"Ianuarie","2"=>"Februarie","3"=>"Martie","4"=>"Aprilie","5"=>"Mai","6"=>"Iunie","7"=>"Iulie","8"=>"August","9"=>"Septembrie","10"=>"Octombrie","11"=>"Noiembrie","12"=>"Decembrie");

require_once 'functions.php';
?>