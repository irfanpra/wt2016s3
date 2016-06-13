<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stil1.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kapital</title>
</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['username'])) {
	        print'<div class="admindiv">';
			print'<ul class="adminlista">';
			print'<li class="adminmeni"><a href="UnosNovosti.php">Dodaj novost</a></li>';
			print'<li class="adminmeni"><a href="Logout.php">Logout</a></li>';
			print'</ul>';
			print'</div>';
		}
    ?>
	<div class="Gore">
		<div class="Logo">
			<div class="KrugVanjski">
				<div class="KrugUnutrasnji"></div>
				<div class="Most"></div>
				<div class="TravaLijevo"></div>
				<div class="TravaDesno"></div>
				<div class="Put1"></div>
				<div class="Put2"></div>
				<div class="TravaPreko"></div>
				<div class="Providni"></div>
				<div class="Providni2"></div>
			</div>
		</div>
		<div class="Naslov">
			<h1>"SARAJEVOPUTEVI"d.d.</h1>
		</div>
	</div>

	<div class="meni">
		<ul class="lista">
			<li class="nav"><a href="prva.php">NOVOSTI</a></li>
			<li class="nav"><a href="Tabela.php">KAPITAL</a></li>
			<li class="nav"><a href="KontaktForma.php">KONTAKT</a></li>
			<li class="nav"><a href="Linkovi.php">LINKOVI</a></li>
			<li class="nav"><a href="Login.php">LOGIN</a></li>
		</ul>
	</div>
	<div class="Glavno">
		<p class="Kapital">Ukupni kapital firme je 6.041.500,00 KM sa sljedećom strukturom vlasništva na osnovu rješenja o registraciji broj 065-0-REG-08-001761</p>
		<table>
			<tr>
				<th>Red.broj</th>
				<th>Struktura kapitala</th>
				<th>Vrijednost u KM</th>
				<th>Vrijednost u %</th>
				<th>Broj dionica</th>
			</tr>
			<tr>
				<td>1.</td>
				<td>Nominalna vrijednost kapitala</td>
				<td>6.041.500,00</td>
				<td>100%</td>
				<td>483.320</td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Državni kapital-Federalno ministarstvo prometa i komunikacija</td>
				<td>4.671.650,00</td>
				<td>77,326%</td>
				<td>373.732</td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Privatni capital-Jata Gropu doo Srebrenik</td>
				<td>1.028.150,00</td>
				<td>17,0181%</td>
				<td>82.252</td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Mali dioničari, po prethodno izvršenoj vlasničkoj transformaciji</td>
				<td>341.700,00</td>
				<td>5,6559%</td>
				<td>27.336</td>
			</tr>
		</table>
		<p class="Kapital">Nominalna vrijednost dionice 12,5KM.</p>
	</div>
	<div class="Dno">
		<h3 class="lijevo">Info:</h3>
		<p class="Info">„SARAJEVOPUTEVI“dd <br> Ul.Mustajbega Fadilpašića 17<br>Sarajevo,BiH<br>Tel:033/667-499<br>Fax: 033/667-500<br>E-m
		ail:info@saputevi.ba</p>
		<p class="cpr">2016 © Sva prava zadržava |<br> "SARAJEVOPUTEVI" d.d. Sarajevo <br>Bosna i Hercegovina</p>
		<h3 class="desno">Copyright</h3>
	</div>

</body>
</html>