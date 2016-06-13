 <!doctype html>  
<html>
<head>

<meta charset=utf-8>
<title> Svaki Student </title>
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="pocetna.css">
<script src="PrviZadatak.js"></script>
<script src="filter.js"></script>
</head>
<body>
<div class="tijelo">
		<div class="logo">
			<p id="S1">
				s
			</p>
			<p id="svaki">
				vaki
			</p>
			<p id="S2">
				s
			</p>
			<p id="student">
				tudent
			</p>

		</div>
<div class="stranica">
<div class="Menu">
	<?php
	session_start();
	
	if(isset($_POST['logout'])){
			unset($_SESSION['login']);
				session_destroy();
				echo '<script>alert("Niste vise logovani!");</script>';
	}
	
			
			
		if(!isset($_SESSION['sesija']))
	{
		print "<ul>
			<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>LogIn</a></li>

		</ul>";
	
	}
	if(isset($_SESSION['sesija']))
	{
		print "<ul>
			<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>LogOut</a></li>
<li><a href='dodavanjeVijesti.php'>Dodaj Vijest</a></li>
		</ul>";
		
		 
	}

			$proslo = false;

			if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
			{
				$korisnik = $_POST['username'];
				$lozinka = $_POST['password'];
				
				$login=file('login.txt');

				foreach($login as $a) {
					$podaci=explode(',',$a);
					if($podaci[0] == $korisnik && $podaci[1]==md5($lozinka)) {
						$_SESSION['sesija'] = true;
						$proslo = true;
						break;
					}
				}
				if(! $proslo) {	
					echo '<script>alert("Pogrešan username ili password");</script>';
				}
			}
	/*		if(isset($_SESSION['sesija']) && isset($_POST('logout'))){
				session_unset();
				session_destroy();
			}*/
			
	?>
<div class="centar">
		<div class="forma2">
			<form action="login.php"  method="POST"  id="login">
				<label for="Username">Username:</label><br>
				<input type="text" name="username" id="username" ><br>
				<label for="Password">Password:</label><br>
				<input type="text" name="password" id="pass" ><br>
				<input type="submit" name ="login" value="Potvrdi" />
			</form>
			<?php
			if(isset($_SESSION['sesija']))
				print "<form id='login-forma' action='login.php' method='POST'><input type='submit' name='logout' value='Log out' /></form>";
			?>
		</div>
	
	</div>
	
	
	
</body>
</html>