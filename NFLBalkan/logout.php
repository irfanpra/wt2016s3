<?php
	session_start();
	unset($_SESSION["userName"]);
    unset($_SESSION["password"]);
	unset($_SESSION['login']);
    session_unset();
   	header('Refresh: 1; URL = ./pocetna.php');
?>