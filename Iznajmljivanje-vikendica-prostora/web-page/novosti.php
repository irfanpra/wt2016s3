<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo("Morate biti logovani za pristup ovoj stranici!");
    exit();
}
$flag=0;
if (isset($_REQUEST['Sacuvaj']) && $_REQUEST['Sacuvaj'] == 'Sačuvaj') {
            $imenik = file("novosti.csv"); 
            $text = htmlEntities($_REQUEST['naslovNovosti'], ENT_QUOTES);
            $text2 = htmlEntities($_REQUEST['tekstNovosti'], ENT_QUOTES);
            $text = str_replace(',', '&#44;', $text); 
            $text2 = str_replace(',', '&#44;',$text2); 
            $text2 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br>", $text2);
            $novi = $text.",".$text2.",".date('Y-m-d H:i:s').",".$_REQUEST['kodNovosti'].",".$_REQUEST['telefonNovosti']."\n";
            array_push($imenik, $novi);
            file_put_contents("novosti.csv", $imenik);
            $flag=1;             
        }
?>
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
<link rel="stylesheet" type="text/css" href="noviCSS.css">
<script src="validacijeNove.js"></script>
<title> Kreiraj Novost | Iznajmljivanje</title>

</head>
<body onload="pocetna();"> <!-- bilo onload="pocetna();"-->
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
   <a href="oNama.php" class="dugme">O Nama</a>|
   <a href="novosti.php" class="dugme">+Novost</a>

</div>
</nav>
<div class="tijelo">
<div id="one1">
&nbsp;
</div>

<div id="two2">
<div class="centriraj">
<div class="naslov2">
  Napiši novost
  <?php if($flag == 1){
print '<span class=naslovZeleni> - Uspješno ste dodali novost!</span>';
$flag=0;}
?>
</div>
<div class="velikiR">

<form onsubmit="return submituj()" method="post" action="novosti.php" id="formaReg">
<table class="tabela">


  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Naslov: </label></td>
  <td> <input type="text" name ="naslovNovosti" class="tekstK" placeholder="Naslov..." id="naslovTxt"/></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> *Tekst: </label></td>
  <td> <textarea class="multiline2" name="tekstNovosti" placeholder="Tekst..." id="novostTxt"/></textarea></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Kod države: </label></td>
  <td> <input type="text" name ="kodNovosti" class="tekstK" placeholder="ba" id="kodTxt"/></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Broj telefona: </label></td>
  <td> <input type="text" name ="telefonNovosti" class="tekstK" placeholder="+387-61-123-456" id="telefonTxt"/></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
   <tr>
  <td> </td>
  <td class="poravnajR"> <input type="submit" name="Sacuvaj" value="Sačuvaj" class="dugme2R"></td> <!--onclick="submituj();"-->
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