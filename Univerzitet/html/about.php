<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<title>UNSA - O Univerzitetu</title>
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
			<li><a href="#" class="active">O Univerzitetu</a></li>
			<li><a href="../html/fakulteti.php">Članice</a></li>
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
		<p>Sarajevo je upisano na mapu akademskih centara u ovom dijelu Evrope Gazi Husrevbegovom vakufnamom iz 1537. godine. Gazi Husrevbegova biblioteka, u svojstvu pridružene članice, najstarija je institucija u okviru Univerziteta u Sarajevu. Nakon zamjene osmanske uprave austro-ugarskom, osnovane su Šerijatska sudačka škola 1887. godine, Zemaljski muzej 1888. godine, Vrhbosanska katolička bogoslovija 1890. godine. Sarajevsko-reljevska pravoslavna bogoslovija je 1892. godine uzdignuta na stepen visoke škole. Zemaljski muzej je danas pridružena, a Katolički bogoslovni fakultet punopravna članica Univerziteta u Sarajevu.</p>
		<p>U Federativnoj Narodnoj Republici Jugoslaviji, godinu nakon Drugog svjetskog rata, u Sarajevu su počeli sa radom i Viša pedagoška škola i Biološki institut. Nakon što je, poslije Medicinskog, Pravnog i Poljoprivredno-šumarskog, otvoren i Tehnički fakultet, Skupština Narodne Republike Bosne i Hercegovine je 1949. godine donijela Zakon o Univerzitetu kojim se osniva Univerzitet u Sarajevu. Filozofski fakultet (sa prirodno-matematičkim odsjekom) i Veterinarski fakultet postaju njegovim novim članicama 1950. god. U narednim decenijama uslijedio je period dinamičkog rasta.</p>
		<p>Tokom agresije na Bosnu i Hercegovinu i opsade Sarajeva (05.04.1992.–29.02.1996.) Univerzitetu su nanesene velike ljudske i materijalne štete kroz stradanja, raseljavanje i odliv nastavnog kadra, fizičku devastaciju zgrada i opreme Univerziteta. Nastavljajući sa radom i čuvajući civilizacijske standarde u najtežim uslovima u kojim se našla jedna evropska visokoobrazovna institucija u drugoj polovici 20. stoljeća, Univerzitet je stekao široko uvažavanje međunarodne akademske zajednice.</p>
		<p>Zajedno sa ostalim univerzitetima u Bosni i Hercegovini, Univerzitet u Sarajevu je 1996. godine pristupio evropskim programima podrške reformi visokog obrazovanja. Taj period je obilježen djelovanjem Univerziteta na saniranju posljedica ratnih razaranja, stvaranju ambijenta za nastavak stabilnog i kontinuiranog razvoja i potpunije uključivanje Univerziteta u savremene evropske i svjetske akademske tokove.</p>
		<p>Trenutno su objekti većine članica i pridruženih članica Univerziteta disperzirani na prostoru grada Sarajeva, dok se u Kampusu Univerziteta, smještenom na lokalitetu bivše kasarne „Maršal Tito“, u ovom času nalazi grupa od pet fakulteta i dva instituta, te dodatni obrazovni i drugi studentski sadržaji. Urađeni su glavni projekti i pribavljene urbanističke saglasnosti za dio objekata predviđenih prvom fazom realizacije Master plana Kampusa. Master plan je dobio Campus Planing Award, u Bostonu, 2004. godine.</p>
		<h5>Pridružene članice UNSA:</h5>
		
		<ul class="linkovi">
			<li><a href="http://fu.unsa.ba/" target="_blank"><img src="../slike/link.png" alt="link">Fakultet za upravu</a></li>
			<li><a href="http://www.nub.ba/" target="_blank"><img src="../slike/link.png" alt="link">Nacionalna i univerzitetska biblioteka Bosne i Hercegovine</a></li>
			<li><a href="http://www.zemaljskimuzej.ba/" target="_blank"><img src="../slike/link.png" alt="link">Zemaljski muzej Bosne i Hercegovine</a>
			<li><a href="http://www.ghb.ba/" target="_blank"><img src="../slike/link.png" alt="link">Gazi Husrev-begova biblioteka</a></li>
		</ul>

		</section>
	</div>
	</div>
	<footer>
		<p>Developed by Mirzet Brkić WT 2016</p>
	</footer>
</body>
</html>