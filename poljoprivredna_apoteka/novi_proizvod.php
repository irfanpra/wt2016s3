<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
	  header('Location: prijava.php');
	 }
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Agro-Land</title>
		<script type="text/javascript" src="skripte/validacija.js"></script>
		<link rel="stylesheet" type="text/css" href="stilovi/stil.css">
	</head>
	<body>
		<?php
			include 'navigation.php'
		?>
		<?php 
			$error = "";
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				if (empty($_POST['naziv']) || empty($_POST['opis']) || empty($_POST['cijena'])) {
						$error = "Popunite navedena polja";
				}
				else{
					//Upis u csv
					$naziv_proizvoda = test_input($_POST['naziv']);
					$opis_proizvoda = test_input($_POST['opis']);
					$cijena = test_input($_POST['cijena']);
					$datum_objave = date('Y-m-d H:i:s');

					$naziv_proizvoda = str_replace(",","&#44;",$naziv_proizvoda);
					$opis_proizvoda = str_replace(",","&#44;",$opis_proizvoda);

					//Spasi

					$file = file("proizvodi.csv");
            		$novi = $naziv_proizvoda.",".$opis_proizvoda.",".$cijena.",".$datum_objave."\n";
            		array_push($file, $novi);
            		file_put_contents("proizvodi.csv", $file);

					$_REQUEST['naziv'] = "";
					$_REQUEST['opis'] = "";
					$_REQUEST['cijena'] = "";
				}
				if($error != ""){
					echo "<div class='obavjest-error'>$error</div>";
				}
				else echo "<div class='obavjest-success'>Uspješno ste dodali proizvod</div>";
			}
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		?>
		<div id="glavni" class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<h3>Dodaj novi proizvod</h3>
				<div class="row">
					<div class="card">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validateForm()">
							<div class="row">
				  				<div class="col-2">
									<label for="naziv">Naziv</label>
								</div>
				  				<div class="col-5">
				  					<input type="text" name="naziv" placeholder="Naziv" value="<?php 
																				if (isset($_REQUEST['naziv']))
																			echo $_REQUEST['naziv']; ?>">
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-2">
									<label for="opis">Opis</label>
								</div>
				  				<div class="col-5">
				  					<textarea name="opis" placeholder="Opis"><?php 
				  					if(isset($_REQUEST['opis'])) echo $_REQUEST['opis']; ?></textarea>
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-2">
									<label for="cijena">Cijena</label>
								</div>
				  				<div class="col-5">
				  					<input type="number" name="cijena" step="0.01" placeholder="Cijena" value="<?php
																				if (isset($_REQUEST['cijena']))
																			echo $_REQUEST['cijena']; ?>">
				  				</div>
				  			</div>
				  			<div class="row">
			  						<hr>
			  						<div class="col-8"></div>
			  						<div class="col-2">
			  							<input type="submit" id="button-potvrdi" value="Potvrdi" class="button-confirm">
			  						</div>
			  					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
	</body>
 </html>