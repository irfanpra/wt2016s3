<!DOCTYPE html>

	<html>
	<head>
	<meta charset="UTF-8">
	<title>SkiCentarNH</title>
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
			<p class="pageTitle"> Info </p>
			
			<table id="infoTable">
				<tr>
					<th>Smjestaj</th>
					<th>Velicina</th>
					<th>Nesto</th>
					<th>Dodatak</th>
					<th>Cijena</th>
				</tr>
				
				<tr>
					<td>Soba</td>
					<td>Dvokrevetna</td>
					<td>Soba</td>
					<td>Dnevna propusnica</td>
					<td>50$</td>
				</tr>
				
				<tr>
					<td class="td2">Soba</td>
					<td class="td2">Trokrevetna</td>
					<td class="td2">Soba</td>
					<td class="td2">Dnevna propusnica</td>
					<td class="td2">60$</td>
				</tr>
				
				<tr>
					<td>Apartman</td>
					<td>Trokrevetni</td>
					<td>Soba</td>
					<td>Dnevna propusnica, ski oprema</td>
					<td>90$</td>
				</tr>
				
				<tr>
					<td class="td2">Apartman</td>
					<td class="td2">Dvokrevetni</td>
					<td class="td2">Soba</td>
					<td class="td2">Dnevna propusnica, ski oprema</td>
					<td class="td2">100$</td>
				</tr>
			</table>
		</div>	
	</body>
</html>