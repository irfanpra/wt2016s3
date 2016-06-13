<!DOCTYPE html>
<html>
<head>
	<title>SmartphoneBH - Kontakt</title>
	<link rel="stylesheet" type="text/css" href="SmartphoneBH.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="validacijaForme.js"></script>
</head>
<body>
<div class="omotac">
	<div id="header">
		<div id="logo">
				<a href="Naslovnica.php" id="linkLogo"><div id="okvirTelefona"></div></a>
				<div id="dugme"></div>
				<div id="zvucnik"></div>
			</div>
		<a href="Naslovnica.php" id="naslovLink"><h1>SmartPhoneBH | Smartphone, Tablet Reviews, Tips and Tricks</h1></a>
		<div id="meni">
			<ul>
				<li id="liNovosti"><a href="Naslovnica.php"><span>Novosti</span></a></li>
				<li id="liPodstranica"><a href="Tabele.php"><span>Telefoni</span></a></li>
				<li id="liForma"><a href="Kontakt.php"><span>Forma za kontakt</span></a></li>
				<li id="liListaLinkova"><a href="Linkovi.php">Lista linkova</a></li>
				<li id="liLogin"><a href="LoginPage.php">Login</a></li>
				<?php
					session_start();
					if(isset($_SESSION['login'])) {
				?>	
						<li id="liAdminPage"><a href="AdminPage.php">Admin Page</a></li>
				<?php
					}
				?>	
			</ul>
		</div>
	</div>
	<div id="formaZaKontakt">
		<h1>Kontakt</h1>
		<form id="forma">
			<label for="ime">Ime i prezime:</label>
			<input type="text" id="ime" placeholder="Ime i prezime" onfocus="validiraj(ime)"><p id="pZaIme" class="error"></p> <br><br>
			<label for="email">E-mail adresa:</label>
			<input type="text" id="email" placeholder="E-mail" onfocus="validiraj(email)"><p id="pZaEmail" class="error"></p> <br><br>
			<label>Spol:</label>   
			<label for="muško">Muško</label>
			<input type="radio" id="muško" value="muško" name="spol">
			<label for="žensko">Žensko</label>
			<input type="radio" id="žensko" value="žensko" name="spol">
			<p>Pitanje vezano za</p>
			<ul>
				<li>
					<input type="radio" id="smartphone" name="tech" value="smartphone">
					<label for="smartphone">Smartphone</label> 
				</li>
				<li>
					<input type="radio" id="tablet" name="tech" value="tablet">
					<label for="tablet">Tablet</label>
				</li>
				<li>
					<input type="radio" id="android" name="tech" value="android">
					<label for="android">Android</label>
				</li>
				<li>
					<input type="radio" id="ios" name="tech" value="ios">
					<label for="ios">iOS</label>
				</li>
				<li>
					<input type="radio" id="ostalo" name="tech" value="ostalo">
					<label for="ostalo">Ostalo</label>
				</li>
			</ul>
			<label for="komentar">Vaše pitanje:</label> <br>
			<textarea id="komentar" rows="5" cols="30" placeholder="Vaše pitanje"></textarea> <br>
			<input type="submit" value="Pošalji" id="submitDugme" onclick="return posalji()">
		</form>
	</div>
	<div id="footer">
		<ul id="drmreze">
			<li><a href="http://www.facebook.com" target="_blank"><img src="facebook.png" alt="Facebook"></a></li>
			<li><a href="http://www.twitter.com" target="_blank"><img src="twitter.png" alt="Twitter"></a></li>
			<li><a href="http://www.youtube.com" target="_blank"><img src="youtube.jpg" alt="Youtube"></a></li>
			<li><a href="https://plus.google.com/explore" target="_blank"><img src="googleplus.png" alt="Google +"></a></li>
		</ul>
		<p id="copyright">Copyright (c) Mirnes Peljto  <a href="#Top">Top</a></p>
	</div>
</div>
</body>
</html>