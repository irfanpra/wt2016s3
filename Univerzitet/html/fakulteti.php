<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<title>UNSA - Clanice</title>
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
			<li><a href="#" class ="active">Članice</a></li>
			<li><a href="../html/contact.php">Kontakt</a></li>
			<?php 
			if(isset($_SESSION['username'])) {
			echo "<li><a href='../html/unos_novosti.php'>Kreiranje novosti</a></li>";
			echo "<li><a href='../index.php?out=1'>Log out</a></li>";
			} else 
				echo "<li><a href='../html/login.php'>Log in</a></li>";
			?>
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
			<table class="tabela">
				<caption>Fakulteti i akademije</caption>
				<tr>
					<th>Naziv</th>
					<th>Adresa</th>
					<th>Telefon</th>
					<th>e-mail</th>
					<th>Dekan</th>
				</tr>
				<tr>
					<td>Akademija likovnih umjetnosi</td>
					<td>Obala Maka Dizdara 3</td>
					<td>+387 33 210 530</td>
					<td>alu@alu.unsa.ba</td>
					<td>Prof. mr. Marina Finci</td>
				</tr>
				<tr>
					<td>Akademija scenskih umjetnosi</td>
					<td>Obala Kulina bana 11</td>
					<td>+387 33 215 277</td>
					<td>asu@asu.unsa.ba</td>
					<td>Prof. Pjer Žalica</td>
				</tr>
				<tr>
					<td>Arhitektonski fakultet</td>
					<td>Patriotske lige 30</td>
					<td>+387 33 226 534</td>
					<td>arh.f.sa@bih.net.ba</td>
					<td>Prof. mr. Mevludin Zečević</td>
				</tr>
				<tr>
					<td>Ekonomski fakultet</td>
					<td>Trg oslobođenja 1</td>
					<td>+387 33 275 900</td>
					<td>efsa@efsa.unsa.ba</td>
					<td>Prof. dr. Željko Šain</td>
				</tr>
				<tr>
					<td>Elektrotehnički fakultet</td>
					<td>Zmaja od Bosne bb (Kampus)</td>
					<td>+387 33 250 700</td>
					<td>etf@etf.unsa.ba</td>
					<td>Prof. dr. Samim Konjicija</td>
				</tr>
				<tr>
					<td>Fakultet političkih nauka</td>
					<td>Skenderija 72</td>
					<td>+387 33 203 562</td>
					<td>dekanat@fpn.unsa.ba</td>
					<td>Prof. dr. Šaćir Filandra</td>
				</tr>
				<tr>
					<td>---</td>
					<td>...</td>
					<td>---</td>
					<td>...</td>
					<td>---</td>
				</tr>
			</table>
			<table class="tabela">
				<caption>Naučni instituti</caption>
				<tr>
					<th>Naziv</th>
					<th>Adresa</th>
					<th>Telefon</th>
					<th>e-mail</th>
					<th>Direktor</th>
				</tr>
				<tr>
					<td>Institut za istraživanje zločina protiv čovječnosti i međunarodnog prava</td>
					<td>Halida Nazečića 4</td>
					<td>+387 33 56 13 50</td>
					<td>info@institut-genocid.unsa.ba</td>
					<td>Dr. Rasim Muratović</td>
				</tr>
				<tr>
					<td>Institut za istoriju</td>
					<td>Alipašina br. 9</td>
					<td>+387 33 20 93 64</td>
					<td>nauka@bih.net.ba</td>
					<td>Prof. dr. Husnija Kamberović</td>
				</tr>
				<tr>
					<td>Orijentalni institut</td>
					<td>Zmaja od Bosne bb</td>
					<td>+387 33 22 09 57</td>
					<td>ois@bih.net.ba</td>
					<td>Dr. Adnan Kadrić</td>
				</tr>
				<tr>
					<td>Institut za genetičko inženjerstvo i biotehnologiju</td>
					<td>Zmaja od Bosne br. 8 Kampus</td>
					<td>+387 33 22 09 26</td>
					<td>ingeb@ingeb.unsa.ba</td>
					<td>Prof. dr. Naris Pojskić</td>
				</tr>
				<tr>
					<td>Institut za jezik</td>
					<td>Hasana Kikića 12</td>
					<td>+387 33 20 01 17</td>
					<td>insjezik@bih.net.ba</td>
					<td>Dr. Alen Kalajdžija</td>
				</tr>	
			</table>
		</section>
	</div>
	</div>
	<footer>
		<p>Developed by Mirzet Brkić WT 2016</p>
	</footer>
</body>
</html>