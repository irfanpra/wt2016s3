<!DOCTYPE html>
<html>
<HEAD>
<TITLE>Kontakt</TITLE>
<link rel="stylesheet" type="text/css" href="../stil.css">
<script src="../Skripte/validacijaForme.js"></script>
<META charset=utf-8>
</HEAD>
<body>
<?php
session_start();
?>
  <div id="zaglavlje">
  	<h1>Sound Art Studio</h1>
  <div id="logo">
  	<div id="kruzic"></div>
  	<div id="linija"></div>
  </div>
  </div>
  <a class="skip-main" href="kontakt">Preskoči čitanje menija</a>
  	<div id="meni">
  		<ul>
  		<li><a href="index.php">Naslovnica</a></li>
  		<li><a href="omeni.php">O meni</a></li>
  		<li><a href="Coveri.php">Coveri</a></li>
  		<li><a href="Cjenovnik.php">Cjenovnik</a></li>
  		<li><a href="#">Kontakt</a></li>
      <li><a href="Login.php">Login</a></li>
  		</ul>
  	</div>
    <div class="kontaktiraj">
    <ul class="drustvenemreze">
    <li><a class="fb" href="https://www.facebook.com/halid.hajdukovic?fref=ts" target="_blank">Facebook</a></li>
    <li><a class="yt" href="https://www.youtube.com/channel/UCXasrB2DKH0pSv3w4Fnua4g" target="_blank">Youtube</a></li>
    </ul>
  </div>

<div id="kontakt">
  <form class="FormaKontakt">
    <div class="legendaKontakt">Kontaktirajte nas!</div>

    <label>Ime</label>
    <input type="text" id="ime" name="ime" onkeyup="ValidirajIme(this)" required>

    <label>Prezime</label>
    <input type="text" id="prezime" name="prezime" onkeyup="ValidirajPrezime(this)" required>

    <label>E-mail</label> <img src="../Slike/hint.png" alt="Unesite e-mail" title="Email mora biti u formatu primjer@primjer.primjer" id="email_hint"/>
    <input type="email" id="mail" name="mail" onkeyup="ValidirajMail(this)" required>
    <br>
<!-- Ukoliko se unese broj telefona, ne mora se unijeti pitanje, korisnik ce biti pozvan-->
    <label>Broj telefona</label> <img src="../Slike/hint.png" alt="Unesite broj telefona" title="Telefon mora biti u formatu 06x/xxx-xxx(x)" id="telefon_hint"/>
    <input type="text" id="telefon" name="telefon" onkeyup="ValidirajTelefon(this)" required>

    <label>Vaše pitanje:</label>
    <textarea id="pitanje" name="pitanje" required></textarea>
    <br><br>

    <input type="submit" id="dugme" value="Pošalji upit" onclick="ProvjeriPolja(this)">
  </form>

</div>
</body>
</html>
