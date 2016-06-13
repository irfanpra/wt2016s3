<!DOCTYPE HTML>

<HTML>

<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</HEAD>

<BODY>

<header>


<h1 id="naslov"> LD "Kaćunski zec" Kaćuni-Busovača </h1>


<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  
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

<div id='divNovosti'>

	<form id='novostiForma'  action='UnosNovosti.php' method='POST'>
				 
				
				<div id="labela_tekst">
				<label for="UnosNaslova">Naslov:</label>
				<br>
				<textarea  name="tekstareaNaslov" rows="1" cols="35" required></textarea> <br> <br>
				<label for="UnosTeksta">Tekst:</label>
				<br>
				<textarea name="tekstareaTekst" rows="6" cols="35" required></textarea>
				</div>								
				<label for="Izborslike">Izaberite sliku:</label>
				<br><br><br>
				<input type="file" id="slika" name="slika" required>
				<br>
				<br>
				
				<button type="submit" action="UnosNovosti.php" name="unosNovosti"> Unesi </button>
				
	</form>
	
</div>

</section>


		<?php
		
						
		if(isset($_POST['unosNovosti'])){
			// array("Naslov","","Tekst","","Datum","","Slika");
			$dokument = fopen('unosNovosti.csv', 'a+');
			$naslov1 = utf8_encode(htmlspecialchars($_POST['tekstareaNaslov']));
			$naslov = strtoupper ( $naslov1);
			$tekst = utf8_encode(htmlspecialchars($_POST['tekstareaTekst']));
			$datum = (date("Y-m-d"))."T".(date("H:i:s"));
			$naslov = str_replace(",","?x?", $naslov);
			$tekst = str_replace(",","?x?", $tekst);
			$naslov = str_replace("\n","?n?", $naslov);
			$tekst = str_replace("\n","?n?", $tekst);
		
			$naslov=str_replace(",",";.?",$naslov);
			$tekst=str_replace(",",";.?",$tekst);
			
			$list = array (
			array($naslov,$tekst,$datum, $_REQUEST['slika'])
						);
			foreach ($list as $fields) {
				fputcsv($dokument, $fields);
				
			}

		fclose($dokument);
		}
		?>
<br><br>

</BODY>

</HTML>


