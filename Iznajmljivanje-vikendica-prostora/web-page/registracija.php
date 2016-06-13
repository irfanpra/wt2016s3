<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logo_ikona.png">
<link rel="stylesheet" type="text/css" href="indexCSS.css">
<link rel="stylesheet" type="text/css" href="logo.css">
<link rel="stylesheet" type="text/css" href="artiklCSS.css">
<link rel="stylesheet" type="text/css" href="kontaktCSS.css">
<link rel="stylesheet" type="text/css" href="ponudaCSS.css">
<link rel="stylesheet" type="text/css" href="registracijaCSS.css">
<script src="validacije.js"></script>
<title> Registracija | Iznajmljivanje</title>
<?php
session_start();
?>
</head>
<body onload="pocetna();">
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
<div id="one1">
&nbsp;
</div>

<div id="two2">
<div class="centriraj">
<div class="naslov2">
  Registruj se
 </div>
<div class="velikiR">

<form id="formaReg">
<table class="tabela">


  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Ime: </label></td>
  <td> <input type="text" class="tekstK" placeholder="" id="imeTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Prezime: </label></td>
  <td> <input type="text" class="tekstK" placeholder="" id="prezimeTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *E-mail: </label></td>
  <td> <input type="email" name="email" class="tekstK" placeholder="primjer@gmail.com" id="emailTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Telefon: </label></td>
  <td> <input type="tel" name="usrtel" class="tekstK" placeholder="+38761-123-123" id="phoneTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Username: </label></td>
  <td> <input type="text" class="tekstK" placeholder="4-10 karaktera" id="usernameTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Lozinka: </label></td>
  <td> <input type="password" class="tekstK" placeholder="6-20 karaktera" id="pass1Txt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Potvrda lozinke: </label></td>
  <td> <input type="password" class="tekstK" placeholder="unesite lozinku još jednom" id="pass2Txt"></td>
  </tr>
  <tr>
  <td> </td>
  </tr>
  <tr>
  <td class="zaCelije"> &nbsp;</td>
  <td class="tekstMali"><input type="checkbox" class="tekstRe" id="agreeCheck"> *Saglasan sam sa uslovima i pravilima korištenja stranice iznajmljivanje.ba i u potpunosti ih prihvatam.</td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
   <tr>
  <td> </td>
  <td class="poravnajR"> <input type="button" value="Submit" class="dugme2R" onclick="submituj();"></td>
  </tr>
  <tr>
  <td> </td>
  </tr>
  <tr>
  <td class="zaCelije"> &nbsp;</td>
  <td class="tekstMali"> * obavezna polja</td>
  </tr>

 </table>
 </form>
</div>
</div>
</div>

<div id="three3">

</div>
</div>




<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>