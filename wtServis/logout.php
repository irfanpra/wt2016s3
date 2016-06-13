<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Logout</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php 
		include 'loginfunc.php';
		$page = 'logout';
		include 'navbar-admin.php';

		if(isset($_POST['logout'])){
			unset($_SESSION["username"]);
			unset($_SESSION["password"]);
			header('Location: login.php');
		}
	?>


	<form id="forma-login" action="logout.php" method="post">
		<h2>LOGIN FORMA</h2><br>
		<div class="kontakt-podaci">
			<label>Username: <?php print $_SESSION['username'] ?> </label><br>
		</div><br><br>
		<button type="submit" name="logout">Logout</button>
	</form>

	
</BODY>
</HTML>
