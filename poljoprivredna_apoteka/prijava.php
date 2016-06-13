<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
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
		<div id="glavni" class="row">
			<?php
				$error = '';
				$tek_prijava = false;
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					if (empty($_POST['username']) || empty($_POST['password'])) {
						$error = "Korisnicko ime ili lozinka nisu validni";
					}
					else
					{
						$username=$_POST['username'];
						$password=$_POST['password'];

						$login_podaci = fopen("login.txt","r");

						if($username == fgets($file) && password_verify($password, fgets($file))){
							$_SESSION['login_user']=$username;
							$tek_prijava = true;
						}
						else{
							$error = "Korisnicko ime ili lozinka nisu validni";
						}

						fclose($login_podaci);
					}
					if($error != ''){
						echo "<div class='obavjest-error'>$error</div>";
					}
					else echo "<div class='obavjest-success'>Uspješno ste prijavljeni</div>";
				}
				if(!isset($_SESSION['login_user'])){
					echo '<div class="col-2"></div>
					<div class="col-8">
						<h3>Prijava</h3>
						<div class="kontakt-forma">
							<div class="row">
				  				<form id="login" action="prijava.php" method="post">
				  					<div class="row">
				  						<div class="col-3">
				  							<label for="username">Korisnicko ime</label>
				  						</div>
				  						<div class="col-4">
				  							<input type="text" name="username" placeholder="Korisnicko ime">
				  						</div>
				  					</div>
				  					<div class="row">
				  						<div class="col-3">
				  							<label for="password">Lozinka</label>
				  						</div>
				  						<div class="col-4">
				  							<input type="password" name="password" placeholder="Lozinka">
				  						</div>
				  					</div>
				  					<div class="row">
				  						<hr>
				  						<div class="col-8"></div>
				  						<div class="col-2">
				  							<input type="submit" id="button-potvrdi" value="Prijava" class="button-confirm">
				  						</div>
				  					</div>
								</form>
							</div> 
						</div>
					</div>';
				}
				else if(!$tek_prijava){
					echo "<div class='obavjest-error'>Već ste prijavljeni</div>";
				}
			?>
			<div class="col-2"></div>
		</div>
		<?php include 'footer.php' ?>
	</body>
</html>