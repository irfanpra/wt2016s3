<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logo_ikona.png">
<link rel="stylesheet" type="text/css" href="indexCSS.css">
<link rel="stylesheet" type="text/css" href="logo.css">
<link rel="stylesheet" type="text/css" href="artiklCSS.css">
<link rel="stylesheet" type="text/css" href="ponudaCSS.css">
<link rel="stylesheet" type="text/css" href="kontaktCSS.css">
<link rel="stylesheet" type="text/css" href="noviCSS.css">
<script src="datumi.js"></script>
<title> Sve na jednom mjestu | Iznajmljivanje</title>

<?php
session_start();
if (isset($_REQUEST['Logout']) && $_REQUEST['Logout'] == 'Logout')
            session_unset();
?>
</head>

<body onload="izmijeniVrijeme();">
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
 $flag2=0;
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

print '<form method="post" action="index.php">'; 
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

  print '<form method="post" action="index.php">'; 
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
if (isset($_REQUEST['sortevi'])) {
  $flag2=1;
}
?>
</div>
<br>
<?php if($flag == 1){
print '<span class=naslovMali>Neispravni podaci</span>';
$flag=0;}
?>
<div class="divAbc">
  <form name="filter">
  <table class="tabela2">
  <tr>
  <td><h2 class="labela"> Filtrirajte novosti: </h2></td>
  </tr>
  <tr>
  <td class="stil">
  <input type="radio" name="filteri" value="1"> Današnje <br>
  <input type="radio" name="filteri" value="2"> Ove sedmice <br>
  <input type="radio" name="filteri" value="3"> Ovaj mjesec <br>
  <input type="radio" name="filteri" value="4" checked="checked"> Sve <br>
  </td>
  </tr>
  
  
  </table>
  </form>
  
</div>
<div class="divAbc2">
  <form name="sorti" method="post" action="index.php">
  <table class="tabela2">
  <tr>
  <td><h2 class="labela"> Sortirajte novosti: </h2></td>
  </tr>
  <tr>
  <td class="stil">
  <?php if($flag2 == 1){
  print '<input type="checkbox" name="sortevi" value="1" onclick="javascript: submit()" checked="checked"> Abecedno <br>';
  }
  else print '<input type="checkbox" name="sortevi" value="1" onclick="javascript: submit()"> Abecedno <br>';
  ?>
  <!--<input type="radio" name="sortevi" value="1" onclick="javascript: submit()"> Abecedno <br>-->
  </td>
  </tr>
  
  
  </table>
  </form>
  
</div>
</div>

<div id="two">
<div class="naslov3">
  Novosti
  </div>
<?php
  $niz = file("novosti.csv");
  for ($i = 0; $i < count($niz); $i++){
    $niz[$i] = explode(",", $niz[$i]);
  }
  if ($flag2 == 0){
  function date_compare($a, $b)
{
    $t1 = strtotime($a[2]);
    $t2 = strtotime($b[2]);
    return $t2 - $t1;
}    
usort($niz, 'date_compare');
}
 else if($flag2 == 1){
  function custom_sort($a,$b) {
           $a[0] = strtolower( $a[0]);
           $b[0] = strtolower( $b[0]);
          return $a[0]>$b[0];
     }
  // Sort the multidimensional array
     usort($niz, 'custom_sort');
     // Define the custom sort function
     $flag2=0;
 }
  for ($i = 0; $i < count($niz); $i++){
   // $info = explode(",", $niz[$i]);
    print '<div class="divA">';
    print '<div class="glupiFloat">';
    print '<img class="slikino3" src="news-icon.png" alt="">';
    print '</div>';
    print '<div class="stil5">';
    print '<b><div class="proba">'.$niz[$i][0].'</div></b>';
    print '<i><div class="datumVrijemeNovo">'.$niz[$i][2].'</div></i><hr class="linija" color="white" size="1.5vw">';
    print '<div class="bitanSpan">'.$niz[$i][1].'</div>';
    print '<a href="opsirnije.php" class="dugme5">Više...</a>';
    print '</div>';
    print '</div>';
  }
