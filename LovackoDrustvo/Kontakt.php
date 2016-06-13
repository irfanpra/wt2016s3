<!DOCTYPE HTML>

<HTML>
<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="treci_zadatak.js"></script>

</HEAD>

<BODY>

<header>
<h1> LD "Kaćunski zec" Kaćuni-Busovača </h1>

<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  

  <div class="mojLogo2"> </div>
</div>


</header>

<nav class="meni">
<ul>
	<li><a href="index.php">Početna</a></li>
	<li><a href="Lov.php">Lov</a></li>
	<li><a href="O_nama.php">O nama</a></li>
	<li><a href="Korisni_linkovi.php">Korisni linkovi</a></li>
	<li><a href="Kontakt.php">Kontakt</a></li>
	<li><a href="Login.php">Login</a></li>
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<li><a href='UnosNovosti.php'>Dodaj novost</a></li>";
	}
	?>
</ul>


</nav>

<section>

	<div id="divKontakt">

	<form id="kontaktForma">
	 
	
	<label for="ime"> Ime i Prezime: </label> <input id="ime" type="text" name="ime" oninput="validacijaImena(this);"> <br> 
	<label for="broj"> Broj telefona: </label> <input id="broj" type="text" name="telefon" oninput="validacijaTelefona(this);"> <br>	
	<label for="mail"> e-Mail: </label> <input id="mail" type="text" name="mail" oninput="validacijaMail(this);"> <br>

	<label for="grad"> Grad: </label> <select id="selectGrad" name="gradovi">
	<option value="nijedan" selected="selected">Nijedan od ponuđenih</option>
	<option value="vitez">Vitez</option>
	<option value="travnik">Travnik</option>
	<option value="zenica">Zenica</option>
	<option value="kakanj">Kakanj</option>
	</select>
	<br>
	<label id="udruzenje"> Lovačko udruženje: </label> <select id="selectDrustvo" name="udruzenje" onchange="validacijaGradDrustvo ();" >
	<option value="nijedano" selected="selected">Nisam član LD.</option>
	<option value="lovac">LD Lovac </option>
	<option value="sokol">LD Sokol</option>
	<option value="zenica">LD Zenica</option>
	<option value="srndac">LD Srndac</option>
	</select>
	
	
	<input id="posalji" type="button" value="Pošalji" > 
	
	
	</form>
	</div>

</section>

</BODY>

</HTML>


