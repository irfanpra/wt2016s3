<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<script type="text/javascript" src="../js/validacija.js"></script>
	<title>UNSA - Kreiranje novosti</title>
</head>
<body>
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
			<li><a href="../index.php">Početna</a></li>
			<li><a href="../html/about.php">O Univerzitetu</a></li>
			<li><a href="../html/fakulteti.php">Članice</a></li>
			<li><a href="../html/contact.php">Kontakt</a></li>
			<li><a href="#" class="active">Kreiranje novosti</a></li>
			<li><a href='../index.php?out=1'>Log out</a></li>
		
		</ul>
	</nav>
	<div class="stranica">
		<aside>
			<a href="https://www.isss.ba/LoginPage/login.htm" target="_blank"><img src="../slike/isss.jpg" alt="isss"></a>
			<a href="http://www.spus.ba/" target="_blank"><img src="../slike/spus.png" alt="spus"></a>
			<a href="http://www.erasmus-unsa.ba/" target="_blank"><img src="../slike/erasmus.jpg" alt="erasmus"></a>
			<a href="http://www.student-centar.ba/" target="_blank"><img src="../slike/sc.jpg" alt="studentski centar"></a>
			<a href="http://www.hea.gov.ba/" target="_blank"><img src="../slike/hea.jpg" alt="hea"></a>
			<a href="http://www.sus.ba/" target="_blank"><img src="../slike/susbih.jpg" alt="sus"></a>
			<a href="http://www.anubih.ba/" target="_blank"><img src="../slike/anu.jpg" alt="Akademija nauka i umjetnosti BiH"></a> 
		</aside>
	<div class="content">
		<section>
		<form action="unos_novosti.php" method="post">
			<label for="naslov">Naslov: </label>
			<input type="text" id="naslov" name="naslov" onblur="elemTest('naslov')" onkeyup="elemTest('naslov')">
			<br>
			<label for="podnaslov">Podnaslov: </label>
			<textarea name="podnaslov" id="podnaslov"></textarea>
			<br>
			<label for="slika">Link slike: </label>
			<input type="text" id="slika" name="slika" onblur="elemTest('slika')" onkeyup="elemTest('slika')" >
			<br>
			<label for="tekst">Tekst novosti: </label>
			<textarea name="tekst" id="tekst" cols="50" rows="25" onblur="elemTest('tekst')" onkeyup="elemTest('tekst')"></textarea> 
			<br>
			<label for="kod">Kod države: </label>
			<input type="text" id="kod" name="kod" onkeyup="kodTelefonValidacija()">
			<br>
			<label for="brTel">Broj telefona: </label>
			<input type="text" id="brTel" name="brTel" onblur="kodTelefonValidacija()" onkeyup="brTelTest()">
			<br>
			<input type="submit" name="btnDodaj" id="btn" value="Sačuvaj novost" disabled="true">
		</form>

		<?php
		if(isset($_REQUEST['btnDodaj'])) {
			$datum = time();
			$naslov = htmlentities($_REQUEST['naslov'], ENT_QUOTES);
			$naslov = str_replace(",", "&#44;", $naslov);
			$podnaslov = "";
			if(isset($_REQUEST['podnaslov'])) {
				$podnaslov = htmlentities($_REQUEST['podnaslov'], ENT_QUOTES);
			}
			$podnaslov = str_replace(",", "&#44;", $podnaslov);
			$slika = htmlentities($_REQUEST['slika'], ENT_QUOTES);
			$slika = str_replace(",", "&#44;", $slika);
			$tekst = htmlentities($_REQUEST['tekst'], ENT_QUOTES);
			$tekst = str_replace(",", "&#44;", $tekst);
			if(empty($podnaslov)) $podnaslov = " ";
			
			file_put_contents("../novosti.csv",$datum.",".$naslov.",".$podnaslov.",".$slika.",".$tekst.",",FILE_APPEND);

		}
		?>
		</section>
	</div>
	</div>
	<footer>
		<p>Developed by Mirzet Brkić WT 2016</p>
	</footer>
</body>
</html>