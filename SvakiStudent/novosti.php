<!doctype html> 

<html>
<head>
<meta charset=utf-8>
<title> Svaki Student </title>
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="pocetna.css">
</head>
<body>
<div class="tijelo">
		<div class="logo">
			<p id="S1">
				s
			</p>
			<p id="svaki">
				vaki
			</p>
			<p id="S2">
				s
			</p>
			<p id="student">
				tudent
			</p>

		</div>
<div class="stranica">
<div class="Menu">
<?php
	session_start();
	if(isset($_SESSION['sesija'])){
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>LogOut</a></li>
<li><a href='dodavanjeVijesti.php'>Dodaj Vijest</a></li>
</ul>!";
}
	
else
{
		print "<ul>

<li><a href='pocetna.php'>Početna</a></li>
<li><a href='novosti.php'>Raspored kurseva</a></li>
<li><a href='linkovi.php'>Linkovi</a></li>
<li><a href='kontakt.php'>Kontakt</a></li>
<li><a href='login.php'>Login</a></li>

</ul>";
}
?>
</div>
</div>
<br>
	<br>
	<br>
	<br>
<div id="redovi_kolone">
	
	<table>
  <tr>
	<th>
		<p> Predmet
		</p>
	</th>
	<th>
		<p> 
		Petak
		</p>
	</th>
	<th>
		<p>
		Subota
		</p>
	</th>
	<th>
		<p> 
		Nedjelja
		</p>
	</th>
	<th>
		<p>
		Predavač
		</p>
	</th>
  </tr>
  <tr>
  <td><p>Fizika</p></td>
  <td><p>12h</p></td>
  <td><p>13h</p></td>
  <td><p>17:40h<br>
		 12:30h
		 </p></td>
  <td><p>Xhavier Xcesi</p></td>
  </tr>
  <tr> 
  <td><p>Hemija</p></td>
  <td><p>17:40h</p></td>
  <td><p>18:40h</p></td>
  <td><p>12h<br>
		 17h<br>
		 13:45h
		 </p></td>
  <td><p>Alejandro Costarica</p></td>
  </tr>
  <tr> 
  <td><p>Matematika</p></td>
  <td><p>14:45h</p></td>
  <td><p>15:45h</p></td>
  <td><p>12h</p></td>
  <td><p>Sokrat Ahilej</p></td>
  </tr>
  
  <!-- <tr> 
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr> -->
</table>
</div>

</div>
</body>
</html>