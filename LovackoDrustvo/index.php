<!DOCTYPE HTML>

<HTML>
<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">

<script type="text/javascript" src="drugi_zadatak.js"></script>
<script type="text/javascript" src="prvi_zadatak.js"></script>

</HEAD>

<BODY>

<header>


<h1 id="naslov"> LD "Kaćunski zec" Kaćuni-Busovača </h1>


<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  
</div>
</header>

<nav class="meni">
<ul>
	<li><a href="index.php">Početna</a></li>
	<li><a href="Lov.php">Lov</a></li>
	<li><a href="O_nama.php">O nama</a></li>
	<li><a href="Korisni_linkovi.php">Korisni linkovi</a></li>
	<li><a href="Kontakt.php">Kontakt</a></li>
	<li><a href="Login.php">Login</a></li>
	<?php
	date_default_timezone_set("Europe/Sarajevo");
	session_start();
	if(isset($_SESSION['login'])){
	print "<li><a href='UnosNovosti.php'>Dodaj novost</a></li>";
	}
	?>
	
</ul>

</nav>

<section>


<select id="novosti" onchange="filtriraj();">
    <option value="A">Sve novosti</option>
    <option value="D">Današnje novosti</option>
    <option value="S">Novosti ove sedmice</option>
	<option value="M">Novosti ovog mjeseca</option>
</select>
<br>
<br>

<form action='index.php' method="POST">
<div class="sort">
<input type='submit' name='sortAbeceda' class='sortiraj' value='Sortiraj po abecedi' />
</div>
</form><br><br>
				
				
<div id="novostiSection" class="novostParent">

<!--
<div class="novostChild">
<p><time class="objavljeno" datetime="2016-05-21T10:23:00"></time></p>

<h4>POZIV ZA PREDSJEDNIKE LOVAČKIH ORGANIZACIJA</h4>
<img src="slike/slobih.jpg" alt="Slika_1" >
<p>Federalno ministarstvo, poljoprivrede, vodoprivrede i šumarstva i Savez lovačkih organizacija u BiH  21. aprila 2016. godine organizira Seminar za stručnu edukaciju na temu: Nromativnog  regulisanja rada  i   djelovanja lovačkih udruženja u skladu sa  lovnom legislativom. Seminar će se održati
u hotelu Park Vogošča, Gornja Jošanica II br. </p>

</div>

<div class="novostChild">
<p><time class="objavljeno" datetime="2016-05-01T16:59:00"></time></p>

<h4>INICIJATIVNA GRUPA ZA FORMIRANJE I REGISTRACIJU BiH PASMINSKOG KLUBA</h4>
<img src="slike/njemacki-pticar.jpg" alt="Slika_3" >
<p>Drage kolege uzgajivaci, vlasnici i ljubitelji Njemackih kratkodlakih pticara, Inicijativna grupa za formiranje i registraciju BiH pasminskog kluba, ove pasmine, pa pozivamo sve zainteresirane iz svih dijelova BiH da nam se jave i da zajednicki to ostvarimo. Sto bi bilo veoma korisno za napredak u uzgoju ove pasmine u BiH, u svakom pogledu. Novoformirani Klub bi bio član KS u BiH, te član Internacionalne Asociacije za ovu pasminu.Najsrdacniji pozdrav i javite se na sledeće mailove nesos@gradiska.com  i bihlov@gmail.com  </p>

</div>


<div class="novostChild">
<p><time class="objavljeno" datetime="2016-05-18T22:55:00"></time></p>


<h4>POSAVSKI GONIĆ</h4>
<img src="slike/posavac.jpg" alt="Slika_5" >
<p>Visine je 46 – 58 cm, dužina je veća od visine za 11-13% cm. Obim grudi veći je za oko 10 cm od visine. Snažan i dobro građen. Boja pšenično-žuta do rđasto-žuta u svim nijansama sa bijelom lisom ogrlicom, bijelim flekama na prsima, šapama i repu. Dlaka kratka 2-4 cm, gusta, tvrda, a po butinama, repu i trbuhu nešto duža u obliku metlice.
 </p>
</div>



<div class="novostChild">
<p><time class="objavljeno" datetime="2016-04-03T10:22:00"></time></p>

