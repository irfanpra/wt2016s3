<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logo_ikona.png">
<link rel="stylesheet" type="text/css" href="indexCSS.css">
<link rel="stylesheet" type="text/css" href="logo.css">
<link rel="stylesheet" type="text/css" href="artiklCSS.css">
<link rel="stylesheet" type="text/css" href="ponudaCSS.css">
<title> Ponuda | Iznajmljivanje</title>
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
  <a href="index.php" class="dugme">Ponuda</a>|
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


<div class="sve">
<div class="naslov2">
  Vikendice / Apartmani
  </div>
<div class="divBB">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="kuca.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Bahami <br> <br>
    <b>Kapacitet:</b> 20 osoba <br> <br>
    <b>Cijena:</b> 1500KM <br> <br>
    <b>Kontakt:</b> 061-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divBB">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="kuca.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Bahami <br> <br>
    <b>Kapacitet:</b> 20 osoba <br> <br>
    <b>Cijena:</b> 1500KM <br> <br>
    <b>Kontakt:</b> 061-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divBB">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="kuca.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Bahami <br> <br>
    <b>Kapacitet:</b> 20 osoba <br> <br>
    <b>Cijena:</b> 1500KM <br> <br>
    <b>Kontakt:</b> 061-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divBB">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="kuca.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Bahami <br> <br>
    <b>Kapacitet:</b> 20 osoba <br> <br>
    <b>Cijena:</b> 1500KM <br> <br>
    <b>Kontakt:</b> 061-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divBB">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="kuca.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Bahami <br> <br>
    <b>Kapacitet:</b> 20 osoba <br> <br>
    <b>Cijena:</b> 1500KM <br> <br>
    <b>Kontakt:</b> 061-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
</div>

<div class="sve">
<div class="naslov22">
  Stanovi
  </div>
<div class="divDD">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="stan.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Zenica <br> <br>
    <b>Kapacitet:</b> 2 osobe <br> <br>
    <b>Cijena:</b> 300KM <br> <br>
    <b>Kontakt:</b> 061-122-445 <br><br> 
    <a href="opsirnije.php" class="dugme4a">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divDD">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="stan.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Zenica <br> <br>
    <b>Kapacitet:</b> 2 osobe <br> <br>
    <b>Cijena:</b> 300KM <br> <br>
    <b>Kontakt:</b> 061-122-445 <br><br> 
    <a href="opsirnije.php" class="dugme4a">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divDD">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="stan.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Zenica <br> <br>
    <b>Kapacitet:</b> 2 osobe <br> <br>
    <b>Cijena:</b> 300KM <br> <br>
    <b>Kontakt:</b> 061-122-445 <br><br> 
    <a href="opsirnije.php" class="dugme4a">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divDD">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="stan.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Zenica <br> <br>
    <b>Kapacitet:</b> 2 osobe <br> <br>
    <b>Cijena:</b> 300KM <br> <br>
    <b>Kontakt:</b> 061-122-445 <br><br> 
    <a href="opsirnije.php" class="dugme4a">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divDD">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="stan.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Zenica <br> <br>
    <b>Kapacitet:</b> 2 osobe <br> <br>
    <b>Cijena:</b> 300KM <br> <br>
    <b>Kontakt:</b> 061-122-445 <br><br> 
    <a href="opsirnije.php" class="dugme4a">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
</div>



<div class="sve">
<div class="naslov222">
  Poslovni prostori
  </div>
<div class="divEE">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divEE">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divEE">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divEE">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divEE">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
</div>

<div id="cetvrti">
<div class="divAb">
  <form>
  <table class="tabela2">
  
  <tr>
  <td class="stil">
  <input type="radio" name="tipN" value="pp"> Poslovni prostori<br>
  <input type="radio" name="tipN" value="stanovi"> Stanovi / Kuće <br>
  <input type="radio" name="tipN" value="va"> Vikendice / Apartmani <br>
  </td>
  </tr>
  <tr>
  <td class="stil">  <br> <input type="text" placeholder="Traži" class="tekst2"><input type="submit" class="dugme6" value=" ">
  </td>
  </tr>
  
  </table>
  </form>
  
</div>
</div>

</div>



<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>