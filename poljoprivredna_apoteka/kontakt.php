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
		<?php include 'navigation.php' ?>
		<div id="glavni" class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<h3>Kontakt</h3>
				<div class="kontakt-forma">
					<div class="row">
		  				<form id="kontakt" action="#" method="POST" onsubmit="return validateForm()">
		  					<div class="row">
		  						<div class="col-2">
		  							<label for="ime">Ime</label>
		  						</div>
		  						<div class="col-4">
		  							<input type="text" id="ime" name="ime" placeholder="Ime">
		  						</div>
		  					</div>
		  					<div class="row">
		  						<div class="col-2">
		  							<label for="email">Email</label>
		  						</div>
		  						<div class="col-4">
		  							<input type="email" id="email" name="email" placeholder="example@email.com">
		  						</div>
		  					</div>
		  					<div class="row">
		  						<div class="col-2">
		  							<label for="url">Web</label>
		  						</div>
		  						<div class="col-4">
		  							<input type="url" id="url" name="url" placeholder="http://example.com">
		  						</div>
		  					</div>
		  					<div class="row">
		  						<div class="col-2">
		  							<label for="poruka">Poruka</label>
		  						</div>
		  						<div class="col-5">
		  							<textarea name="poruka" id="poruka" placeholder="Poruka"></textarea>
								</div>
		  					</div>
		  					<div class="row">
		  						<div class="col-3">
		  							<label for="range">Ocjena usluga</label>
		  						</div>
		  						<div class="col-5">
		  							<input type="range" id="range" name="range" min="0" max="10">
		  						</div>
		  					</div>
		  					<div class="row">
		  						<hr>
		  						<div class="col-8"></div>
		  						<div class="col-2">
		  							<input type="submit" id="button-potvrdi" value="Pošalji" class="button-confirm">
		  						</div>
		  					</div>
						</form>
					</div> 
				</div>
			</div>
			<div class="col-2"></div>
		</div>
		<?php include 'footer.php' ?>
	</body>
</html>