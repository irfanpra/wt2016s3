<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Sound Art Studio</TITLE>
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<script src="../Skripte/script.js"></script>
		<META charset=utf-8>
		</HEAD>
		<BODY>
			<div id="zaglavlje">
				<h1>Sound Art Studio</h1>
				<div id="logo">
					<div id="kruzic"></div>
					<div id="linija"></div>
				</div>
			</div>

			<a class="skip-main" href="GlavniDioNovosti">Preskoči čitanje menija</a>
			<div id="meni">
				<ul>
					<li><a href="index.php">Naslovnica</a></li>
					<li><a href="omeni.php">O meni</a></li>
					<li><a href="Coveri.php">Coveri</a></li>
					<li><a href="Cjenovnik.php">Cjenovnik</a></li>
					<li><a href="Kontakt.php">Kontakt</a></li>
				</ul>
			</div>
			<form action="dodavanjeNovosti.php">
				<input type="submit" id="DodavanjeNovosti" value="Dodaj novost">
			</form>
			<?php
			session_start();
			if (isset($_POST['logout'])) {
				unset($_SESSION['login']);
				session_destroy();
				echo '<script>alert("Uspjesno ste se izlogovali");</script>';
				header("Location: login.php");
			}

			if(!isset($_SESSION['login'])){
				header("Location: ../index.php");
			}

			if (isset($_SESSION['login']))
			{
				echo "<form action='logout.php' method='POST'><input type='submit' id='logout' name='logout' value='Logout'></form>";
			}

			?>
		</BODY>
	</HTML>
