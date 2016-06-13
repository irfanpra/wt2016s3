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
<SCRIPT src="../Skripte/validacija.js"></SCRIPT>
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
	session_destroy();
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
 <li ><form action='kontakt.php' method="POST"><input type="submit" class="logout" value="Logout" name="logout"></form></li></ul>
</div>
<div id="OkvirForme">
<div id="NaslovForme">Kontaktiraj nas
</div>
<div id="Forma">
<form name="forma">
<label>Email</label><input id="idEmail" type="email" name="email" placeholder="email" onkeyup="ValidirajEmail(this)" required>
<label>Broj kreacija</label><br><input type="number" name="brojKreacija" placeholder="broj kreacija" min="1" max="4" id="idKreacije" onkeyup="ValidiraBrojKreacija(this)" required>
<label>Odaberi boju</label><br><input type="color" name="favcolor" required>
<br>
<input type="submit" class="button" value="Posalji" onclick="Provjeri(this)">
</form>
</div>
</div>
<div class="kontaktDiv">
Odaberite boju i broj kreacija kojih zelite i mi cemo vam poslati ideje !!!
</div>

</body>
</html>