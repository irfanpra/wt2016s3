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
<link rel="stylesheet" type="text/css" href="noviCSS.css">
<script src="validacijaK.js"></script>
<title> Kontakt | Iznajmljivanje</title>
<?php
session_start();
if (isset($_REQUEST['Logout']) && $_REQUEST['Logout'] == 'Logout')
            session_unset();
?>
</head>
<body onload="pokreni();">
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
<div id="one">
   <div class="divAbcd">
<?php
 $username = "";
 $flag=0;
 if (isset($_SESSION['username']))
        $username = $_SESSION['username'];

 else if (isset($_REQUEST['username'])) {
        $niz = file("korisnici.csv");
        
        for ($i = 0; $i < count($niz); $i++) {
          $info = explode(",", $niz[$i]);

            if ($_REQUEST['username'] == $info[0] && md5($_REQUEST['password']) == $info[1]){
              $username = $_REQUEST['username'];
            $_SESSION['username'] = $username;
            header("Refresh:0");
            break;
            }      
        }
        
        if (!isset($_SESSION['username']))
            $flag = 1;
  }
  
  if (!isset($_SESSION['username'])) {

print '<form method="post" action="kontakt.php">'; 
print  '<table>';
print  '<tr>';
print  '<td> <br> </td>';
print  '</tr>';
print '<tr>';
print  '<td> &nbsp;<input type="text" name="username" placeholder="Username" class="tekst"> <br><br></td>';
print  '</tr>';
print  '<tr>';
print  '<td> &nbsp;<input type="password" name="password" placeholder="Password" class="tekst"><br><br></td>';
print '</tr>';
print '<tr>';
print '<td class="loginDugme"><input type="submit" value="Login" class="dugme2"> </td>';
print '</tr>';
print '</table>';
print '</form>';
}
if (isset($_SESSION['username']))
{

  print '<form method="post" action="kontakt.php">'; 
  print  '<table>';
  print  '<tr>';
  print  '<td> <br> </td>';
  print  '</tr>';
  print '<tr>';
  print  '<td> &nbsp; <div class="naslov3"> Prijavljeni ste kao  <span class="naslov2">'.$_SESSION['username'].'</span>.</div> <br><br></td>';
  print  '</tr>';
  print '<tr>';
  print '<td class="loginDugme"><input type="submit" name="Logout" value="Logout" class="dugme22"> </td>';
  print '</tr>';
  print '</table>';
  print '</form>';
}
?>
</div>
<br>
<?php if($flag == 1){
print '<span class=naslovMali>Neispravni podaci</span>';
$flag=0;}
?>

</div>

<div id="two">
<div class="naslov2">
  Kontaktirajte nas
  </div>
<div class="veliki">

<form id="formaK">
<table class="tabela">


  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Ime i prezime: </label></td>
  <td> <input type="text" class="tekstK" placeholder="" id="imePrezimeTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Email: </label></td>
  <td> <input type="email" name="email" class="tekstK" placeholder="primjer@email.com" id="emailKTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Telefon: </label></td>
  <td> <input type="tel" name="usrtel" class="tekstK" placeholder="+38761-123-123" id="phoneKTxt"></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
   <tr>
  <td class="zaCelije"> <label class="labela"> Komentar: </label></td>
  <td> <textarea class="multiline" placeholder="Komentar..." id="komentarTxt"></textarea></td>
  </tr>
  <tr>
  <td colspan="2"><br> </td>
  </tr>
  <tr>
  <td class="zaCelije"> <label class="labela"> Ocjena: </label></td>
  <td> <label class="labela"> 1 </label><input type="range" min="1" max="5" > <label class="labela"> 5 </label></td>
  </tr>
   <tr>
  <td> </td>
  <td class="poravnajPs"> <input type="button" value="Pošalji" class="dugme2" onclick="submituj();"></td>
  </tr>

 </table>
 </form>
</div>
</div>

<div id="three">
<div class="divAcc">
<table>
<tr>
<td> <h2 class="labela"> Pratite nas na društvenim mrežama </h2> </td>
</tr>
<tr>
<td class="listaLinkova">
<ul class="lista">
<li class="listaF"><a href="https://www.facebook.com/" class="bijeli" target="blank">Facebook</a></li>
<li class="listaI"><a href="https://www.instagram.com/?hl=hr" class="bijeli" target="blank">Instagram</a></li>
<li class="listaT"><a href="https://twitter.com/" class="bijeli" target="blank">Twitter</a></li>
</ul> 
</td>
</tr>
</table>
</div>
</div>

</div>



<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>