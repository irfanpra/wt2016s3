<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logo_ikona.png">
<link rel="stylesheet" type="text/css" href="indexCSS.css">
<link rel="stylesheet" type="text/css" href="logo.css">
<link rel="stylesheet" type="text/css" href="artiklCSS.css">
<link rel="stylesheet" type="text/css" href="kontaktCSS.css">
<link rel="stylesheet" type="text/css" href="oNamaCSS.css">
<link rel="stylesheet" type="text/css" href="ponudaCSS.css">
<link rel="stylesheet" type="text/css" href="noviCSS.css">
<title> O Nama | Iznajmljivanje</title>
<?php
session_start();
if (isset($_REQUEST['Logout']) && $_REQUEST['Logout'] == 'Logout')
            session_unset();
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

print '<form method="post" action="oNama.php">'; 
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

  print '<form method="post" action="oNama.php">'; 
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
<div id="two2">
<table class="centralna">
<tr class="zaglavlje">
<td>Ime</td> <td>Prezime</td> <td>E-mail</td> <td>Telefon</td> <td>Grad</td>
</tr>
<tr class="parna">
<td>Dino</td> <td>Babahmetović</td> <td>dbabahmeto1@etf.unsa.ba</td> <td>063/803-250</td> <td>Sarajevo</td>
</tr>
<tr class="neparna">
<td>Dino</td> <td>Babahmetović</td> <td>dbabahmeto1@etf.unsa.ba</td> <td>063/803-250</td> <td>Sarajevo</td>
</tr>
<tr class="parna">
<td>Dino</td> <td>Babahmetović</td> <td>dbabahmeto1@etf.unsa.ba</td> <td>063/803-250</td> <td>Sarajevo</td>
</tr>
<tr class="neparna">
<td>Dino</td> <td>Babahmetović</td> <td>dbabahmeto1@etf.unsa.ba</td> <td>063/803-250</td> <td>Sarajevo</td>
</tr>
</table>
</div>


</div>



<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>