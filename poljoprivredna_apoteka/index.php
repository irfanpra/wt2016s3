<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Agro-Land</title>
		<script type="text/javascript" src="skripte/script.js"></script>
		<link rel="stylesheet" type="text/css" href="stilovi/stil.css">
	</head>
	<body>
		<?php include 'navigation.php' ?>
		<div id="glavni" class="row">
			<div id="glavni-lijevo" class="col-8">
				<div class="row slideshow-container">
					<img class="mySlides" src="http://www.w3schools.com/w3css/img_fjords.jpg">
					<img class="mySlides" src="http://www.w3schools.com/w3css/img_lights.jpg">
					<img class="mySlides" src="http://www.w3schools.com/w3css/img_mountains.jpg">
					<img class="mySlides" src="http://www.w3schools.com/w3css/img_forest.jpg">
					<a class="btn-arrows arrow-top-left" onclick="plusDivs(-1)">&#10094;</a>
					<a class="btn-arrows arrow-top-right" onclick="plusDivs(+1)">&#10095;</a>
				</div>
				<div class="row">
					<div id="novoNaslov" class="col-9">
						<h3>Novo</h3>
					</div>
					<div class="col-3">
						<select id="filter" onchange="filtrirajProizvode()">
						  <option value="sve">Prikazi sve</option>
						  <option value="danas">Danas</option>
						  <option value="sedmice">Sedmicne</option>
						  <option value="mjesec">Mjesec</option>
						  <option value="u">Naziv proizvoda: A-Z</option>
						  <option value="d">Naziv proizvoda: Z-A</option>
						</select>
					</div>
				</div>

				<?php
					function sortDate($a, $b) {
    					return strtotime($a[3]) - strtotime($b[3]);
					}
					function sortUpLetters($a, $b){
						return $a[0] < $b[0];
					}
					function sortDownLetters($a, $b){
						return $a[0] > $b[0];
					}
					$file = file('proizvodi.csv');
					$broj_proizvoda = count($file);
					$lista_proizvoda;
					for ($i=0; $i < $broj_proizvoda; $i++) { 
						$lista_proizvoda[$i] = explode(',', $file[$i]);;
					}
					//sortiranje default po vremenu
					if(!isset($_GET['sort'])){
						usort($lista_proizvoda, "sortDate");
					}
					else {
						$sort = htmlspecialchars($_GET['sort']);
						if($sort == "u"){
							usort($lista_proizvoda, "sortUpLetters");
						}
						else if($sort == "d"){
							usort($lista_proizvoda, "sortDownLetters");
						}
					}
		          	for ($i=$broj_proizvoda-1; $i >= 0; $i--) { 
			            echo "<div class='proizvod'>";
			            echo '<img src="img/products/product_1.jpg" alt="Product 1">';
			            echo '<div class="sadrzaj-proizvod">';
			            echo '<p>'.$lista_proizvoda[$i][0].'</p>';
			            echo '<p>Cijena <b>'.$lista_proizvoda[$i][2].' KM</b></p>';
			            echo '<a href="proizvod.php" class="button-green">Detalji</a>';
			            echo '</div>';
			            echo '<div class="datumObjave">'.$lista_proizvoda[$i][3].'</div>';
			            echo '<div class="datum">'.$lista_proizvoda[$i][3].'</div>';
			            echo '</div>';
		          	}
		          	if($broj_proizvoda == 0){
		            	echo "<h4>Trenutno nema proizvoda</h4>";
		          	}
		        ?>

			</div>
			<div id="glavno-desno" class="col-4">
				<h3>Obavještenja</h3>
				<div class="obavjestenja">
				<?php
					$file = file('vijesti.csv');
					$broj_vijesti = count($file);
					if($broj_vijesti > 3) $broj_vijesti = 3;
					for ($i=0; $i < $broj_vijesti; $i++) { 
						$vijest = explode(',', $file[$i]);
						echo "<div class='vijest'>";
						echo "<h4><a href='#' class='link_vijest'>".$vijest[0]."<span>Opsirnije</span></a></h4>";
						echo "<div class='sadrzaj'>".substr($vijest[1], 0, 220)."..."."<a href='#'>opširnije</a>" ."</div>";
						echo "<div class='info'>";
						echo "<div class='datumObjaveVijest'>".$vijest[2]."</div>";
						echo "</div>";
						echo "</div><hr>";
					}
					if($broj_vijesti == 0){
						echo "<h4>Trenutno nema obavještenja</h4>";
					}
				?>
				</div>
				<h3>Pronađite nas</h3>
				<div class="obavjestenja">
					<ul id="drustvene-mreze">
						<li><a href="https://facebook.com">Facebook</a><hr></li>
						<li><a href="https://twitter.com">Twitter</a><hr></li>
						<li><a href="https://www.instagram.com">Instagram</a><hr></li>
					</ul>
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
	</body>
</html>


<script type="text/javascript" src="skripte/slideshow.js"></script>

<?php if(isset($_GET['sort'])) : ?>
	<script>idiDoVijesti(<?php echo '"'.$_GET['sort'].'"';?>);</script>
<?php endif; ?>