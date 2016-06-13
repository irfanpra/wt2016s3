<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Coveri</TITLE>
<link rel="stylesheet" type="text/css" href="../stil.css">
<META charset=utf-8>
</HEAD>
<BODY>
<div id="zaglavlje">
	<h1>Sound Art Studio</h1>
<div id="logo">
	<div id="kruzic"></div>
	<div id="linija"></div>
</div>
</div>
<?php
session_start();
?>
<a class="skip-main" href="#tabela" >Preskoči čitanje menija</a>
	<div id="meni">
		<ul>
		<li><a href="index.php">Naslovnica</a></li>
		<li><a href="omeni.php">O meni</a></li>
		<li><a href="Coveri.php">Coveri</a></li>
		<li><a href="#.php">Cjenovnik</a></li>
		<li><a href="Kontakt.php">Kontakt</a></li>
		<li><a href="Login.php">Login</a></li>
		</ul>
	</div>

	<table id="tabela">
	<tr class="prvi">
		<th>Usluga</th>
		<th>Količina</th>
		<th>Trajanje snimanja</th>
		<th>Dodatno</th>
		<th>Cijena</th>
	</tr>

	<tr class="paran">
		<td>Cover</td>
		<td>1</td>
		<td>do 10 dana</td>
		<td>Back Vokali</td>
		<td>200KM</td>
	</tr>

	<tr class="neparan">
		<td>Pjesma</td>
		<td>1</td>
		<td>do 10 dana</td>
		<td>Back Vokali</td>
		<td>500-800KM</td>
	</tr>

	<tr class="paran">
		<td>Aranžmani</td>
		<td>1</td>
		<td>do 30 dana</td>
		<td>-</td>
		<td>400KM</td>
	</tr>

	<tr class="neparan">
		<td>Reklame</td>
		<td>1</td>
		<td>do 20 dana</td>
		<td>-</td>
		<td>400KM</td>
	</tr>

	</table>

	</BODY>
</HTML>
