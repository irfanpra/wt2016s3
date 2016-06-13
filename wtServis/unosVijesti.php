<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Unos vijesti</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="scripts/unosVijesti.js"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php

		session_start();
		$page = 'unosVijesti';
		if(isset($_SESSION['username']))
		{
			include 'navbar-admin.php';
		} 
		else{
			header('Location: login.php');
		}

		if(isset($_REQUEST["save"]))
		{
			$naslov = htmlEntities($_POST['naslov'], ENT_QUOTES);
			$path = htmlEntities($_POST['path'], ENT_QUOTES);
			$novost = htmlEntities($_POST['novost'], ENT_QUOTES);
			$datum = time()*1000;
			$drzava = htmlEntities($_POST['drzava'], ENT_QUOTES);
			$telefon = htmlEntities($_POST['telefon'], ENT_QUOTES);
			$val = htmlEntities($_POST['validacija'], ENT_QUOTES);

			if($naslov != null && $path != null && $novost != null && $datum != null && $drzava != null && $telefon != null && 				$val == 'true'){
				$list = array
				(
					$naslov.'|'.$path.'|'.$datum.'|'.$novost
				);

				$file = fopen("vijesti/vijesti.csv","a");
				foreach ($list as $line){
 	 				fputcsv($file,explode('|',$line));
				}
				fclose($file);
				echo "<script>alert('Uspješno ste unijeli vijest.');</script>";
			}
			else{
				echo "<script>alert('Neispravni parametri za unos vijesti.');</script>";
			}
			
		}

	?>

	<form id="forma-login" action="unosVijesti.php" method="post">
		<h2>FORMA ZA UNOS VIJESTI</h2><br>
		    <div class="kontakt-podaci">
			<label>Naslov: </label>
			<input type="text" size="28" name="naslov"
				onkeyup="validiraj_prazno(this)"></div><br>
			<div class="kontakt-podaci">
			<label>Image URL: </label>
			<input type="text" size="28" name="path"
			onkeyup=validiraj_prazno(this)></div><br>
			<div class="kontakt-podaci">
			<label>Država: </label>
			<input type="text" size="28"  name="drzava" 
				onkeyup="validiraj_kod(this, document.getElementsByName('telefon')[0])"></div><br>
			<div class="kontakt-podaci">
			<label>Telefonski broj: </label>
			<input type="text" size="28"  name="telefon" 
				onkeyup="validiraj_kod(document.getElementsByName('drzava')[0], this)"></div>
			<br><br>
		<label>Novost: </label>
		<textarea name="novost" cols="60" rows="10"
		onkeyup="validiraj_prazno(this)"></textarea>
		<input id="val" type="hidden" name="validacija" value="false">
		<button type="submit" name="save">Spasi vijest</button>
	</form>

	
</BODY>
</HTML>
