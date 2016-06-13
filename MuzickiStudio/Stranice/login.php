<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Login</TITLE>
		<link rel="stylesheet" type="text/css" href="../stil.css">
		<META charset=utf-8>
		</HEAD>
		<BODY>
			<?php
			session_start();
			$poruka = '';
			$uredu = false;

			if (isset($_POST['loginSubmit']) && !empty($_POST['username']) && !empty($_POST['password'])) 
			{
				$usernameT = htmlspecialchars($_POST['username']);
				$passwordT = htmlspecialchars($_POST['password']);
				
				$podaci=file('../loginPodaci.csv');

				foreach($podaci as $korisnik) {
					$podatak=explode(',',$korisnik);
					if($podatak[0] == $usernameT && $podatak[1]==md5($passwordT)) {
						$_SESSION['login'] = true;
						$poruka="";
						$uredu = true;
						break;
					}
				}
				if(!$uredu) {	
					$poruka = 'Pogrešan username ili password';
					$_SESSION['login'] = false;
				}
			}

			if($uredu) {
				header("Location: admin.php");
			}
			?>  
			
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
					<li><a href="#">Login</a></li>
				</ul>
 			</div>

			<div id="LoginPage">
  				<form action="login.php" class="login" method="post">
 					<div class="LoginInput">
 						<div class="legend">Molimo unesite Vaše login podatke:</div>
						<br><label>Username</label>
						<input type="text" id="username" name="username" placeholder="Username" required>
						<label>Password</label>
						<input type="password" id="password" name="password" placeholder="Password" required />
					</div>
 					<div id="Poruka"><h4><?php echo $poruka; ?></h4></div>
					<input type="submit" name="loginSubmit" value="OK" class="LoginSubmit">

				</form> 

			</div> 
		</BODY>
	</HTML>
