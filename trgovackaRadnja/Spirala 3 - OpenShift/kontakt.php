﻿<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Trgovacka radnja</TITLE>
<script src="kontakt.js"></script>
<link rel="stylesheet" type="text/css" href="stilKontakt.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

  <div class="linijaGornja"> </div>
  <div class="linijaDonja">  </div>
  <div class="xDesniDio">    </div>
  <div class="xLijeviDio">   </div>
  <div class="xSredina">     </div>

  <a href="login.php"    class="logout" TARGET="_self">LOGOUT</a>;
  <A HREF="naslovna.php" class="n"      TARGET="_self">NASLOVNA</A> &nbsp;
  <A HREF="artikli.php"  class="a"      TARGET="_self">AUTA</A> &nbsp;
  <A HREF="kontakt.php"  class="k" 	    TARGET="_self">KONTAKT</A> &nbsp;
  <A HREF="tabela.php"   class="t" 	    TARGET="_self">TABELA</A> &nbsp;
  <A HREF="linkovi.php"  class="l" 	    TARGET="_self">LINKOVI</A> &nbsp;
  
  <div class="slike">
    <IMG class="home"    src="http://www.symbols.com/gi.php?type=1&id=1842&i=1" alt="slika naslovna">
    <IMG class="car"     src="http://www.symbols.com/gi.php?type=1&id=329&i=1" alt="slika auto">
    <IMG class="contact" src="http://www.symbols.com/gi.php?type=1&id=300&i=1" alt="slika kontakt">
    <IMG class="table"   src="http://www.symbols.com/gi.php?type=1&id=320&i=1" alt="slika info">
    <IMG class="links"   src="http://www.symbols.com/gi.php?type=1&id=372&i=1" alt="slika link">
  </div>
  
  <div class="formaOkvir">
    <form id="forma">
	  <br> <br> 
	  <label for="ime"> Ime:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	  <input type="text" name="ime" id="ime"         onkeyup="validirajPolje(this)" onblur="validirajPolje(this)" > <br> <br>
	  <label for="prezime"> Prezime:&nbsp;</label>
	  <input type="text" name="prezime" id="prezime" onkeyup="validirajPolje(this)" onblur="validirajPolje(this)" > <br> <br>
	  <label for="email"> E-mail:&nbsp;&nbsp;&nbsp;</label>
	  <input type="email" name="email" id="email"    onkeyup="validirajPolje(this)" onblur="validirajPolje(this)" > <br> <br>
	  <label for="broj"> Telefon:&nbsp;&nbsp;</label>
	  <input type="tel" name="broj" id="broj"        onkeyup="validirajPolje(this)" onblur="validirajPolje(this)" > <br> <br>
	  <input type="submit" id="potvrdi" value="POTVRDI" onClick="validirajSve(this)" > <br> <br> 
	</form>
  </div>

</BODY>
</HTML>