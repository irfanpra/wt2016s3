<?php
session_start();
?>
<!Doctype html>

<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="linkStil.css" media="all">
<title>Linkovi</title>

</head>

<body>

<header>
	
	<div id="naslov">
	<h1>Mijenjaj.ba</h1>
	
	</div>
	<div id="oklop">
	<div class="okvir">

		<div class="krug1"></div>
		<div class="lijevi"></div>
		<div class="l"></div>

		<div class="desni"></div>
		<div class="d"></div>
		<div class="krug2"></div>
	
	</div>
	</div>
	<div id="login">
	<?php
		
			echo "<br>";
			if(isset($_SESSION["username"]))
			{
				echo "Logirani ste kao: ".$_SESSION["username"];
			}
			else
			{
				echo "Niste logirani!";
			}
	?>
	</div>
	
	<nav>
		<ul>
			<li><a href="Naslovna.php">Naslovna</a></li>
			<li><a href="Kontakt.php">Kontakt</a></li>
			<li><a href="Tabela.php">Tabela</a></li>
			<li><a href="Link.php">Linkovi</a></li>
		</ul>
	
	</nav>
	
</header>

<section id="link">
	
	<ul>
		<li>
			<a href="http://www.google.ba" target="_blank">Google</a>
		</li>
		<li>
			<a href="http://www.info.ba" target="_blank">Info.ba</a>
		</li>
		<li>
			<a href="http://www.klix.ba" target="_blank">klix</a>
		</li>
		<li>
			<a href="http://www.wikipedia.com" target="_blank">wikipedia</a>
		</li>
		<li>
			<a href="http://www.etf.unsa.ba" target="_blank">ETF</a>
		</li>
		<li>
			<a href="http://www.bug.hr" target="_blank">BUG.hr</a>
		</li>
	</ul>
	
</section>


<footer>
	
	<p>Copyright &copy; Elvedin Sinanović 2015/2016.</p>
</footer>

</body>

</html>