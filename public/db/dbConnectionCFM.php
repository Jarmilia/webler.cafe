<?php 

$host = 'localhost';
$user = 'root';
$pw = '';
$dbName = 'cfmDatabase'; 

$dbConnect = mysqli_connect($host, $user, $pw, $dbName) 
	or die('Verbindung fehlgeschlagen:' .mysqli_connect_error());
?>