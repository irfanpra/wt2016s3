 <!DOCTYPE html>
  <?php
 session_start();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cafe pekara</title>
	<link rel="stylesheet" type="text/css" href="stil.css">
	<link href='https://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>

</head>
<body>




<div id="logo">

	<div id="baza">

		<div class="kockice" id="desna-kockica"></div>
		<div class="kockice" id="lijeva-kockica"></div>
	</div>

	<div id="sredina">
		<div id="desno-krilo"></div>
		<div id="lijevo-krilo"></div>
		<div id="srednja-elipsa">
			<div id="poklopac">
				<div id="linija"></div>
			</div>
		</div>

		<div id="razdvojnica"></div>
        
		<div id="ruckica">
			<div id="linijice-gornja"></div>
			<div id="linijice-donja"></div>

		</div>
	</div>
    
    


</div>


<nav class="opcija">
<a href="index.php">Naslovna</a>
<a href="tabela.php">Tabelarni podaci</a>
<a href="link.php">Lista linkova</a>
<a href="forma.php">Forma</a>
<?php
if(isset($_SESSION['korisnik'])){
	print "<a href='dodavanje.php'>Dodaj novost</a>";
	print "<a href='login.php?logout=1'>Odjava</a>";
}
else{
	print "<a href='login.php'>Prijava</a>";
}
?>
</nav>

<div id="table-div">
<h1 id="Podnaslov"> Novi proizvodi</h1>
<table class="tabela">
   <tr>
   		<th>Naziv prizvoda</th>
		<th>Vrsta</th>
		<th>Dijabeticari</th>
		<th>Energetska vrijednost</th>
		<th>Cijena</th>
   </tr>
	<tr>
		<td>Macarons</td>
		<td>Kolaci</td>
		<td>Ne</td>
		<td>300 kcal</td>
		<td>1,00 KM</td>
	</tr>
	<tr>
		
		<td>Pastetica s tunjevinom</td>
		<td>Peciva</td>
		<td>Da</td>
		<td>323 kcal</td>
		<td>1,50 KM</td>
	</tr>
	<tr>
		
		<td>Gurmanska kahva</td>
		<td>Napici</td>
		<td>Ne</td>
		<td>400 kcal</td>
		<td>4,50 KM</td>
	</tr>
	<tr>
	
		<td>Casprese salata</td>
		<td>Salate</td>
		<td>Da</td>
		<td>150 kcal</td>
		<td>5,50 KM</td>
	</tr>
</table>

</div>
<div id="podnozje"><p>Copyright &copy; Web tehnologije 2015/2016.</p></div>


</body>
</html>