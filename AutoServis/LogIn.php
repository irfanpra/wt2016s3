<!DOCTYPE html>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Auto Simanić</TITLE>
<link rel="stylesheet"  href="Logo.css">
<link rel="stylesheet"  href="Pocetna.css">
<script src="regex.js"></script>
<script src="valpriunosu.js"></script>
</HEAD>
<BODY>

	<div id="Zaglavlje">
	
	<div class="Logo">
	<p id="A">
	A
	</p>
	<p id="uto">
	uto
	</p>
	<p id="S">
	S
	</p>
	<p id="imanic">
	imanić
	</p>
	</div>
	<div class="Menu">
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<ul> 
		<li><a href='Zad1.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log Out</a></li>
		<li><a href='DodavanjeNovosti.php'>Dodaj vijest</a></li>
	</ul>";
	}
	else {
	print "<ul> 
		<li><a href='Zad1.php'>Početna</a></li>
		<li><a href='Onama.php'>O nama</a></li>
		<li><a href='KontaktForma.php'>Kontakt</a></li>
		<li><a href='Eksterni_linkovi.php'>Eksterni linkovi</a></li>
		<li><a href='LogIn.php'>Log In</a></li>
	</ul>";
	}
	?>
	</div>
	</div>
	
	<?php
			if(isset($_POST['logout']))
			{
				session_unset();
				session_destroy();
				header("Location: Zad1.php");
			}
			//session_start();
			$error = '';
			$proslo = false;
			$postavljena = false;
			if (isset($_POST['submit']) && !empty($_POST['Username']) && !empty($_POST['Password'])) 
			{
				$user = $_POST['Username'];
				$pass = $_POST['Password'];
			
				$login=file('adminacc.txt');
				foreach($login as $korisnik) {
					$podaci=explode(',',$korisnik);
					
					if($podaci[0] == $user && $podaci[1]==md5($pass)) {
						$_SESSION['login'] = true;
						$error="";
						$proslo = true;
						$postavljena = true;
						break;
					}
					
				}
				if(! $proslo) {	
					echo "Pogrešni korisnički podaci!";
				}
				else if($proslo ) {
				echo '<script>alert("Logovan");</script>';
				header("Location: Zad1.php");
			}
		
				
			}
			
			
			
	?>	
	
	<div class="forma">
	<?php
	if(isset($_SESSION['login'])){
	print "
	<form id='login-forma' action='LogIn.php' method='POST'>
	<div id='dugme'>
	<button type='submit' name='logout'> Log Out </button>
	</div>
	</form>
	";
	}
	else{
	print "
	<form id='login-forma' action='LogIn.php' method='POST'>
	
	<div id='labela_naziv'>
	<label for='Username'>Username:</label>
	<input type='text' name='Username' id='Username' ><br>
	</div>
	<br>
		
	<div id='labela_forma'>
	<label for='Password'>Password:</label><br>
	<input type='text' name='Password' id='password' ><br>
	</div>
	<br>
	<div id='dugme'>
	<button type='submit' name='submit'> Submit </button>
	</div>
	</form>
	";
	}
	?>
	
	</div>
	
	
	
</BODY>
</HTML>


