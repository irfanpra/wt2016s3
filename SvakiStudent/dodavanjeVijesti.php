<!doctype html> 
<html>
<head>
<meta charset=utf-8>
<title> Svaki Student </title>
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="pocetna.css">
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
<div class="forma3">
			<form  method="POST">
				
				
				<div id="labela_tekst">
				<label for="UnosTeksta">Unesite vijest:</label>
				<br>
				<textarea name="tekstovi" rows="6" cols="35"></textarea>
				</div>
			<br>

			
			<label for="IzborSlike">Izaberite sliku:</label>
			<input type="file" name="slikaa" required>
			<br>
			<br>
			<div id="dugme">
			<button type="submit" name="dugmee" action="dodavanjeNovosti.php"> Submit  </button>
			</div>
	
			</form>
		</div>
		<?php
			if (isset($_POST['dugmee']))
			{
				$fp = fopen('dodaj_novosti.csv', 'a+');
				$tekst = utf8_encode(htmlspecialchars($_POST['tekstovi']));
				$list = array (
				array($tekst,date("d/m/Y"), $_REQUEST['slikaa'])
						);

				foreach ($list as $fields) {
				fputcsv($fp, $fields);
			}

				fclose($fp);	
			}
		?>
</body>
</html>