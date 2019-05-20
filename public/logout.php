<?php 

session_start();

$_SESSION['logout_success'] = true;
//Daten aus der Session löschen
unset($_SESSION['user_id']);
unset($_SESSION['group_id']);

// Weiterleiten zur Startseite
header('Location: index.php');

?>