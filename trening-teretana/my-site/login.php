<?php
	session_start();
	include 'stranice.php';
	include 'funkcije.php';
	
	$neispravniPodaci = false;
	
	if(provjeriDaLiJePrijavljen())
		preusmjeri($dobroDosli);
	
	if(daLiSuPostavljeniUserNamePass()){		
		if(provjeriUserNamePass()){
			preusmjeri($dobroDosli);
		}
		else{
			$neispravniPodaci = true;
		}
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

<header id="he"><div id="brend">fitness trening teretana</div>
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

			
			<div id="pozadinaLogin">
	<br>
	<h2 class="pomjeri">Login</h2>
	<br>
	<form action="login.php" method="POST">
			
			<label for="username">Username:</label>
			<input type="text" name="username" />
			<br/>
			
			<label for="password">Password:</label>
			<input type="password" name="password" />
			
			<input class="pomjeriBtn" type="submit" name="submit" value="Prijava" />
			<p><?php if($neispravniPodaci) echo "Pogresan Username ili password, pokusajte ponovo" ?> </p>
			
			</form>

	</div>
</section>

</body>
</html>