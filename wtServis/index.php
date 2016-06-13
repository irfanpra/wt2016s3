<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Index stranica</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="scripts/index.js"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php
		session_start();
		$page = 'index';
		if(isset($_SESSION['username']))
		{
			include 'navbar-admin.php';
		} 
		else
			include 'navbar.php';
	?>
	
	<div id="vertical">
		<br><label> <i>Vremenski prikaz: </i></label><br>
		<ul>
			<li>
				<a href="#" onclick="return sortiraj('Svi');">Svi</a>
			</li><li>
				<a href="#" onclick="return sortiraj('Dnevni');">Dnevni</a>
			</li><li>
				<a href="#" onclick="return sortiraj('Sedmicni');">Sedmični</a>
			</li><li>
				<a href="#" onclick="return sortiraj('Mjesecni');">Mjesečni</a>
			</li><br><br>
		</ul>
		<label> <i>Način sortiranja: </i></label><br><br>
		<div id="sortish">
			<input type="radio" id="s1" name="sortiranje" value="vremenski" onclick="return rad_1()"><a href="#" onclick="return rad_v()"><i>Vremenski</i></a><br>
			<input type="radio" id="s2" name="sortiranje" value="abecedno" onclick="return rad_2()"> <a href="#" onclick="return rad_a()"><i>Abecedno</i></a>
		</div><br><br>
	</div>
	
	
 	<div id="vijesti">
		<!-- <div class="novost">
			<img src="images/skoda.jpg" alt="skoda"/>
			<h4>Naslov</h4>
			<p> Za ono zbog čega je stvoren, Citigo je odličan auto. Istinska indigo generacija! Optimalno opremljen, svidjeće se mladima, ali i njihovim roditeljima, ako im budžet omogućava dovoljno novca za posjedovanje barem dva automobila.
			<br><a href="#">Više ..</a></p>
		</div> -->
	</div>
	
</BODY>
</HTML>
