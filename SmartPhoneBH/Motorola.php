<!DOCTYPE html>
<html>
<head>
	<title>SmartphoneBH - Tabele</title>
	<link rel="stylesheet" type="text/css" href="SmartphoneBH.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div id="lijevo">
	<ul>
		<li class="tabelaBrendovi"><a href="Samsung.php">Samsung</a></li>
		<li class="tabelaBrendovi"><a href="Apple.php">Apple</a></li>
		<li class="tabelaBrendovi"><a href="Sony.php">Sony</a></li>
		<li class="tabelaBrendovi"><a href="Lg.php">LG</a></li>
		<li class="tabelaBrendovi"><a href="Htc.php">HTC</a></li>
		<li class="tabelaBrendovi"><a href="Huawei.php">Huawei</a></li>
		<li class="tabelaBrendovi"><a href="Motorola.php">Motorola</a></li>
	</ul>
		
		
</div>

<div id="okvirZaTabelu">
	<h1>Motorola phones</h1>
	<table id="tabelaSlike">
		<tr>
			<th>Moto X Force</th>
			<th>Droid Turbo 2</th>
			<th>Moto X Style</th>
			<th>Moto X Play</th>
			<th>Moto G3</th>
		</tr>
		<tr class="parni">
			<td><img src="Motorolaslike/motoxforce.jpg" alt="Motorola Moto X Force"></td>
			<td><img src="Motorolaslike/droidturbo2.jpg" alt="Motorola Droid Turbo 2"></td>
			<td><img src="Motorolaslike/motoxstyle.jpg" alt="Motorola Moto X Style"></td>
			<td><img src="Motorolaslike/motoxplay.jpg" alt="Motorola Moto X Play"></td>
			<td><img src="Motorolaslike/motog3.jpg" alt="Motorola Moto G3"></td>
		</tr>
		<tr>
			<th>Moto E</th>
			<th>Moto G2</th>
			<th>Moto Maxx</th>
			<th>Nexus 6</th>
			<th>Moto X2</th>
		</tr>
		<tr>
			<td><img src="Motorolaslike/motoe.jpg" alt="Motorola Moto E"></td>
			<td><img src="Motorolaslike/motog2.jpg" alt="Motorola Moto G2"></td>
			<td><img src="Motorolaslike/motomaxx.jpg" alt="Motorola Moto Maxx"></td>
			<td><img src="Motorolaslike/nexus6.jpg" alt="Motorola Nexus 6"></td>
			<td><img src="Motorolaslike/motox2.jpg" alt="Motorola Moto X2"></td>

		</tr>
		<tr>
			<th>Moto G</th>
			<th>Moto X</th>
			<th>Droid Ultra</th>
			<th>Razr D3</th>
			<th>Razr D1</th>
		</tr>
		<tr class="parni">
			<td><img src="Motorolaslike/motog.jpg" alt="Motorola Moto G"></td>
			<td><img src="Motorolaslike/motox.jpg" alt="Motorola Moto X"></td>
			<td><img src="Motorolaslike/droidultra.jpg" alt="Motorola Droid Ultra"></td>
			<td><img src="Motorolaslike/razrd3.jpg" alt="Motorola Razr D3"></td>
			<td><img src="Motorolaslike/razrd1.jpg" alt="Motorola Razr D1"></td>
		</tr>
		<tr>
			<th>Droid Razr HD</th>
			<th>Droid Razr M</th>
			<th>Droid Razr Maxx</th>
			<th>Razr V</th>
			<th>Defy</th>
		</tr>
		<tr>
			<td><img src="Motorolaslike/droidrazrhd.jpg" alt="Motorola Droid Razr HD"></td>
			<td><img src="Motorolaslike/droidrazrm.jpg" alt="Motorola Droid Razr M"></td>
			<td><img src="Motorolaslike/droidrazrmaxx.jpg" alt="Motorola Droid Razr Maxx"></td>
			<td><img src="Motorolaslike/razrv.jpg" alt="Motorola Razr V"></td>
			<td><img src="Motorolaslike/defy.jpg" alt="Motorola Defy"></td>
		</tr>
	</table>
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