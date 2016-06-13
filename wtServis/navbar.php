	<div class="wrap">
		<div class="arrow-up">
			<p>D</p>
			<p class="autodelta">AUTODELTA</p>
		</div>
	</div>

	<div id="meni">
		<ul>
			<li id="logo_li"></li>
			<li <?php echo ($page == 'index') ? "class='odabrani'" : ""; ?> >
				<a href="index.php">Naslovnica</a>
			</li><li <?php echo ($page == 'tabela') ? "class='odabrani'" : ""; ?> >
				<a href="tabela.php">Tabela</a>
			</li><li <?php echo ($page == 'kontakt') ? "class='odabrani'" : ""; ?> >
				<a href="forma.php">Kontakt</a>
			</li><li <?php echo ($page == 'linkovi') ? "class='odabrani'" : ""; ?> >
				<a href="linkovi.php">Linkovi</a>
			</li><li <?php echo ($page == 'login') ? "class='odabrani'" : ""; ?> >
				<a href="login.php">Login</a>
			</li>
		</ul>
	</div>