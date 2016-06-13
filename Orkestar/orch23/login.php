<?php 
	if(isset($_POST['btn-login']))
	{
		$myfile = fopen("credentials.txt", "r") or die ("Unable to open file!");
		
		while (!feof($myfile)) 
		{
			
		//	echo "<script language = 'javascript'>";
		//	echo "alert(".fgets($myfile).")";
		//	echo "<br>";
			/*echo fgets($myfile) . "<br>";*/
		//	echo "</script>";
			$username = fgets($myfile);
			$pass = fgets($myfile) ;
		}

		fclose($myfile);
		$usertxt = $_POST['username'];
		$passtxt = $_POST['pass'];
		//die("Fajl : " . $username . "<br>" . $pass . "<br> Forma : " . $usertxt . "<br>" . $passtxt);
		
		if (md5($passtxt) === $pass)
		{
			header("Location: adminpanel.php");		
		}
		else
		{
			echo '<script type="text/javascript">alert("Unesni podaci nisu ispravni! Pokusajte ponovo")</script>';		
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>sempre forte</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Calligraffitti" />
</head>
<body>
	<div id = "top">
		<h2 id = "top-header">sempre forte</h2>
	</div>
	<div id = "div-menu">
		 <ul>
			  <li><a href="index.html">Desavanja</a></li>
			  <li><a href="sponzori.html">Sponzori</a></li>
			  <li><a href="kontakt.html">Kontakt</a></li>
			  <li><a href="sastav.html">Sastav</a></li>
			  <li><a href="prijatelji.html">Prijatelji</a></li>
			  <li><a href="login.php">Log In</a></li>
		</ul> 
	</div>

	<!--default gore-->

	<div id = "div-dashboard">
			<div id = "div-naslov-login">
				Prijavite se
			</div>
			<center>
				<div id="login-form">
					<form method="post">
						<table id = "table-login" align="center" width="30%" border="0">
							<tr>
								<td><input type="text" name="username" placeholder="Your Username" required /></td>
							</tr>
							<tr>
								<td><input type="password" name="pass" placeholder="Your Password" required /></td>
							</tr>
							<tr>
								<td><button id = "login-button" type="submit" name="btn-login">Login</button></td>
							</tr>
						</table>
					</form>
				</div>
			</center>
	    
	</div>
	
</body>
</html>