<h4>KUNDACI - SUAD SALIHOVIĆ</h4>
<img src="slike/kundak.jpg" alt="Slika_4" >
<p>
Kundak je obilježje svake puške pa samim tim i vlasnika, kvalitetno i lijepo urađenih kundaka. Proizvođaći oružja uglavnom većih vrijednosti nažalost slabo pridaju značaj kundaku kao sastavnom djelu oružja, kako u tehničkom tako i u estetskom smislu pa se mnogi lovci odlučuju da svoje čelićne ljubimce upakuju u što kvalitetnije i ljepše urađen kundak. Ovom prilikom predstavljamo Vam kundake ručne izrade, rađene u Bosni i Hercegovini. Tađnije u gradu Jajcu kod majstora Suada Salihovića. Svaki kundak je unikatan i rucne je  izrade. Osnovni standardi kundaka su ispostovani.
</p>

</div>



<div class="novostChild">
<p><time class="objavljeno" datetime="2015-05-10T22:55:00"></time></p>


<h4>VLADA IZDALA OBAVIJESTI O ZAŠTITI LOVIŠTA</h4>
<img src="slike/medobrundo.jpg" alt="Slika_2" >
<p>Ministarstvo poljoprivrede, vodoprivrede i šumarstva Hercegbosanske županije je izdalo informaciju za sve korisnike lovišta, koji gospodare lovištima na području te županije da su za vrijeme trajanja prirodne nesreće, koju je proglasila Vlada dužni poduzimati odgovarajuće mjere iz Zakona o lovstvu FBiH, stoji u priopćenju Vlade Hercegbosanske županije.
Na podrućju HBŽ-a divljać je zabranjeno uznemiravati i loviti u vrijeme kada je
 na prostoru na kome je divljać ugrožena poplavom, snijegom, požarom, poledicom i drugim prirodnim nesrećama.
 </p>
</div>

<div class="novostChild">
<p><time class="objavljeno" datetime="2016-03-20T22:55:00"></time></p>


<h4>BARAK</h4>
<img src="slike/barak.jpg" alt="Slika_2" >
<p>Bosanski oštrodlaki gonić – barak: visina je 46-56 cm, dužina je do 10% veća od visine. Snažan i mišićav, srednjeg rasta, osnovna boja prljavo-siva. Dozvoljena dvobojnost i trobojnost. Crna i braun boja je isključena. Dlaka tvrda i oštra dužine do 10 cm, bez kovrdža.
 </p>
</div>


<div class="novostChild">
<p><time class="objavljeno" datetime="2011-05-21T04:55:00"></time></p>


<h4>PRVENSTVO ČLANICA LSHZHB U GAĐANJU GLINENIH GOLUBOVA</h4>
<img src="slike/kresevo1.jpg" alt="Slika_7" >
<p>Na streljani Vaganj, u blizini Kreševa, 6. kolovoza 2011. svoje je umijeće u gađanju glinenih golubova pokazalo četrdeset pet strijelaca, odnosno dvanaest ekipa. U ekipnoj konkurenciji, najbolji su bili strijelci LD „Mosor“ iz Širokog Brijega, a Zoran Mandić, član toga lovačkog društva, bio je najbolji u pojedinačnoj konkurenciji.  Na ovom su prvenstvu sudjelovali strijelci iz sljedećih lovačkih udruga: LU „Sava“ Orašje, LU „Kuna“ Domaljevac, LD „Fazan“ Odžak,  LD „Lještarka“ Kiseljak, LO „Vitez“ Vitez, LD „Tetrijeb“ Kreševo, LD „Zec“ Busovača, LD „Tetrijeb“ Kupres, LD „Mosor“ Široki Brijeg, LD „Jarebica“ Mostar, LD „Galeb“ Čapljina i LU „Jadran“ Neum.  Domaćin natjecanja bilo je LD „Tetrijeb“ iz Kreševa, vodeće društvo u ovom dijelu Središnje Bosne po tradiciji i aktivnostima vezanim za lovno streljaštvo.
 </p>
</div>


<div class="novostChild">
<p><time class="objavljeno" datetime="2016-05-21T06:55:00"></time></p>


