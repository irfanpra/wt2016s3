<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>accessories</TITLE>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">
</head>

<body>
<?php
session_start();

	if($_SESSION["isLogged"] != true)
	{
		header("Location: login.php");
	}
  if(isset($_POST['logout']))
  {
    $_SESSION["isLogged"] = false;
    session_unset();
    header("Location: login.php");
  }
/*$var=file('../Csv/podaci.csv')*/
?>
<span id="accessoriesLogo">accessories</span>
<div id="nav">
<ul>
   <li><a class="active" href="accessories.php" target="_self">Novosti</a></li>
  <li><a href="proizvodi.php" target="_self">Proizvodi</a></li>
  <li><a href="kontakt.php" target="_self">Kontakt</a></li>
  <li><a href="oNama.php" target="_self">O nama</a></li>
  <li id="login"><a href="login.php" target="_self">Login</a></li>
  <li id="novosti"><a href="novosti.php" target="_self"></a></li>
 <li ><form action='proizvodi.php' method="POST"><input type="submit" class="logout" value="Logout" name="logout"></form></li></ul>
</div>

<table class="tabela">
<tr id="prviRed">
<td>Naziv</td>
<td>Slika</td>
<td>Cijena</td>
<td>Boja</td>
<td>Nesto</td>
</tr>
<tr class="neparan">
<td class="kombinacija1">Kombinacija 1</td>
<td class="slika"><img src="../Slike/set4.jpg" alt="set4"/></td>
<td>50$</td> 
<td>Crna</td>
<td>Ponedjeljak</td>
</tr>

<tr class="paran">
<td class="kombinacija1">Kombinacija 2</td>
<td class="slika"><img src="../Slike/set3.jpg" alt="set3"/></td>
<td>50$</td>
<td>Plava</td>
<td>Utorak</td>
</tr>
<tr class="neparan">
<td class="kombinacija1">Kombinacija 3</td>
<td class="slika"><img src="../Slike/set2.jpg" alt="set2"/></td>
<td>50$</td>
<td>Crvena</td>
<td>Srijeda</td>
</tr>

<tr class="paran">
<td class="kombinacija1">Kombinacija 4</td>
<td class="slika"><img src="../Slike/set4.jpg" alt="set4"/></td>
<td>50$</td>
<td>Crna</td>
<td>Cetvrtak</td>
</tr>
<tr class="neparan">
<td class="kombinacija1">Kombinacija 5</td>
<td class="slika"><img src="../Slike/set5.jpg" alt="set5"/></td>
<td>50$</td>
<td>Zelena</td>
<td>Petak</td>
</tr>

<tr class="paran">
<td class="kombinacija1">Kombinacija 6</td>
<td class="slika"><img src="../Slike/Rose.jpg" alt="Rose"/></td>
<td>50$</td>
<td>Roza</td>
<td>Subota</td>
</tr>
</table>
</body>
</html>