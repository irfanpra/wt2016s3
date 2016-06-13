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

<div class="floating-box"><a href="suplementacija.html">Leucin
<h6>Leucin (Leu, L) je esencijalna (ljudsko tijelo je ne može sintetizirati) aminokiselina. Leucin je hidrofobna aminokiselina i izomer je izoleucina...</h6>
<br>
<img src="leucin.jpg" alt="leucin">
</a>
</div>

<div class="floating-box"><a href="trening.html">Trening
<h6>Mišićna vlakna koja su nosioci mišićne snage su brzookidajuća vlakna. Budući da se vlakna kod treninga s opterećenjem regrutiraju po veličini... </h6>
<br>
<img src="novos1.jpg" alt="novosti">
</a>
</div>

<div class="floating-box"> <a href="ishrana.html">Doručak šampiona
<h6>Ako ne znate ko je Kurt Vonegat ili ste za njega čuli ali niste pročitali nijedan njegov roman, Doručak šampiona može da posluži kao odlična...</h6>
<br>
<img src="dorucak1.jpg" alt="dorucak1">
</a>
</div>

<div class="floating-box"> <a href="ishrana.html">BCAA
<h6>BCAA (branched-chain amino acids ili aminokiseline razgranatog lanca) su trio fantasticus kojeg čine aminokiseline leucin, izoleucin i valin...</h6>
<br>
<img src="bcaa.jpg" alt="bcaa">
</a>
</div>

<div class="floating-box">Neobjavljena novost</div>


</section>
</body>
</html>