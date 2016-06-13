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
			if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])){

				session_unset();
				echo "<div class='obavjest-success'>Uspješno ste odjavljeni</div>";
			}
			else{
				echo "<div class='obavjest-error'>Došlo je do greške pri odjavi</div>";
			}
		?>

		<?php include 'footer.php' ?>
	</body>
</html>