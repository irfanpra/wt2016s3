<?php
	session_start();
	include 'stranice.php';
	include 'funkcije.php';
	$prijavljeniKorisnik = false;
	
	if(provjeriDaLiJePrijavljen())
	{
		//echo 'korisnik je prijavljen';
		$prijavljeniKorisnik = true;
		$username = $_SESSION['username'];
		$imeKorisnika = dajImeKorisnika($username);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML5, CSS3">
<link rel="stylesheet" href="main1.css">
<link rel="stylesheet" href="logo.css">
<title>HOME</title>
</head>
<body>

<header id="he"><div id="brend">
	<p>Fitness trening teretana</p>
</div>
	<div id="loginTip">
	<?php 
							if(!$prijavljeniKorisnik)
							{
								echo " &nbsp&nbsp&#x267B&nbsp<a href='" . $login . "'> Login!</a>";
							}
							else
							{
								echo "Korisnik: " . $imeKorisnika . " &nbsp&nbsp&#x267B&nbsp  <a href='" . $logout . "'>Logout!</a>";
							}
				
				?>
	</div>
<div class="teg">
  <div class="osigurac"></div
  ><div class="ploca2"></div
  ><div class="ploca1"></div
  ><div class="sipka"></div
  ><div class="ploca1"></div
  ><div class="ploca2"></div
  ><div class="osigurac"></div>
</div>
</header>

<nav class="menu">
	<div id="mainTraka">
	<ul>
		<li><a href="<?php echo $homepage;?>">Home</a></li>
		<li><a href="<?php echo $trening;?>">Trening</a></li>
		<li><a href="<?php echo $ishrana;?>">Ishrana</a></li>
		<li><a href="<?php echo $suplementacija; ?>">Suplementacija</a></li>
		<li><a href="<?php echo $kontakt;?>">Kontak</a></li>
		
	</ul>
	</div>
</nav>
	<section>
	<div id="pozadina">
	<br>
	<h2 class="pomjeri">kontakt</h2>
	<br>
	<form class="form">
		<p class="ime">
			<label for="ime">Ime</label><br>
			<input type="text" name="ime" id="ime" placeholder="npr. Jasmin">
			
			</p>
			
			<p class="prezime">
			<label for="prezime">Prezime</label><br>
			<input type="text" name="prezime" id="prezime" placeholder="npr. Muslimovic">
			
			</p>
			
			<p class="email">
			<label for="email">Email</label><br>
			<input type="text" name="email" id="email" placeholder="npr.mail@wt.ri.etf.unsa.ba">
			
			</p>
			
			<p class="text">
			<label for="email">Poruka</label><br>
			<textarea name="text" placeholder="poruka..."></textarea>
			</p>
			<p class="submit">
				<input type="submit" value="pošalji">
			</p>
	</form>
	</div>
	</section>

	
</body>
</html>