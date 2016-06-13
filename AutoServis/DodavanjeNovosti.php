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
		<li><a href='index.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log Out</a></li>
		<li><a href='DodavanjeNovosti.php'>Dodaj vijest</a></li>
	</ul>";
	}
	else {
	print "<ul> 
		<li><a href='index.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log In</a></li>
	</ul>";
	}
	?>
	
	</div>
	</div>
	
	<div class="forma">
	<form   method="POST">

	<div id="labela_tekst">
	<label for="UnosTeksta">Unesite vijest:</label>
	<br>
	<textarea name="tekstarea" rows="6" cols="35" required></textarea>
	</div>
	<br>
	<br>
	<br>
	<label for="IzborSlike">Izaberite sliku:</label>
	<input type="file" id="slika" name="slika" required>
	<br>
	<br>
	<div id="dugme">
	<button type="submit" action="DodavanjeNovosti.php" name="baton"> Submit </button>
	</div>
	
	</form>
	</div>
		<?php
		if(isset($_POST['baton'])){
			
			$fp = fopen('dodaj_novosti.csv', 'a+');
			$tekst = utf8_encode(htmlspecialchars($_POST['tekstarea']));
			$vrijeme = date("Y-m-d");
			$tekst=str_replace(",",";.?",$tekst);
			$vrijeme = $vrijeme."T".(date("H:i:s"));
			$list = array (
			array($tekst,$vrijeme, $_REQUEST['slika'])
						);

			foreach ($list as $fields) {
				fputcsv($fp, $fields);
			}

		fclose($fp);
		}
		?>
</BODY>
</HTML>