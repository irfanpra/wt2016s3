<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>sempre forte</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Calligraffitti" />
</head>
<body>
	<div id = "top">
		<h2 id = "top-header">sempre forte</h2>
	</div>
	<div id = "div-menu">
		 <ul>
			  <li><a href="index.html">Desavanja</a></li>
			  <li><a href="sponzori.html">Sponzori</a></li>
			  <li><a href="kontakt.html">Kontakt</a></li>
			  <li><a href="sastav.html">Sastav</a></li>
			  <li><a href="prijatelji.html">Prijatelji</a></li>
			  <li><a href="login.php">Log In</a></li>
		</ul> 
	</div>

	<!--default gore-->

	<div id = "div-dashboard">
		<div id = "div-novosti">

			<div id = "div-novost-pojedinacna">
				<div id = "div-naslov-novost">
					Violine dobojskog Stradivarija širom svijeta
				</div>
				<div id = "div-tekst-novost">
					<div id = "div-novost-thubmnail" class ="image">
						<img src="http://balkans.aljazeera.net/sites/staff.balkans.aljazeera.com/files/styles/aljazeera_photo_gallery_article/public/atelje_3.jpg?itok=zWW8pBRx" height="146" />
					</div>
					<div id ="div-novosti-tekst">
						Mirko Vukeljić u svom atelju Doboju više od 35 godina gradi majstorske i koncertne violine za brojne filharmonije
						„Rijetki su graditelji magične, čarobne violine, kao što su rijetke duše koje se odrede da sviraju taj instrument i uspiju, jer su gudači najteži instrumenti za sviranje, ali i gradnju“,  životni je moto Mirka Vukeljića, graditelja i reparatora violina iz Doboja...
						 <a href="http://balkans.aljazeera.net/vijesti/violine-dobojskog-stradivarija-sirom-svijeta"> Opširnije...</a>
					</div>
				</div>	
			</div>

			<div id = "div-novost-pojedinacna">
				<div id = "div-naslov-novost">
					Naučite svirati trombon!
				</div>
				<div id = "div-tekst-novost">
					<div id = "div-novost-thubmnail" class ="image">
						<img src="http://williecolon.com/news/wp-content/uploads/2009/06/20090614_flaotrosflash_21173961.jpg" height="155" width= "190"/>
					</div>
					<div id ="div-novosti-tekst">
						Trombon (trb.) je jedan od najstarijih limenih puhačkih instrumenata, azijskog podrijetla. Ime mu kazuje da je riječ o velikoj trublji te i on ima cilindričnu cijev.Trombon,instrument azijskog porijekla poznat je po prorodrnom zvuku i specifičnoj građi.Osnovne tehnike sviranje pogledajte na:
						<a href="http://bosnian-metal.blogspot.com/2014/03/tanker-i-instead-of-kill-gosti-na.html">Detaljnije...</a>
					</div>
				</div>	
			</div>


<div class="obavjesti_php">
  <?php 
				$fajloviNovosti = glob("Novosti1/*.csv");
				$niz = array();
				
				foreach ($fajloviNovosti as $fajl) 
				{
					$sadrzaj = file($fajl);
					array_push($niz, $sadrzaj);
				}
					 	foreach ($fajloviNovosti as $file) 
					 	{
					 		$sadrzaj = file($file);
					 		$opisNovosti = "";
					 		
					 		$bool = false;

					 		for($i = 4; $i < count($sadrzaj); $i++)
					 		{
					 			if($sadrzaj[$i] === "--\r\n")
					 			{
					 				$bool = true;
					 				continue;
					 			}
					 			if($bool == false)
					 			{
					 				$opisNovosti .= trim($sadrzaj[$i]);
					 			}
					 			
					 		}
							/* deklaracija varijabli*/
					 		$vrijeme = "";
					 		$autor = "";
					 		$naslov = "";
					 		$slika = "";
					 		/*punjenje varijabli*/
					 		$vrijeme = trim($sadrzaj[0]);
					 		$autor = trim($sadrzaj[1]);
					 		$naslov = trim(ucfirst(strtolower($sadrzaj[2])));
					 		$slika = trim($sadrzaj[3]);
							/*ispis */
					 		echo ' kontakt <div id = "div-novost-pojedinacna">
					 			<div  class ="image"><img src = "'.$slika.'" align="left"></div>
					 			<div id = "div-tekst-novost">'.$vrijeme.'<br>'.$autor.'<br>'.$naslov.$opisNovosti.'</div>
								</div>';
					 	}
					?>
  <div id = "div-novost-pojedinacna">
   
    <div id = "div-tekst-novost">
    <h2>Violine dobojskog Stradivarija širom svijeta </h2>
      <div id = "div-novost-thubmnail" class ="image"> <img src="http://balkans.aljazeera.net/sites/staff.balkans.aljazeera.com/files/styles/aljazeera_photo_gallery_article/public/atelje_3.jpg?itok=zWW8pBRx" height="146" /> </div>
      <div id ="div-novosti-tekst"> Mirko Vukeljić u svom atelju Doboju više od 35 godina gradi majstorske i koncertne violine za brojne filharmonije
        „Rijetki su graditelji magične, čarobne violine, kao što su rijetke duše koje se odrede da sviraju taj instrument i uspiju, jer su gudači najteži instrumenti za sviranje, ali i gradnju“,  životni je moto Mirka Vukeljića, graditelja i reparatora violina iz Doboja... <a href="http://balkans.aljazeera.net/vijesti/violine-dobojskog-stradivarija-sirom-svijeta"> Opširnije...</a> </div>
    </div>
  </div>
</div>