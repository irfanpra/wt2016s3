<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
<TITLE>accessories</TITLE>
<SCRIPT src="../Skripte/datumi.js"></SCRIPT>
<SCRIPT src="../Skripte/filtriranjeNovosti.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="../accessoriesStil.css">

</head>

<body>
<?php
session_start();
	if( !empty($_POST['ime']) && !empty($_POST['sifra']))
	{
			$user=$_POST['ime'];
			$pass=$_POST['sifra'];
			$niz=file('../Csv/podaci.csv');
			$array=explode(',',$niz[0]);
			if($user==$array[0]  and md5($pass)==$array[1])
				{
					$_SESSION["isLogged"] = true;
					header("Location: novosti.php");
				}
	}

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

</ul>
</div>
<div id="OkvirForme">
<div id="NaslovForme">LOGIN
</div>
<div id="Forma">
<form name="forma" action="login.php" method="post">
<label>Username</label><br>
<input type="text" name="ime" id="ime" >
<br>
<label>Password</label><br>
<input type="password" name="sifra" id="sifra">
<br>
<br>
<input type="submit" class="button" value="Login">
</form>
</div>
</div>
</body>
</html>