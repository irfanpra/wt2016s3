<?php

function poredajPoDatumu()
{
	function porediDatum($a, $b)
{
  return $a[2] < $b[2];
}

$red = 1;
if (($novost = fopen("novosti.csv", "r")) !== FALSE) {
	$a=0;
    while (($podaci = fgetcsv($novost, 1000, ",")) !== FALSE) {
		$i=0;
		foreach($podaci as $v)
		{$niz[$a][$i]=$v;$i++;}
$a++;}}    
fclose($novost);
usort($niz, 'porediDatum');

	foreach($niz as $podaci)
	{
        for ($i=0; $i < 3; $i++) {
	
            echo '<div class="prikazNovosti">';
			if($i==0)
			{echo '<p class="naslov">' . $podaci[$i] . '</br>';}
		else if($i==2)
		{echo '<p class="objava">Objavljeno: ' .$podaci[$i] . '</br>';}
		else {echo $podaci[$i] . '</br></br>';}
			echo '</div>';
        }
		echo "----------------------------------------</br>";
    }


}

function poredajAbecedno()
{

function porediNaslove($a, $b)
{
	return $a[0]>$b[0];
}

$red = 1;
if (($novost = fopen("novosti.csv", "r")) !== FALSE) {
	$a=0;
    while (($podaci = fgetcsv($novost, 1000, ",")) !== FALSE) {
		$i=0;
		foreach($podaci as $v)
		{$niz[$a][$i]=$v;$i++;}
$a++;}}    
fclose($novost);
usort($niz, 'porediNaslove');

	foreach($niz as $podaci)
	{
        for ($i=0; $i < 3; $i++) {
	
            echo '<div class="prikazNovosti">';
			if($i==0)
			{echo '<p class="naslov">' . $podaci[$i] . '</br>';}
		else if($i==2)
		{echo '<p class="objava">Objavljeno: ' .$podaci[$i] . '</br>';}
		else {echo $podaci[$i] . '</br></br>';}
			echo '</div>';
        }
		echo "---------------------------------------------------------------</br>";
    }

}

?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/logo.css">
<title>Najnovije novosti</title>

</head>
<body>
<li><a  href="Naslovnica.html#">Naslovnica</a></li>
<li>Prikaži najnovije</li>
<li ><a  href="prikaziAbecedno.php#">Prikaži po abecedi</a></li>
<?php

poredajPoDatumu();

?>

</body>
</html>
