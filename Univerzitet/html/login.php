<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<title>UNSA - Log in</title>
</head>
<body>
	<header>
		<div id="logo">
			<h5 id="uni">
				<span class="char1">U</span>
				<span class="char2">N</span>
				<span class="char3">I</span>
				<span class="char4">V</span>
				<span class="char5">E</span>
				<span class="char6">R</span>
				<span class="char7">S</span>
				<span class="char8">I</span>
				<span class="char9">T</span>
				<span class="char10">A</span>
				<span class="char11">S</span>
			</h5>
		<div id="krug"> <h2>UNSA</h2></div>
			<h5 id="stud">
				<span class="ch1">S</span>
				<span class="ch2">T</span>
				<span class="ch3">U</span>
				<span class="ch4">D</span>
				<span class="ch5">I</span>
				<span class="ch6">O</span>
				<span class="ch7">R</span>
				<span class="ch8">U</span>
				<span class="ch9">M</span>
				<span class="ch11">S</span>
				<span class="ch12">A</span>
				<span class="ch13">R</span>
				<span class="ch14">A</span>
				<span class="ch15">I</span>
				<span class="ch16">E</span>
				<span class="ch17">V</span>
				<span class="ch18">O</span>
				<span class="ch19">E</span>
				<span class="ch20">N</span>
				<span class="ch21">S</span>
				<span class="ch22">I</span>
				<span class="ch23">S</span>
			</h5>
		</div>

		<h1>Univerzitet u Sarajevu</h1>
		<!--<h3>University of Sarajevo</h3>-->
		<!--<img src="unsa_logo.jpg" alt="unsa_logo">-->	
	</header>
	
	<nav>
		<ul class="menu">
			<li><a href="../index.php">Početna</a></li>
			<li><a href="../html/about.php">O Univerzitetu</a></li>
			<li><a href="../html/fakulteti.php">Članice</a></li>
			<li><a href="../html/contact.php">Kontakt</a></li>
			<li><a href="#" class="active">Log in</a></li>
		</ul>
	</nav>
	<div class="stranica">
		<aside>
			<a href="https://www.isss.ba/LoginPage/login.htm" target="_blank"><img src="../slike/isss.jpg" alt="isss"></a>
			<a href="http://www.spus.ba/" target="_blank"><img src="../slike/spus.png" alt="spus"></a>
			<a href="http://www.erasmus-unsa.ba/" target="_blank"><img src="../slike/erasmus.jpg" alt="erasmus"></a>
			<a href="http://www.student-centar.ba/" target="_blank"><img src="../slike/sc.jpg" alt="studentski centar"></a>
			<a href="http://www.hea.gov.ba/" target="_blank"><img src="../slike/hea.jpg" alt="hea"></a>
			<a href="http://www.sus.ba/" target="_blank"><img src="../slike/susbih.jpg" alt="sus"></a>
			<a href="http://www.anubih.ba/" target="_blank"><img src="../slike/anu.jpg" alt="Akademija nauka i umjetnosti BiH"></a> 
		</aside>
	<div class="content">
		<section>
		
		<?php 
		$errorUser = "";
		$errorPass = "";

		if (isset($_REQUEST['username'])) {
			if(testLogIn()) {
				$username = $_REQUEST['username'];
				$_SESSION['username'] = $username;
				echo '<script> window.location = "../index.php"
								alert("Welcome: " + "'.$username.'")</script>';
			}
		}

		function testLogIn() {
			$userFile = fopen("../users.txt", "r");
			$fileContent = fread($userFile, filesize("../users.txt"));
			fclose($userFile);

			$userInfo = explode(",", $fileContent);

			$sameUser = strcmp($_REQUEST['username'], $userInfo[0]);
			$samePass = strcmp(md5($_REQUEST['password']), $userInfo[1]);
			
			if ($sameUser != 0) {
				global $errorUser;
				$errorUser = "Nepostojeci user!";
				return false;
			}
			else if ($samePass != 0) {
				global $errorPass;
				$errorPass = "Pogresna sifra!";
				return false;
			}
			return true;
		}
		?>

		<form action="../html/login.php" method="post">
			User: <br>
			<input type="text" name="username" value="<?php 
			if(isset($_REQUEST['username']))
			print htmlentities($_REQUEST['username'], ENT_QUOTES);
				?>"> <span class="error"> <?php echo $errorUser ?></span> <br>
			Password: <br>
			<input type="password" name="password"> <span class="error"> <?php echo $errorPass ?></span><br> <br>
			<input type="submit" name="btnLogin" value="Log in">
		</form>

		</section>
	</div>
	</div>
	<footer>
		<p>Developed by Mirzet Brkić WT 2016</p>
	</footer>
</body>
</html>