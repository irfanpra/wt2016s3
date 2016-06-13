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
				if (empty($_POST['naslov']) || empty($_POST['sadrzaj'])) {
						$error = "Popunite navedena polja";
				}
				else{
					$sadrzaj_vijest = test_input($_POST['sadrzaj']);
					$naslov_vijesti = test_input($_POST['naslov']);
					$datum_objave = date('Y-m-d H:i:s');
					$drzava = test_input($_POST['code']);
					$telefon = test_input($_POST['telefon']);

					$sadrzaj_vijest = str_replace(",","&#44;",$sadrzaj_vijest);
					$naslov_vijesti = str_replace(",","&#44;",$naslov_vijesti);

					//Spasi

					$file = file("vijesti.csv");
            		$novi = $naslov_vijesti.",".$sadrzaj_vijest.",".$datum_objave.",".$drzava.",".$telefon."\n";
            		array_push($file, $novi);
            		file_put_contents("vijesti.csv", $file);

					$_REQUEST['naslov'] = "";
					$_REQUEST['sadrzaj'] = "";
				}
				if($error != ""){
					echo "<div class='obavjest-error'>$error</div>";
				}
				else echo "<div class='obavjest-success'>Uspješno ste dodali vijest</div>";
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
				<h3>Dodaj novu vijest</h3>
				<div class="row">
					<div class="card">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validateForm()">
							<div class="row">
				  				<div class="col-2">
									<label for="naslov">Naslov</label>
								</div>
				  				<div class="col-5">
				  					<input type="text" name="naslov" placeholder="Naslov" value="<?php 
																				if (isset($_REQUEST['naslov']))
																			echo $_REQUEST['naslov']; ?>">
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-2">
									<label for="sadrzaj">Sadržaj</label>
								</div>
				  				<div class="col-5">
				  					<textarea name="sadrzaj" placeholder="Sadržaj"><?php 
				  					if(isset($_REQUEST['sadrzaj'])) echo $_REQUEST['sadrzaj']; ?></textarea>
				  				</div>
				  			</div>

				  			<div class="row">
				  				<div class="col-2">
									<label for="code">Država</label>
								</div>
				  				<div class="col-5">
				  					<select name="code">
				  						<option value="" disabled selected>Odaberite državu</option>
				  					</select>
				  				</div>
				  			</div>

				  			<div class="row">
				  				<div class="col-2">
									<label for="code">Broj telefona</label>
								</div>
				  				<div class="col-5">
				  					<input type="tel" name="telefon" placeholder="Broj telefona" value="<?php 
																				if (isset($_REQUEST['telefon']))
																			echo $_REQUEST['telefon']; ?>">
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

 <script>popuniSelect();</script>