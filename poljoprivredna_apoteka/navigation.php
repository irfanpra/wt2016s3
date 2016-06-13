<div id="menu" class="row">
	<a href="index.php">
		<div id="logo" class="col-4">
			<div class="box-logo-name">
				<div class="box-logo">
					<div class="raindrop green_ligth"></div>
					<div class="raindrop green"></div>
					<div class="raindrop green_ligth"></div>
					<div class="raindrop green"></div>
					<div class="raindrop green_ligth"></div> 
				</div>
				Agro Land
			</div>
		</div>
	</a>
	<ul class="col-5">
		<li><a href="index.php">Početna</a></li>
		<li class="dropdown">
			<a href="#">Proizvodi</a>
			<div class="dropdown-content">
			    <a href="lista_proizvoda.php">Tip proizvoda 1</a>
			    <a href="lista_proizvoda.php">Tip proizvoda 1</a>
				<a href="lista_proizvoda.php">Tip proizvoda 1</a>
				</div>
			</li>
		<li><a href="#">Obavještenja</a></li>
		<li><a href="onama.php">O nama</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
	</ul>
	<ul class="right-menu">
		<!--<li class="search">
			<a href="#">
				<img src="img/page/search.png" alt="pretraga ico">
			</a>
			<input name="search" type="text" placeholder="Pretraga"/>
		</li>
		-->
			<?php
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				if(!($_SERVER['REQUEST_URI'] == '/prijava.php') && !($_SERVER['REQUEST_URI'] == '/odjava.php')){
					if(!isset($_SESSION['login_user'])){
						echo '<li><a href="prijava.php">Prijava</a></li>';
					}
					else{
						echo "<li class='dropdown'>
							<a href='#'>Administrator</a>
							<div class='dropdown-content'>
							    <a href='nova_vijest.php'>Nova vijest</a>
							    <a href='novi_proizvod.php'>Novi proizvod</a>
							    <a href='odjava.php'>Odjava</a>
							</div>";
					}
				}
			?>
	</ul>
</div>