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
 <li ><form action='oNama.php' method="POST"><input type="submit" class="logout" value="Logout" name="logout"></form></li>
</ul>
</div>
<div class="meni">
<ul class="Linkovi">
<li><a class="ruz" href="accessories.php" target="_blank">Otvori stranicu u novom tabu</a></li>
<li><a class="ruz" href="http://www.polyvore.com/cgi/home" target="_blank">Budi sam svoj kreator</a></li>
<li><a class="ruz" href="http://fashion.com/" target="_blank">Sve o modi</a></li>
<li><a class="ruz" href="http://www.color-hex.com/color-names.html" target="_blank">Odaberi boju za sebe</a></li>
</ul>
</div>

</body>
</html>