<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php 
		include 'loginfunc.php';
		$page = 'login';
		
		if(isset($_SESSION['username']))
		{
			$page = 'login';
			header("Location: logout.php");
		} 
		else include 'navbar.php';
	?>

	<form id="forma-login" action="login.php" method="post">
		<h2>LOGIN FORMA</h2><br>
		<div class="kontakt-podaci">
			<label>Username: </label>
			<input type="text" size="30" name="username"></div><br>
			<div class="kontakt-podaci"><label>Password: </label>
			<input type="password" size="30"  name="password">
		</div><br><br>
		<button type="submit" name="login">Login</button>
	</form>

	
</BODY>
</HTML>
