<!DOCTYPE html>

	<html>  
	<head>
	<meta charset="UTF-8">
	<title>Ski Centar NH</title>
	<link rel="stylesheet" type="text/css" href="stilNH.css">
	</head>
	
	<body onload="postNews()">
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
			<p class="pageTitle"> Home </p>
				
			<div id="odabirNews">
				<label id="selectLAb" for="lab">Odaberite novosti:&nbsp; &nbsp;</label>
				<button id="lab" onclick="prikaziDanas()" class="select" > Danasnje</button>
				<button onclick="prikaziSedmica()" class="select"> Ove sedmice</button>
				<button onclick="prikaziMjesec()" class="select"> Ovog mjeseca</button>
				<button onclick="prikaziSve()" class="select"> Sve Novosti</button>
			</div>
			
			<form id="sortForm" method="get">
				<button name="sortNews" value="time"  class="sort"> Novosti po vremenu</button>
				<button name="sortNews" value="letter"  class="sort"> Novosti abecedno</button>
				</form>
			<div id="pageNews">
			
			<?php
				
				$listNews=explode("/*/",file_get_contents("newslist.csv"));
				$br=count($listNews);
				$br=$br-1;
				
				if(isset($_REQUEST['sortNews']) && $_REQUEST['sortNews']=="letter"){
				sort($listNews);
				for($i=1;$i<=$br;$i++){
				
						$news=explode(",",$listNews[$i]);
						$newsN=str_replace('#',',',$news);
							print '<p class="news">';
							print '<input type="datetime" id="vapp" class="newsHideTime"  value="'.$newsN[2].'"  readonly/>';
							print '<input type="text" id="napp" class="newsTime" readonly/>';
							print '<img src="images/img01.jpg">';
							print   $newsN[0].'<br><br>'.$newsN[1];
							print '</p>';
					}
				}
				/*  novosti su po poredene od prve(vremenski zadnja) do zadnje(vremenski prva)  pa nema potrebe da se sortiraju po vremenu  */
				else{
				for($i=$br-1;$i>=0;$i--){
						$news=explode(",",$listNews[$i]);
						$newsN=str_replace('#',',',$news);
							print '<p class="news">';
							print '<input type="datetime" id="vapp" class="newsHideTime"  value="'.$newsN[2].'"  readonly/>';
							print '<input type="text" id="napp" class="newsTime" readonly/>';
							print '<img src="images/img01.jpg">';
							print   $newsN[0].'<br><br>'.$newsN[1];
							print '</p>';
					}
				}

			?>
			
			</div>
		</div>
	</body>
	</html>