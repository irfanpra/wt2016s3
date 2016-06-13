<?php 
session_name('Sesija');
session_id('1');
session_start();

if ($_SESSION["username"]!=="admin") {
header('Location: login.php');
};
?>
<!DOCTYPE html>
<html>
<head>
<title>Naslovna</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Task3Stil.css">

<SCRIPT src="Task2js.js" type="text/javascript"> </SCRIPT>
</head>
<body>




<div id="header">

<h1 id="zajednicka">
	<span  class="char1" >P</span>
  <span class="char2">l</span>
  <span class="char3">a</span>
  <span class="char4">v</span>
  <span class="char5">a</span>
  <span class="char6"> </span>
  <span class="char7">L</span>
  <span class="char8">a</span>
  <span class="char9">g</span>
  <span class="char10">u</span>
  <span class="char11">n</span>
  <span class="char12">a</span>
  <span class="tekst">Apartments</span>
 </h1>
</div>

<div id="navigation">
	  <ul>

  	<li><a href="dodajVijest.php">Dodaj vijest</a></li>
 <li><a href="#NaslovnaTaska2" >Naslovna</a></li>
  <li><a href="Tabela.php" >Tabela</a></li>
  <li><a href="FormaSaValidacijom.php">Forma</a></li>
  <li><a href="Lista_linkova.php">Lista linkova</a></li>
  <li>  <a href="login.php" >Log out</a></li>
	</ul>
		</div>
		<div class="block">
	<label id="labela">Filter Novosti:</label>	
<select id="mySelect" onchange="myFunction()">
  <option value="Sve">Sve Novosti
  <option value="Danasnje">Danasnje novosti
  <option value="oveSedmice">Novosti ove sedmice
  <option value="ovogMjeseca">Novosti ovog mjeseca
  </select>
  </div>
		<div class="staticno">
		<section class="sadrzaj">
		<div class="Novost" id="1">
  <h2>Dobrodosli</h2>
  <p id="vrijeme1">mar,30,2016,23:00:00</p>
   <p id="vrijemeObjave1"></p>
  <p>
<img src="velikaPlaza.jpg" alt="Photo" >  

Velika Plaza jedna od najljepsih i najvecih  plaza na mediteranu.  
Ako zelite provesti odmor na atraktivnom i mirnom mjestu, s prekrasnim pogledom na plazu i more, posjetite nas! 
Sa zadovoljstvom Vam nudimo boravak u kuci u ambijentu koji ce vas sigurno osvojiti i ocarati...
  </p>
   </div>
    	<div class="Novost" id="2">
  <h2>O nama</h2>
  <p id="vrijeme2">mar,30,2016,23:00:00</p>
 
   <p id="vrijemeObjave2"></p>

  <p>
<img src="img1.jpg" alt="Photo" >  
  Adriatic  apartment (kuća) je smještena 30-tak metara od obale Velike plaže. Raspolaže sa 9 soba 
  i 3 apartmana sa prostranom terasom sa koje se pruža jedinstven pogled na plavetnilo mora,
  plažu, neba i mirisno zelenilo mediteranskog rastinja. 
  </p>
   </div>
   <div class="Novost" id="3">
  <h2>Smjestaj</h2>
  <p id="vrijeme3">mar,30,2016,01:00:00</p>
 
   <p id="vrijemeObjave3"></p>

  <p>
<img src="img2.jpg" alt="Photo" >  
  Smještaja u Adriatic-apartment čine dvokrevetne, trokrevetne sobe i apartmani. 
Sobe opremljene su modernim namještajem, svaka soba poseduje kupatilo, veliku terasu sa i bez pogledom na more, TV, Wireless pristup, klima uređaj, frižider...
  </p>
   </div>
   <div class="Novost" id="4">
  <h2>Polozaj Crne Gore</h2>
  <p id="vrijeme4">mar,30,2016,00:19:00</p>
 
   <p id="vrijemeObjave4"></p>

  <p>
<img src="cg.png" alt="Photo" >  
  Crna Gora se prostire između 41º51' i 43º33' sjeverne geografske širine. Njena najjužnija tačka nalazi se na ušću Bojane u Jadransko more,
  a najsjevernija na obroncima planine Kovač, blizu Čajniča.  Rastojanje između njih iznosi 193 km vazdušne linije. Nešto su manja rastojanja između najzapadnije...</p>
   </div>
   <div class="Novost"  id="5">
  <h2>Ulcinj</h2>
  <p id="vrijeme5">jan,20,2016,09:00:00</p>
 
   <p id="vrijemeObjave5"></p>

  <p>
