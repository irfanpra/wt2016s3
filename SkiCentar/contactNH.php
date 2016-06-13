<!DOCTYPE html>

	<html>
	<head>
	<meta charset="UTF-8">
	<title>Ski Centar NH</title>
	<link rel="stylesheet" type="text/css" href="stilNH.css">
	</head>
	
	<body>
		<script src="skripta.js" ></script>
		
		<?php
		session_start();
		if (isset($_SESSION['username'])) {
	      echo' <div id="logdiv">
				<ul>
				<li id="log"><a href="logout.php">Log out</a></li>
				</ul>
				</div> ';
		}
		else{
			 echo' <div id="logdiv">
				<ul>
				<li id="log"><a href="login.php">Log in</a></li>
				</ul>
				</div> ';
		}
    ?>
		
		<div class="navigation">
		<ul>
			<li><a href="indexNH.php">Home</a></li>
			<li><a href="infoNH.php">Info</a></li>
			<li><a href="galleryNH.php">Gallery</a></li>
			<li><a href="contactNH.php">Contact</a></li>
			<li><a href="linksNH.php">Links</a></li>
			<?php
			
					if (isset($_SESSION['username'])) {
						echo '<li ><a href="news.php">Add news</a></li>';
					}
			?>
		</ul>
		</div>
		
		<div class="pageContent">
		    <div class="logo"></div>
			<p class="pageTitle"> Contact </p>
			<form id="contactForm" >
			 <label for="name">Full Name </label>
			<input type="text" id="name" onkeyup="valName()" name="firstname" placeholder="John Smith"  />
			<br>
			 <label for="adresa">Address &nbsp; </label>
			 <input type="text" id="adresa" onkeyup="valAdresa()" name="address" placeholder="London 32"  />
			 <br>
			 <label for="email">E-mail &nbsp;&nbsp;&nbsp;&nbsp</label>
			 <input type="email" id="email" onkeyup="valEmail()" placeholder="text@gmail.com">
			 <br>
			 <label for="grade">Page quality</label>
			<input type="number" id="grade" onkeyup="valGrade()" min="1" max="5">
			<br>
			<label for="message">Message</label>
			<br>
			<textarea id="message" onkeyup="valMes()" name="mess" cols="50" rows="8" ></textarea>
			<br>
			<input  id="button"  type="submit"  value="Send" /> 
			<input id="button" type="reset" onclick="resetValidacije()" />
			</form>
		</div>
		
	</body>
	</html>