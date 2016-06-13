<!DOCTYPE HTML>

<HTML>
<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="treci_zadatak.js"></script>

</HEAD>

<BODY>

<header>
<h1> LD "Kaćunski zec" Kaćuni-Busovača </h1>

<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  

  <div class="mojLogo2"> </div>
</div>


</header>

<nav class="meni">
<ul>
	<li><a href="index.php">Početna</a></li>
	<li><a href="Lov.php">Lov</a></li>
	<li><a href="O_nama.php">O nama</a></li>
	<li><a href="Korisni_linkovi.php">Korisni linkovi</a></li>
	<li><a href="Kontakt.php">Kontakt</a></li>
	<li><a href="Login.php">Login</a></li>
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<li><a href='UnosNovosti.php'>Dodaj novost</a></li>";
	}
	?>
</ul>


</nav>

<section>

		<?php
		
			
			if (isset($_SESSION ['login'])){
										
					print "<form id='odjavaForma'  action='Login.php' method='POST'>
					<p>Već ste logovani na našu stranicu, ukoliko želite da se odjavite sa vašeg korisničkog računa, kliknite na dugme Odjava. Hvala</p>
					<input id='logout' name='logout' type='submit' value='Odjava'> 
					</form>";
					
					if (isset ($_POST['logout']))
					{
						session_unset();
						session_destroy();
						header("Location: index.php");
					}			
											
			}
			
			else {
				
				print "
				<div id='divLogin'>

				<form id='loginForma'  action='Login.php' method='POST'>
				 
				
				<label for='username'> Username: </label> <input id='username' type='text' name='username' > <br> 
				<label for='password'> Password: </label> <input id='password' type='text' name='password' > <br>	
					
				<input id='posalji' name='posalji' type='submit' value='Pošalji' > 

				
				
				</form>
				</div>";
				
			
			
			$greska = '';
			$radi = false;

			if (isset($_POST['posalji']) && !empty($_POST['username']) && !empty($_POST['password'])) 
			{
				$user = $_POST['username'];
				$pass = $_POST['password'];
				
				$login=file('loginFile.txt');

				foreach($login as $korisnik) {
					$podaci=explode(' ',$korisnik);
					if($podaci[0] == $user && $podaci[1]==md5($pass)) {
						$_SESSION['login'] = true;
						$greska="";
						$radi = true;
						break;
					}
				}
				if(! $radi) {	
						
					function phpAlert($poruka) {
					echo '<script type="text/javascript">alert("' . $poruka . '")</script>';
					}
					
					phpAlert("Pogrešan username ili password...");
					
				}
				
			}

			if($radi) {
				header("Location: index.php");
				
			}
			
			}
		?>	

	

</section>

</BODY>

</HTML>