?>
<!--
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="kuca.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <b><div class="proba">Povoljni apartmani</div></b>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   <div class="bitanSpan">Gdje pronaći jeftine apartmane na moru? Povoljan i jeftini privatni smještaj u apartmanima Bahama, Kariba, Maldiva i otoka možete...</div>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="stan.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Stan u centru Zenice</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Iznajmljuje se stan u ulici Trg Alije Izetbegovića broj 69A, 5. sprat, ima lift. Cijena nekretnine je promotivna i postoji mogućnost...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="pprostor.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Miami na Vašem dlanu</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Pri kupnji nekretnine u Miami Beach-u, Florida bitno se odlučiti hoće li kupoprodaja biti u gotovini ili kreditom. Zadnjih par godina tržište ...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="stan.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Stan u centru Zenice</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Iznajmljuje se stan u ulici Trg Alije Izetbegovića broj 69A, 5. sprat, ima lift. Cijena nekretnine je promotivna i postoji mogućnost...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="kuca.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Povoljni apartmani</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Gdje pronaći jeftine apartmane na moru? Povoljan i jeftini privatni smještaj u apartmanima Bahama, Kariba, Maldiva i otoka možete...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="pprostor.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Miami na Vašem dlanu</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Pri kupnji nekretnine u Miami Beach-u, Florida bitno se odlučiti hoće li kupoprodaja biti u gotovini ili kreditom. Zadnjih par godina tržište ...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="stan.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Stan u centru Zenice</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Iznajmljuje se stan u ulici Trg Alije Izetbegovića broj 69A, 5. sprat, ima lift. Cijena nekretnine je promotivna i postoji mogućnost...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="kuca.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Povoljni apartmani</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Gdje pronaći jeftine apartmane na moru? Povoljan i jeftini privatni smještaj u apartmanima Bahama, Kariba, Maldiva i otoka možete...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="pprostor.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Miami na Vašem dlanu</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Pri kupnji nekretnine u Miami Beach-u, Florida bitno se odlučiti hoće li kupoprodaja biti u gotovini ili kreditom. Zadnjih par godina tržište ...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="stan.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Stan u centru Zenice</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Iznajmljuje se stan u ulici Trg Alije Izetbegovića broj 69A, 5. sprat, ima lift. Cijena nekretnine je promotivna i postoji mogućnost...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="kuca.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Povoljni apartmani</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Gdje pronaći jeftine apartmane na moru? Povoljan i jeftini privatni smještaj u apartmanima Bahama, Kariba, Maldiva i otoka možete...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
<div class="divA">
  <div class="glupiFloat">
   <img class="slikino3" src="pprostor.jpg" alt=""> 
   </div>
  <div class="stil5"> 
    <div class="proba"><b>Miami na Vašem dlanu</b></div>
     <i><div class="datumVrijeme"></div></i><hr class="linija" color="white" size="1.5vw">
   Pri kupnji nekretnine u Miami Beach-u, Florida bitno se odlučiti hoće li kupoprodaja biti u gotovini ili kreditom. Zadnjih par godina tržište ...<br>
  <a href="opsirnije.php" class="dugme5">Više...</a>
  </div>
</div>
-->
</div>

<div id="three">
<div class="naslov2">
  Najpopularnije
  </div>

  <div class="divB">
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
<div class="divEEa">
  <table class="tabela">
  <tr>
  <td class="sirinaPolja"> <img class="slikino" src="pprostor.jpg" alt=""> </td>
  <td class="stil"> 
    <b>Lokacija:</b> Miami <br> <br>
    <b>Kapacitet:</b> 1 osoba <br> <br>
    <b>Cijena:</b> 700KM  <br> <br>
    <b>Kontakt:</b> 062-112-445 <br><br> 
    <a href="opsirnije.php" class="dugme4b">Opširnije...</a>
  </td>
  </tr>
  </table>
</div>
<div class="divDDa">
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

</div>



<footer>
  <a href="#" class="dugme3">Nazad na vrh stranice</a>
</footer>

</body>

</html>