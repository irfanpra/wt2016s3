<!DOCTYPE html>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Auto Simanić</TITLE>
<link rel="stylesheet"  href="Logo.css">
<link rel="stylesheet"  href="Pocetna.css">
<link rel="stylesheet"  href="Eksterni_linkovi.css">
</HEAD>
<BODY>
	
	<div id="Zaglavlje">
	
	<div class="Logo">
	<p id="A">
	A
	</p>
	<p id="uto">
	uto
	</p>
	<p id="S">
	S
	</p>
	<p id="imanic">
	imanić
	</p>
	</div>
	
	<div class="Menu">
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<ul> 
		<li><a href='Zad1.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log Out</a></li>
		<li><a href='DodavanjeNovosti.php'>Dodaj vijest</a></li>
	</ul>";
	}
	else {
	print "<ul> 
		<li><a href='Zad1.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log In</a></li>
	</ul>";
	}
	?>
	</div>
	</div>
	
	<div class="Linkovi">
	<ul> 
		<li><a href="https://www.mann-hummel.com/en/mann-filter/home/" target=_blank>Mann Filter</a></li>
		<li><a href="http://www.gates.com/industries/automotive" target=_blank>Gates</a></li>
		<li><a href="http://www.bannerbatterien.com/banner/home/index_en.php" target=_blank>Banner</a></li>
		<li><a href="http://www.gasitaly.com/" target=_blank>Gas Italy</a></li>
	</ul>
	
</BODY>
</HTML>