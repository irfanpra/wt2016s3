<?php
	session_start();
	include 'stranice.php';
	include 'funkcije.php';
	$prijavljeniKorisnik = false;
	
	if(provjeriDaLiJePrijavljen())
	{
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

<header id="he"><div id="brend">fitness trening teretana

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



<section>
<div id="dobroDosaoTip">
<h1>dobro dosli <?php echo "prijavljeni ste kao ".$imeKorisnika?> </h1>

<?php 
  header( "refresh:4; url=index.php" ); 
?>
</div>
</section>
</body>
</html>