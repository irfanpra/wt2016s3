<?php
session_start();
	if(isset($_REQUEST['out'])) {
		if($_REQUEST['out'] == 1)
			echo '<script> alert("Goodbye: " + "'.$_SESSION['username'].'")</script>'; 
			session_unset();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/stil.css">
	<script type="text/javascript" src="js/skripta.js"></script>
	<title>UNSA - Početna</title>
</head>
<body onload="popuniNovosti()">
<?php 
	
	$csv = file_get_contents('novosti.csv');
	$json = str_replace(",", ",,", $csv);
	echo "<div id='data'>".$json."</div>";
?>
	<header>
		<div id="logo">
			<h5 id="uni">
				<span class="char1">U</span>
				<span class="char2">N</span>
				<span class="char3">I</span>
				<span class="char4">V</span>
				<span class="char5">E</span>
				<span class="char6">R</span>
				<span class="char7">S</span>
				<span class="char8">I</span>
				<span class="char9">T</span>
				<span class="char10">A</span>
				<span class="char11">S</span>
			</h5>
		<div id="krug"> <h2>UNSA</h2></div>
			<h5 id="stud">
				<span class="ch1">S</span>
				<span class="ch2">T</span>
				<span class="ch3">U</span>
				<span class="ch4">D</span>
				<span class="ch5">I</span>
				<span class="ch6">O</span>
				<span class="ch7">R</span>
				<span class="ch8">U</span>
				<span class="ch9">M</span>
				<span class="ch11">S</span>
				<span class="ch12">A</span>
				<span class="ch13">R</span>
				<span class="ch14">A</span>
				<span class="ch15">I</span>
				<span class="ch16">E</span>
				<span class="ch17">V</span>
				<span class="ch18">O</span>
				<span class="ch19">E</span>
				<span class="ch20">N</span>
				<span class="ch21">S</span>
				<span class="ch22">I</span>
				<span class="ch23">S</span>
			</h5>
		</div>

		<h1>Univerzitet u Sarajevu</h1>
		<!--<h3>University of Sarajevo</h3>-->
		<!--<img src="unsa_logo.jpg" alt="unsa_logo">-->	
	</header>
	
	<nav>
		<ul class="menu">
			<li><a href="#" class ="active">Početna</a></li>
			<li><a href="html/about.php">O Univerzitetu</a></li>
			<li><a href="html/fakulteti.php">Članice</a></li>
			<li><a href="html/contact.php">Kontakt</a></li>
			<?php 
			if(isset($_SESSION['username'])) {
			echo "<li><a href='html/unos_novosti.php'>Kreiranje novosti</a></li>";
			echo "<li><a href='index.php?out=1'>Log out</a></li>";
			} else 
				echo "<li><a href='html/login.php'>Log in</a></li>";
			?>
			
		</ul>
	</nav>

	<div class="stranica">
		<aside>
			<a href="https://www.isss.ba/LoginPage/login.htm" target="_blank"><img src="slike/isss.jpg" alt="isss"></a>
			<a href="http://www.spus.ba/" target="_blank"><img src="slike/spus.png" alt="spus"></a>
			<a href="http://www.erasmus-unsa.ba/" target="_blank"><img src="slike/erasmus.jpg" alt="erasmus"></a>
			<a href="http://www.student-centar.ba/" target="_blank"><img src="slike/sc.jpg" alt="studentski centar"></a>
			<a href="http://www.hea.gov.ba/" target="_blank"><img src="slike/hea.jpg" alt="hea"></a>
			<a href="http://www.sus.ba/" target="_blank"><img src="slike/susbih.jpg" alt="sus"></a>
			<a href="http://www.anubih.ba/" target="_blank"><img src="slike/anu.jpg" alt="Akademija nauka i umjetnosti BiH"></a> 
		</aside>
	<div class="content">
		<section>
			<span id="datumNovosti"></span>
			<h1 id="naslovVijesti"></h1>
			<h4 id="podnaslovVijesti"></h4>
			<img id="slikaVijesti" class="vijest-slika" src="../slike/v1velika.jpg" alt="slika vijesti">
			<div id="paragrafi">
			</div>
		</section>
		<div id="odabirNovosti">
			<ul class="menu">
				<li><a href="#" onclick="filtrirajNovosti('danas'); return false;">Današnje novosti</a></li>
				<li><a href="#" onclick="filtrirajNovosti('sedmica'); return false;">Sedmične novosti</a></li>
				<li><a href="#" onclick="filtrirajNovosti('mjesec'); return false;">Mjesečne novosti</a></li>
				<li><a href="#" onclick="filtrirajNovosti('sve'); return false;">Sve novosti</a></li>
				<li id="kraj"><a href="#" onclick="sortirajNovosti('datum'); return false;">Datum</a></li>
				<li><a href="#" onclick="sortirajNovosti('abeceda'); return false;">Abecedno</a></li>
			</ul>
		</div>
		<article id="maleNovosti">
			
		</article>
		</div>
	</div>
	<footer>
		<p>Developed by Mirzet Brkić WT 2016</p>
	</footer>
</body>
</html>