<img src="ulcinj.jpg" alt="Photo" >  
 Ulcinj se prevashodno posjećuje zbog sunca, mora i pjesčanih plaža. Njegove beskrajne pjesčane plaže sastavljene od najsitnijih zrnaca sivkastog i toplog pijeska, 
 pored toplog, cistog i bistrog mora čija je providnost od 56 m izmjerena kod Ulcinja, uz blagu primorsku klimu, neodoljiv su motiv za svakog turistu...
  </p>
   </div>
   <div class="Novost" id="6">
  <h2>Gdje se nalazimo</h2>
  <p id="vrijeme6">mar,28,2016,09:00:00</p>
    <p id="vrijemeObjave6"></p>
  <p>
<img src="mapa.jpg" alt="Photo" >  
Adriatic-apartment se nalazi na samoj obali Ulcinske Velike Plaže, kod ušća Port Milene, 3 km je udaljena od centra grada. 
Da bi došli kod nas treba sljedit put ka pristaništu na Velikoj Plaži.
Prije Mosta Milena, skrenuti desno uz solanski kanal 600 metara. 
Autoboska stanica udaljena 2 km   </p>
   </div> 
		<div class="Novost" id="7">
  <h2>Dobrodosli</h2>
  <p id="vrijeme7">mar,30,2016,23:00:00</p>
   <p id="vrijemeObjave7"></p>
  <p>
<img src="velikaPlaza.jpg" alt="Photo" >  

Velika Plaza jedna od najljepsih i najvecih  plaza na mediteranu.  
Ako zelite provesti odmor na atraktivnom i mirnom mjestu, s prekrasnim pogledom na plazu i more, posjetite nas! 
Sa zadovoljstvom Vam nudimo boravak u kuci u ambijentu koji ce vas sigurno osvojiti i ocarati...
  </p>
   </div>
    	<div class="Novost" id="8">
  <h2>O nama</h2>
  <p id="vrijeme8">mar,30,2016,23:00:00</p>
 
   <p id="vrijemeObjave8"></p>

  <p>
<img src="img1.jpg" alt="Photo" >  
  Adriatic  apartment (kuća) je smještena 30-tak metara od obale Velike plaže. Raspolaže sa 9 soba 
  i 3 apartmana sa prostranom terasom sa koje se pruža jedinstven pogled na plavetnilo mora,
  plažu, neba i mirisno zelenilo mediteranskog rastinja. 
  </p>
   </div>
   <div class="Novost" id="9">
  <h2>Smjestaj</h2>
  <p id="vrijeme9">mar,30,2016,01:00:00</p>
 
   <p id="vrijemeObjave9"></p>

  <p>
<img src="img2.jpg" alt="Photo" >  
  Smještaja u Adriatic-apartment čine dvokrevetne, trokrevetne sobe i apartmani. 
Sobe opremljene su modernim namještajem, svaka soba poseduje kupatilo, veliku terasu sa i bez pogledom na more, TV, Wireless pristup, klima uređaj, frižider...
  </p>
   </div>
   <div class="Novost" id="10">
  <h2>Polozaj Crne Gore</h2>
  <p id="vrijeme10">mar,30,2016,00:19:00</p>
 
   <p id="vrijemeObjave10"></p>

  <p>
<img src="cg.png" alt="Photo" >  
  Crna Gora se prostire između 41º51' i 43º33' sjeverne geografske širine. Njena najjužnija tačka nalazi se na ušću Bojane u Jadransko more,
  a najsjevernija na obroncima planine Kovač, blizu Čajniča.  Rastojanje između njih iznosi 193 km vazdušne linije. Nešto su manja rastojanja između najzapadnije...</p>
   </div>
   <div class="Novost"  id="11">
  <h2>Ulcinj</h2>
  <p id="vrijeme11">jan,20,2016,09:00:00</p>
 
   <p id="vrijemeObjave11"></p>

  <p>
<img src="ulcinj.jpg" alt="Photo" >  
 Ulcinj se prevashodno posjećuje zbog sunca, mora i pjesčanih plaža. Njegove beskrajne pjesčane plaže sastavljene od najsitnijih zrnaca sivkastog i toplog pijeska, 
 pored toplog, cistog i bistrog mora čija je providnost od 56 m izmjerena kod Ulcinja, uz blagu primorsku klimu, neodoljiv su motiv za svakog turistu...
  </p>
   </div>
   <div class="Novost" id="12">
  <h2>Gdje se nalazimo</h2>
  <p id="vrijeme12">mar,28,2016,09:00:00</p>
    <p id="vrijemeObjave12"></p>
  <p>
<img src="mapa.jpg" alt="Photo" >  
Adriatic-apartment se nalazi na samoj obali Ulcinske Velike Plaže, kod ušća Port Milene, 3 km je udaljena od centra grada. 
Da bi došli kod nas treba sljedit put ka pristaništu na Velikoj Plaži.
Prije Mosta Milena, skrenuti desno uz solanski kanal 600 metara. 
Autoboska stanica udaljena 2 km   </p>
   </div> 

</section> 
</div>

 

</body>
</html>