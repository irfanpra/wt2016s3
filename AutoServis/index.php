<!DOCTYPE html>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Auto Simanić</TITLE>
<link rel="stylesheet" href="Logo.css">
<link rel="stylesheet" href="Pocetna.css">
<script src="javascript.js"></script>
<script src="valpriunosu.js"></script>
<script src="filtriranje.js"></script>

</HEAD>

<BODY>
	
	<div id="Zaglavlje">
	
	<div class="Logo">
	<p id="A">A</p>
	<p id="uto">uto</p>
	<p id="S">S</p>
	<p id="imanic">imanić</p>
	</div>
	
	<div class="Menu">
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<ul> 
		<li><a href='index.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'> Log Out</a></li>
		<li><a href='DodavanjeNovosti.php'>Dodaj vijest</a></li>
	</ul>";
	}
	else {
	print "<ul> 
		<li><a href='index.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log In</a></li>
	</ul>";
	}
	?>
	</div>
	</div>
	<div id="sort">
	<label for="Sort">Novosti od:</label><br>
	<select id="odabir" onchange="feelter();"> 
		<option value="new" id="novo"> </option>
		<option value="danas" id="danas">danas</option>
		<option value="ove-sedmice" id="ove-sedmice">ove sedmice</option>
		<option value="ovog-mjeseca" id="ovog-mjeseca">ovog mjeseca</option>
		<option value="sve" id="sve">Sve novosti</option>
	</select>
	
	<div id="sredina">
	<form id='srcforma' action='index.php' method='POST'>
	<div id="dugmad">
	<button type="submit" action="index.php" name="baton1"> Sortiraj po datumu </button>
	</div>
	<div i="dugmad1">
	<button type="submit" action="index.php" name="baton2"> Sortiraj po abecedi </button>
	</form>
	</id>
	<div class="Novosti1">
	
	<ul>
		<?php
						
						function sortirajPoDatumu($d1, $d2) {
							
							$a1=explode(",",$d1);
							$a2=explode(",",$d2);
							$dat1 = $a1[1];
							$dat2 = $a2[1];
							
						
							
							return strtotime($dat1) < strtotime($dat2);
							
						}
						
						function sortirajPoAbecedi($sv1, $sv2){
							
							$sv1 = strtoupper($sv1);
							$sv2 = strtoupper($sv2);
							return $sv1[1] > $sv2[1];
						}
						
						$vijesti = file("dodaj_novosti.csv");
						$broj_novosti = count($vijesti);
						
					if(isset($_POST['baton2'])){
							usort($vijesti, "sortirajPoAbecedi");
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							//$cv = fgetcsv($vijesti[$i], 2024);
							$cv[0]=str_replace(";.?",",",$cv[0]);
			
							
							print " <li class='vijesti'>
									<img src='".$cv[2]."' alt='filteri'>
									<p>Objavljeno <time class='vrijemeObjave' datetime='".$cv[1]."'></time>.</p>
		<p>
		".$cv[0]." 
		</p>
		
		</li>";
		
						}
						}
						elseif(isset($_POST['baton1'])){
							
							usort($vijesti, "sortirajPoDatumu");
							
							for($i=0; $i < $broj_novosti; $i++) {
								$cv =explode(',',$vijesti[$i]);
								//$cv = fgetcsv($vijesti[$i], 2024);
								$cv[0]=str_replace(";.?",",",$cv[0]);
							
							
							print "<li class='vijesti'>
									<img src='".$cv[2]."' alt='filteri'>
									<p>Objavljeno <time class='vrijemeObjave' datetime='".$cv[1]."'></time>.</p>
		<p>
		".$cv[0]." 
		</p>
		
		</li>";	
							}
							
						}
						else{
							
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							//$cv = fgetcsv($vijesti[$i], 2024);
							$cv[0]=str_replace(";.?",",",$cv[0]);
							
								print "<li class='vijesti'>
									<img src='".$cv[2]."' alt='filteri'>
									<p>Objavljeno <time class='vrijemeObjave' datetime='".$cv[1]."'></time>.</p>
		<p>
		".$cv[0]." 
		</p>
		
		</li>";
							
						}
						}
						?>
						
	
		</ul>
		</div>
		
		
	
	</div>
</BODY>
</HTML>