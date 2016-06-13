 <!doctype html>  
<html>
<head>

<meta charset=utf-8>
<title> Svaki Student </title>
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="pocetna.css">
<script src="PrviZadatak.js"></script>
<script src="filter.js"></script>
</head>
<body>
<div class="tijelo">
		<div class="logo">
			<p id="S1">
				s
			</p>
			<p id="svaki">
				vaki
			</p>
			<p id="S2">
				s
			</p>
			<p id="student">
				tudent
			</p>

		</div>
<div class="stranica">
<div class="Menu">
<?php
	session_start();
	if(isset($_SESSION['sesija'])){
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>LogOut</a></li>
<li><a href='dodavanjeVijesti.php'>Dodaj Vijest</a></li>
</ul>!";
}
	
else
{
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>Login</a></li>

</ul>";
}	
?>
<select onchange="filter(this.value);">
			<option value="prikazSve" id="prikazSve" selected="selected">Prikaži sve</option>
			<option value="prikazOvogDana" id="prikazOvogDana">Današnje novosti</option>
			<option value="prikazOveSedmice" id="prikazOveSedmice">Vijesti iz ove sedmice</option>
			<option value="prikazOvogMjeseca" id="prikazOvogMjeseca">Vijesti iz ovog mjeseca</option>
</select> 
</div>

	<div id="sredina">
	<form id='srcforma' action='pocetna.php' method='POST'>
	<div id="dugmad">
	<button type="submit" action="pocetna.php" name="dugme1"> Sortiraj po datumu </button>
	</div>
	<div i="dugmad1">
	<button type="submit" action="pocetna.php" name="dugme2"> Sortiraj po abecedi </button>
	</form>
	</id>
<div class="Clanak1"> 
	<div class="centar">
	
		<div class="Vijesti1">
			<ul>
		<?php
						
						function sortirajPoDatumu($d1, $d2) {
							
							$a1=explode(",",$d1);
							$a2=explode(",",$d2);
							$dat1 = $a1[2];
							$dat2 = $a2[2];
							
						
							
							return strtotime($dat1) < strtotime($dat2);
							
						}
						
						function sortirajPoAbecedi($sv1, $sv2){
							$sv1 = strtoupper($sv1);
							$sv2 = strtoupper($sv2);
							return $sv1[0] > $sv2[0];
						}
						
						$vijesti = file("dodaj_novosti.csv");
						$broj_novosti = count($vijesti);
						
					if(isset($_POST['dugme2'])){
							usort($vijesti, "sortirajPoAbecedi");
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							$cv[0]=str_replace(";.?",",",$cv[0]);
							$cv[2]=str_replace(";.?",",",$cv[2]);
							
							print " <li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[2]."' alt='".$cv[2]."'>
									<p>Objavljeno <time class='objava' datetime='".$cv[0]."'></time>.</p>
		<p>
		".$cv[1]." 
		</p>
		
		</li>";
		
						}
						}
						elseif(isset($_POST['dugme1'])){
							
							usort($vijesti, "sortirajPoDatumu");
							
							for($i=0; $i < $broj_novosti; $i++) {
								$cv =explode(',',$vijesti[$i]);
								//$cv = fgetcsv($vijesti[$i], 2024);
								$cv[0]=str_replace(";.?",",",$cv[0]);
							
							
							print "<li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[2]."' alt='".$cv[2]."'>
									<p>Objavljeno <time class='objava' datetime='".$cv[0]."'></time>.</p>
		<p>
		".$cv[1]." 
		</p>
		
		</li>";	
							}
							
						}
						else{
							
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							$cv[0]=str_replace(";.?",",",$cv[0]);
							
								print "<li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[2]."' alt='".$cv[2]."'>
									<p>Objavljeno <time class='objava' datetime='".$cv[0]."'></time>.</p>
		<p>
		".$cv[1]." 
		</p>
		
		</li>";	
							
						}
						}
						?>
						
	
		</ul>
		
		</div>
		</div>

</body>
</html>