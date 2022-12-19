<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$database = "projetocrud";
$username="root";
$password="";
$conexao=mysqli_connect($servername, $username, $password, $database);




//$db = sqlite_open('mysqlitedb', 0666, $sqliteerror);

?>