<h4>USPJEŠNO ZAVRŠEN SEMINAR ZA PREDSJEDNIKE I SEKRETARE U LOVAČKIM ORGANIZACIJAMA ČLANICAMA SLOuBiH</h4>
<img src="slike/seminar2.jpg" alt="Slika_7" >
<p>Uz učešće 75 predsjednika i sekretara iz 48 lovačkih organizacija, u hotelu „Park“ u Vogošći uspješno je proveden Seminar za predsjednike i sekretare lovačkih organizacija, jednih, kako je ovdje istaknuto od glavnih nosilaca lovnog menadžmenta.
Okupljanjem učesnika, te pozdravnim riječima dobrodošlice predsjednika SLOuBiH Salema Alihodžića, radni dio seminara počeo je  u 10.30 sati prema programu i satnici seminara, uz predstavljanje predavača i tema:
• Prof. Dr. Avdo Sofradžija; „ Lovac i lovstvo u BiH 15 godina nakon rata“.
• Prof. Dr. Mersudin Avdibegović; „Međunarodni CITES propisi i obaveze lovačkih organizacija u njihovoj provedbi“.
• Dipl.Ecc. Muhamed Žunić; „Uloga i zadaci menadžmenta u lovstvu“
• Dipl. Ing. Šum Salema Alihodžić i Dipl. ing. šum. Kemal Starogorčić zajednička tema “Utvrđivanja vrijednosti lovišta po zakonom propisanim kriterijima“.
 </p>
</div>

-->
<!--
<div class="novostChild">
<p><time class="objavljeno" datetime="2016-04-03T12:55:00"></time></p>


<h4>JOŠ JEDAN ULTIMATUIM FEDERALNOG LOVNOG INSPEKTORA</h4>
<img src="slike/karta.jpg" alt="Slika_7" >
<p>Ovaj članak nastao je kao reakcija jedne od lovačkih udruga na dopis Federalne Uprave za inspekcijske poslove broj 13-26-00001/2011-1306P od 28. 4. 2011. godine. U potpisu dopisa je Glavni federalni inspektor za šumarstvo i lovstvo, Muhamed Hodžić, dipl. ing. šumarstva. U dopisu inspektor upozorava županijska tijela uprave mjerodavna za lovstvo, saveze lovačkih organizacija BiH i Tuzlanskog kantona, Lovački savez Herceg Bosne i lovačke udruge na području Federacije BiH na obveznost primjene članka 75. Zakona  o lovstvu (u daljnjem tekstu: Zakon). Mjerodavni županijski ministri još su jedan ultimatum lovnog inspektora o formiranju profesionalne lovočuvarske službe prihvatili „zdravo za gotovo“, te lovačke udruge izvijestili da neće dati suglasnost na godišnji plan gospodarenja udrugama koje nemaju profesionalno uposlene lovočuvare. Zanimljivo je da se nitko od mjerodavnih nije oglasio i kvalitetno reagirao na ovu upozorbu.
 </p>
</div>

<div class="novostChild">
<p><time class="objavljeno" datetime="2016-05-20T12:55:00"></time></p>

<h4>PUŠTANJE POLJSKE JREBICE - REPOPULACIJA</h4>
<img src="slike/poljska_jarebica.jpg" alt="Slika_7" >
<p>Danas je naš moderator i aktivni član našeg foruma  kolega "seter" napravio jedan zaista divljenja vrijedan gest. Već duži period na umi mu je bila ideja da kupi matično jato poljske jarebice i obogati lovište gdje lovi. "Prelijepo je kada upecaš ribu a onda je pustiš ali još je ljepše kad pustiš divljač u lovište! Uživao sam. Obezbijedio sam lovu i u Posušju kupio matično jato (20 parova) poljske jarebice. Poljka je u fantastičnoj kondiciji, formirani parovi, nose jaja. A pravi divljaci . Od prošle godine pripremamo teren, malo smo poradili na predatorima, odabrali lokaciju sa polikulturama (smjenjuju se velike parcele djeteline i kukuruza, te veliki broj malih parcelica, međa... Vode u izobilju!"  Ovako to rade članovi portala BiH-LOV.COM  i mi se od srca zahvaljujemo u ime svih onih kojih će ove poljske ljepotice učiniti sretnim kad  ih se sretne.
 </p>
</div>

<div class="novostChild">
<p><time class="objavljeno" datetime="2014-03-23T12:55:00"></time></p>

