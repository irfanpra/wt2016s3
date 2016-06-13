<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Lista linkova</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php
		session_start();
		$page = 'linkovi';
		if(isset($_SESSION['username']))
		{
			include 'navbar-admin.php';
		} 
		else include 'navbar.php';
	?>
	
	<div id="lista-linkova">
		<ul>
			<li><a href="http://www.hunter.com">HUNTER Engineering Company</a></li>
			<li><a href="http://www.hofmann-europe.com">HOFMANN Equipment</a></li>
			<li><a href="http://www.dunloptires.com">DUNLOP Tires</a></li>
			<li><a href="http://bihamk.ba/">BIHAMK Auto-moto klub</a></li>
		</ul>
	</div>
	
</BODY>
</HTML>
