<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logo_ikona.png">
<link rel="stylesheet" type="text/css" href="indexCSS.css">
<link rel="stylesheet" type="text/css" href="logo.css">
<link rel="stylesheet" type="text/css" href="artiklCSS.css">
<link rel="stylesheet" type="text/css" href="opsirnijeCSS.css">
<link rel="stylesheet" type="text/css" href="kontaktCSS.css">
<title> Opširnije | Iznajmljivanje</title>
<?php
session_start();
?>
</head>
<body>
<div class="pozadina">
  <!--<img src="pozadina.jpeg" width="100%" height="100%"/>-->
</div>
	<div class="okvir">
  		<div class="kuca"></div>
  		<div class="krovL"></div>
  		<div class="krovR"></div>
  		<div class="ulaz"></div>
  		<div class="predulaz"></div>
  		<div class="dimnjak"></div>
  		<div class="dim1"></div>
  		<div class="dim2"></div>
  		<div class="dim3"></div>
  		<div class="prozorL"></div>
  		<div class="prozorR"></div>
	</div>
  <div class="naslov">
  <b>Iznajmljivanje | Sve Na Jednom Mjestu</b>
  </div>

  <nav>
<div class="meni">
  <a href="index.php" class="dugme">Početna</a>|
  <a href="ponuda.php" class="dugme">Ponuda</a>|
  <a href="registracija.php" class="dugme">Registracija</a>|
  <a href="kontakt.php" class="dugme">Kontakt</a>|
  <a href="oNama.php" class="dugme">O Nama</a>
  <?php
if(isset($_SESSION['username']))
   print '|<a href="novosti.php" class="dugme">+Novost</a>';
  ?>
</div>
</nav>
<div class="tijelo">



<div class="divC">
 
  <div class="noviDiv">
  <img class="slikino3" src="kuca.jpg" alt=""> 
  </div>
  <table class="tabela3">
  <tr>
  <td colspan="4" class="heder"> Iznajmljuje se apartman na Bahamima </td>
  </tr>
  <tr>
  <td  class="lijevi"> Tip objekta: </td> <td class="desni"> Vikendica / Apartman </td>
  <td  class="lijevi"> Lokacija: </td> <td class="desni"> Bahami </td>
  </tr>
  <tr>
  <td  class="lijevi"> Kapacitet: </td> <td class="desni"> 20 osoba </td>
  <td  class="lijevi"> Broj ležaja: </td> <td class="desni"> 12 </td>
  </tr>
  <tr>
  <td  class="lijevi"> Površina: </td > <td class="desni"> 200 m^2 </td>
  <td  class="lijevi"> Kontakt: </td> <td class="desni"> 061-112-445 </td>
  </tr>
  <tr>
  <td  class="lijevi"> E-mail: </td> <td class="desni"> email@gmail.com </td>
  <td  class="lijevi"> Cijena: </td> <td class="desni"> 1500KM / 7dana </td>
  </tr>
  <tr>
  <td colspan="4" class="donji" > Iznajmljuje se apartman za 20 osoba, Bahami.
Apartman je ekskluzivno uređen, 200m2.
 Apartman se nalazi 50 m od mora, u blizini svih sadržaja.Plaža je pješčana, idealna za djecu i porodični odmor.
 </td>
  </tr>
  </table>
  <div  class="maliDiv">
    <form>
  <label class="labela"> Ocijeni: </label> &nbsp;&nbsp;&nbsp;
  <label class="labela"> 1 </label><input type="range" min="1" max="5" > <label class="labela"> 5 </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="Pošalji" class="dugme4"> 
  </form>
  </div>
</div>

</div>



<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>