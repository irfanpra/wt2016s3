<!DOCTYPE html>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Auto Simanić</TITLE>
<link rel="stylesheet"  href="Logo.css">
<link rel="stylesheet"  href="Pocetna.css">
<link rel="stylesheet"  href="Onama.css">
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
	<div id="sredina">
	<div id="tabela">
	<table>
  <tr>
	<th>
		<p> Naziv kompanije
		</p>
	</th>
	<th>
		<p>
		Lokacija kompanije
		</p>
	</th>
	<th>
		<p> 
		Dostupni artikli
		</p>
	</th>
	<th>
		<p>
		Slika artikla
		</p>
	</th>
  </tr>
  <tr> 
  <td><p>Mann Filter</p></td>
  <td><p>Kina</p></td>
  <td><p>Filter ulja<br>
		 Filter zraka<br>
		 Filter klime<br>
		 Filter goriva</p></td>
  <td><p><img src="mann-filters.png" alt="filteri"></p></td>
  </tr> 
  <tr> 
  <td><p>Gates</p></td>
  <td><p>Denver, Colorado</p></td>
  <td><p>Zupčasto remenje<br>
		 Mikro kaiševi<br>
		 Kočiona crijeva
		 </p></td>
  <td><p><img src="gates.png" alt="gates"></p></td>
  </tr>
  <tr> 
  <td><p>Banner</p></td>
  <td><p>Linz, Austria</p></td>
  <td><p>Akumulatori</p></td>
  <td><p><img src="banner.gif" alt="banner"></p></td>
  </tr>
  <tr> 
  <td><p>GasItaly</p></td>
  <td><p>Brescia, Italija</p></td>
  <td><p>Plinske instalacije</p></td>
  <td><p><img src="ecu-eco.png" alt="eco"></p></td>
  </tr>

</table>
</div>
	</div>
	
</BODY>
</HTML>