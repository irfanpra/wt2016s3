<?php
	session_start();
	session_unset();
	include 'funkcije.php';
	include 'stranice.php';
	preusmjeri($homepage);
?>