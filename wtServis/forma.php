<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Forma</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="scripts/forma.js"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php
		session_start();
		$page = 'kontakt';
		if(isset($_SESSION['username']))
		{
			include 'navbar-admin.php';
		} 
		else include 'navbar.php';
	?>
	
	<form id="forma-kontakt">
		<h2>KONTAKT FORMA</h2><br>
		<div class="kontakt-podaci">
			<label>Ime i prezime: </label>
			<input type="text" onkeyup="validiraj_ime(this)" size="30" name="ime"></div><br>
			<div class="kontakt-podaci"><label>E-mail: </label>
			<input type="text" size="30" onkeyup="validiraj_mail(this)" name="email">
		</div><br><br>
		<label>Operater: </label><br>
		<div id="operater">
			<input type="radio" id="o1" onclick="val_radio()" name="operaterr" value="bhtelecom"> BH Telecom
			<input type="radio" id="o2" onclick="val_radio()" name="operaterr" value="mtel"> Mtel
			<input type="radio" id="o3" onclick="val_radio()" name="operaterr" value="eronet"> Eronet<br><br>
		</div>
		<div class="kontakt-podaci">
			<label>Broj telefona </label>
			<input type="text" onkeyup="validiraj_telefon(this)" size="30" id="broj_id" name="broj"></div><br>
		</div>
		<label>Poruka: </label>
		<textarea name="poruka" cols="60" rows="10" onkeyup="val_poruka(this)"></textarea>
		<button type="submit">Pošalji poruku</button>
	</form>
	
</BODY>
</HTML>