<h4>ČAGALJ NA PROSTORIMA SREDNJE BOSNE</h4>
<img src="slike/cagalj.jpg" alt="Slika_7" >
<p>Čagalj spada u Canidae (pse), prema veličini je između vuka i lisice, a negdje ga zovu i - zlatni vuk. Dužina ukupna mu je oko 100 cm, visine je oko 50 cm, rep je dug oko 30 cm, a teži od 10 do 15 kilograma. Dlaka mu je sivkasto smeđa, što ovisi od sredine i područja na kojem obitava.
Pari se u februaru i martu. Ženka nosi oko 63 dana. Na svijet donosi od 3 do 8 štenadi, koja su dvije sedmice slijepa.   Životni vijek mu je oko 14 godina. Poznato je da ga je ranije bilo u priobalju i poluotocima na Jadranskom moru. U istočnoj Srbiji je redovna vrsta divljači, u zadnje vrijeme se odstreljuje u Vojvodini gdje čini velike štete na plemenitoj i zaštićenoj divljači. Prema pisanju stručne štampe, posebno namjenjene lovcima, duž granice sa Hrvatskom od Brčkog preko Krajine pa sve do najjužnijih djelova Hecegovine zabilježeni su i evidentirani odstrjeli čaglja. Nedavno je odstrijeljen na području Doboja.
 </p>
</div>

<div class="novostChild">
<p><time class="objavljeno" datetime="2016-04-23T12:55:00"></time></p>

<h4>LOVCI NAJVIŠE TRAŽE FAZANE</h4>
<img src="slike/omer.jpg" alt="Slika_7" >
<p>Dvije i po decenije Omer Salić, lovac iz Sjenine kod Doboja bavi se prepariranjem životinja i u svojoj kolekciji ima zanimljive trofeje. Prva životinja koju je preparirao bio je pijetao džijudžan, a jastreb, lisica, zec, kuna, fazan samo su neke od životinja koje je radio do sada.Najviše posla, kaže Salić, ima na dlakavim trofejima poput srndaća, divlje svinje ili vuka, a najčešće po želji lovaca preparira fazane. Da bi fazan imao što prirodniji izgled, potrebno je najmanje pet sati.
 </p>
</div>
-->


<?php
		
	function sortirajAbeceda($prvi, $drugi){
		return $prvi[0] > $drugi[0];
	}
	
	function sortirajDatum($prvi, $drugi){
		$pomPrvi = explode(",",$prvi);
		$pomDrugi = explode(",",$drugi);
		
		$datumPrvi = $pomPrvi[2];
		$datumDrugi = $pomDrugi[2];
							
		return strtotime($datumPrvi) < strtotime($datumDrugi);
	}
	
	$fajl = file('unosNovosti.csv');
	
	if(isset($_POST['sortAbeceda'])){
		usort($fajl, "sortirajAbeceda");
		
		for($i =0; $i < (count($fajl)); $i++){
		$ispis = explode(",",$fajl[$i]);
		$ispis[0] = str_replace("?x?", ",", $ispis[0]);
		$ispis[1] = str_replace("?x?", ",", $ispis[1]);
		$ispis[0] = str_replace("?n?", "\n", $ispis[0]);
		$ispis[1] = str_replace("?n?", "\n", $ispis[1]);
		
		print "<div class='novostChild'>
		<p><time class='objavljeno' datetime='".$ispis[2]."'></time></p>

		<h4>".$ispis[0]."</h4>
		<img src='Slike/".$ispis[3]."' alt='".$ispis[3]."' >
		<p>".$ispis[1]."</p>
		</div>";
		}
	
	}
	elseif(!isset($_POST['sortAbeceda'])) {
	  usort($fajl, "sortirajDatum");
	  
	  for($i =0; $i < (count($fajl)); $i++){
		$ispis = explode(",",$fajl[$i]);
		$ispis[0] = str_replace("?x?", ",", $ispis[0]);
		$ispis[1] = str_replace("?x?", ",", $ispis[1]);
		$ispis[0] = str_replace("?n?", "\n", $ispis[0]);
		$ispis[1] = str_replace("?n?", "\n", $ispis[1]);
		print "<div class='novostChild'>
		<p><time class='objavljeno' datetime='".$ispis[2]."'></time></p>

		<h4>".$ispis[0]."</h4>
		<img src='Slike/".$ispis[3]."' alt='".$ispis[3]."' >
		<p>".$ispis[1]."</p>
		</div>";
		}
	  
	}
	
?>

</div>


</section>

<footer>
<p id="kraj">
&copy; 2016 Kaćunski-zec. All Rights Reserved. Legal | Privacy Policy
</p>
</footer>


</BODY>

</HTML>


