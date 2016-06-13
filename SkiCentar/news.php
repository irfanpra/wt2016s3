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
			
		</ul>
		</div>
		
		<div class="pageContent">
			<div class="logo"></div>
			<p class="pageTitle"> Gallery </p>
			
			<form id="newsInput" name="NewsInput" onsubmit="return ValidirajNewsInput(this);" action="news.php" method="get">
			
			 <?php 
				if (isset($_REQUEST['saveNews']) && $_REQUEST['saveNews'] == 'Save'){
					if(empty($_REQUEST['naslovN']) || empty($_REQUEST['tekstN'])){
						echo "<p id=\"phpError\">Fields must not be empty!<p>";
				}
				else{
					$newsL = file("newslist.csv");
					$txt=str_replace(',','#',$_REQUEST['tekstN']);
					$newsTxt=str_replace(array("\n\r", "\n", "\r"), ' ', $txt);
					$date=date("Y-m-d")."T".date("H:i:s");
					$add = $_REQUEST['naslovN'] . "," . $newsTxt ."," . $date . "/*/";
					array_push($newsL, $add);
					file_put_contents("newslist.csv", $newsL);
					header("Location: indexNH.php");
				}
			}
			?>
			
			 <label for="naslov">Title </label><br>
			<input id="naslovN" type="text" name="naslovN" placeholder="Title" onkeyup="validirajNaslov();"  />
			<br>
			 <label for="tekstN">Password </label><br>
			 <textarea id="tekstN" name="tekstN" cols="50" rows="8" onkeyup="validirajTekst();" ></textarea>
			 <br>
			 <input  id="saveNews" name="saveNews"  type="submit"  value="Save" /> 
			
			</form>
		</div>
		
		
		
	</body>
	</html>