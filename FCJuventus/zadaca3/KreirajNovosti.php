<?php

session_start();
 function daLiJeLogovan()
{
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo "Morate biti logovani, da bi mogli kreirati novosti.</br></br>";
	include "prijava.php";
	exit();
}}

daLiJeLogovan();


if(isset($_POST['naslov']) && isset($_POST['tekst']))
{
$naslov=$_REQUEST['naslov'];
$tekst=$_REQUEST['tekst'];
$vrijeme=date("Y-m-d H:i:s");

$naslov=htmlspecialchars($naslov, ENT_QUOTES, 'UTF-8');
$tekst=htmlspecialchars($tekst, ENT_QUOTES, 'UTF-8');
$vrijeme=htmlspecialchars($vrijeme, ENT_QUOTES,'UTF-8');


 $novost = array($naslov,$tekst,$vrijeme);
 
$fp = fopen('novosti.csv', 'a');

    fputcsv($fp, $novost);

fclose($fp);}


?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/logo.css">
 <script src="val/validacija.js"></script>



</head>
<body>

<li><a  href="Naslovnica.html#">Naslovnica</a></li><br>
<form method="post" onsubmit="return validirajFormu()" action="KreirajNovosti.php">

Naslov :<input id="naslovNovosti" onchange="provjeriNaslovNovosti()" type="text" name="naslov">
<p id="nevalidanNaslov"></p>


<br><br>
 Tekst   : <textarea id="tekstNovosti" onchange="provjeriTekstNovosti()" name="tekst" cols="40" rows="10" ... ></textarea>
<input type="submit" name="submit" value="Kreiraj"/><br>

</form>
<p id="nevalidanTekst"></p>

Pozivni broj :<input id="br"  onblur="provjeriTel()"type="number" name="br">
kod :<input id="kod" onblur="provjeriKod()" type="text" name="kod"><br><br>
Broj telefona:<input id="brojTelefona" onblur="provjeriBrojTelefona(this.value)" type="text" name="kod">
<p id="pogresanBrojTelefona"></p>
<p id="provjeraBroja"></p>
<p id="provjeraKoda"></p>


</body>
</html>
