<!DOCTYPE HTML>

<HTML>
<HEAD>
<title>Lovacko društvo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</HEAD>

<BODY>

<header>


<h1 id="naslov"> LD "Kaćunski zec" Kaćuni-Busovača </h1>


<div class="mojLogo1">
  <div class="L"> L </div>
  <div class="D"> D </div>
  <div class="KZ"> Kaćunski zec </div>
  
</div>
</header>

<nav class="meni">
<ul>
	<li><a href="index.php">Početna</a></li>
	<li><a href="Lov.php">Lov</a></li>
	<li><a href="O_nama.php">O nama</a></li>
	<li><a href="Korisni_linkovi.php">Korisni linkovi</a></li>
	<li><a href="Kontakt.php">Kontakt</a></li>
	<li><a href="Login.php">Login</a></li>
	<?php
	session_start();
	if(isset($_SESSION['login'])){
	print "<li><a href='UnosNovosti.php'>Dodaj novost</a></li>";
	}
	?>
	
</ul>

</nav>

<section>
<p id="tabelaParag">U tabeli ispod napisane su neke vrste divljaći koje su popularne 
na našim prostorima, "sezona lova" tj. period kada je dozvoljeno loviti
konkretnu divljać i slika.
</p>
<table id="sezonaLova">
	<caption id="capt">Sezona lova </caption>
  <tr>
    <th>Naziv divljaći</th>
    <th>Slika</th> 
    <th>Stanište</th>
	<th>Period lova</th> 
    <th>Napomena</th>
  </tr>
  <tr class="parni">
    <td>Srndać</td>
    <td> <img src="Slike/srndac.jpg" alt="nemaslike" width="150" height="150"></td> 
    <td>šuma i planinske poljane</td>
	<td> 06.juni-30.august</td> 
	<td> </td> 
  </tr>
   <tr class="neparni">
    <td>Zec</td>
    <td> <img src="Slike/zec.jpg" alt="nemaslike" width="150" height="150"></td> 
    <td>šuma, livade, u blizini poljoprivrednih usjeva</td>
	<td> 25.oktobar-29.novembar</td> 
	<td> </td> 
  </tr>
  <tr class="parni">
    <td>Fazan</td>
    <td> <img src="Slike/fazan.gif" alt="nemaslike" width="150" height="150"></td> 
    <td>šuma</td>
	<td> 25.oktobar-27.decembar</td> 
	<td> </td> 
  </tr>
  <tr class="neparni">
    <td>Divlja svinja</td>
    <td> <img src="Slike/divlja_svinja.jpg" alt="nemaslike" width="150" height="150"></td> 
    <td>šuma</td>
	<td> 04.oktobar-14.februar</td> 
	<td> </td> 
  </tr>
  <tr class="parni">
    <td>Lisica</td>
    <td> <img src="Slike/lisica.jpg" alt="nemaslike" width="150" height="150"></td> 
    <td>šuma</td>
	<td> 01.septembar-31.mart</td> 
	<td> </td> 
  </tr>

</table>



</section>



</BODY>

</HTML>


