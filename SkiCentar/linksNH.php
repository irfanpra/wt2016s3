<!DOCTYPE html>

	<html>
	<head>
	<meta charset="UTF-8">
	<title>Ski Centar NH</title>
	<link rel="stylesheet" type="text/css" href="stilNH.css">
	</head>
	
	<body>
		
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
			<p class="pageTitle"> Links </p>
			
			<ul id="linkoviList">
			<li><a href="http://www.markonisport.rs/ski-oprema">Ski oprema <img src="images/img01.jpg"> </a> </li>
			<li><a href="http://www.bjelasnica.ba/ski-centar">Ski centar Bjelasnica  <img src="images/img01.jpg"> </a> </li>
			<li><a href="http://www.jahorina.org/info/mapa.php">Ski staze Jahorina <img src="images/img01.jpg"> </a> </li>
			</ul>
		</div>
		
	</body>
	</html>