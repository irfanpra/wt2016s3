<!doctype html> 

<html>
<head>
<meta charset=utf-8>
<title> Svaki Student </title>
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="pocetna.css">
<script src="validacija.js"> 

</script>
</head>
<body>
<div class="tijelo">
		<div class="logo">
			<p id="S1">
				s
			</p>
			<p id="svaki">
				vaki
			</p>
			<p id="S2">
				s
			</p>
			<p id="student">
				tudent
			</p>

		</div>

<div class="stranica">

<div class="Menu">
<?php
	session_start();
	if(isset($_SESSION['sesija'])){
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>LogOut</a></li>
<li><a href='dodavanjeVijesti.php'>Dodaj Vijest</a></li>
</ul>!";
}
	
else
{
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>Login</a></li>

</ul>";
}	
?>
</div>
</div>
<div class="forma" onsubmit="return(BrojTelefona('BrojTel'));">
	<form action="Forma" method="GET">
	
	<div id="labela_email">
	<label for="E-Mail">E-Mail:</label><br>
	<input type="email" name="E-Mail" id="E-Mail" oninput="validirajEmail();"><br>
	</div>
	<br>
	
	<div id="labela_ime_prezime">
	<label for="ImeiPrezime">Ime i Prezime:</label>
	<input type="text" name="ImeiPrezime" id="ImeiPrezime" oninput="validirajIme_Prezime();"><br>
	</div>
	<br>
	
	<div id="batnZaBrojTelefona">
	
	<label>
	Odaberi državu:
	</label>
	<br>
	<input type="radio" id="bih" name="drzava" value="Bosna i Hercegovina" onchange="funkcijaMultipleValidacije()">Bosna i Hercegovina</input> <br>
	<input type="radio" id="sad" name="drzava" value="Sjedinjene američke države " onchange="funkcijaMultipleValidacije()">Sjedinjene američke države</input> <br>
	<br>
	

	</div>
	<div id="labela_broj_telefona">
	<label for="BrojTel">Broj Telefona:</label>
	<input type="tel" name="BrojTel" id="BrojTel"><br>
	</div>
	<br>
	
	
	
	
	<!-- <div id="labela_datum">
	<label for="datum">Datum:</label>
	<br>
	<input type="date" name="datum" id="datum"><br>
	</div> -->
	
	<div id="dugme" >
	<button type="submit" formaction="pocetna.html" > Kontaktiraj </button>
	</div>
	
	</form>
	</div>
	</div>
</body>
</html>