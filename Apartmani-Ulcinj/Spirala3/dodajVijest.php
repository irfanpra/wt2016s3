<?php
session_name('Sesija');
session_id('1');
session_start();

if ($_SESSION["username"]!=="admin") {
	
header('Location: login.php');
};
?>
           
		   <?php
		date_default_timezone_set("Europe/Sarajevo");
		if(isset($_REQUEST['naslov'])&&($_REQUEST['naslov']!="") && isset($_REQUEST['oglas']) && ($_REQUEST['oglas']!="")
			&& isset($_REQUEST['url']) && ($_REQUEST['url']!=""))
		{
			function provjeraUnosa($podatak)
			{
				$podatak=trim($podatak);
				$podatak=stripslashes($podatak);
				$podatak=htmlspecialchars($podatak);
				return $podatak;
			}
			$naslov=provjeraUnosa($_REQUEST['naslov']);
			$oglas=provjeraUnosa($_REQUEST['oglas']);
			$url=provjeraUnosa($_REQUEST['url']);
			$datum=date("M d,Y H:i:s");
			
			$niz=array($naslov,$oglas,$url,$datum);
			$novost=fopen("Vijesti.csv","w") or die("Datoteka se ne može otvoriti");
			fwrite($novost,"\n");
			fputcsv($novost,$niz,";");
			$stat = fstat($novost);
			fclose($novost);
		}
	?>
				
           
<!DOCTYPE html>
<html>
<head>
<title>Forma</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Task3Stil.css">


</head>
<body>


<div id="header">


<h1 id="zajednicka">
	<span  class="char1" >P</span>
  <span class="char2">l</span>
  <span class="char3">a</span>
  <span class="char4">v</span>
  <span class="char5">a</span>
  <span class="char6"> </span>
  <span class="char7">L</span>
  <span class="char8">a</span>
  <span class="char9">g</span>
  <span class="char10">u</span>
  <span class="char11">n</span>
  <span class="char12">a</span>
  <span class="tekst">Apartments</span>
 </h1>
</div>

<div id="navigation">
	  <ul>
	<li><a href="#dodajVijest">Dodaj vijest</a></li>
 <li><a href="NaslovnaTaska3.php" >Naslovna</a></li>
  <li><a href="Tabela.php" >Tabela</a></li>
  <li><a href="FormaSaValidacijom.php">Forma</a></li>
  <li><a href="Lista_linkova.php">Lista linkova</a></li>
  <li>  <a href="login.php" >Log out</a></li>
	</ul>
		</div>
	

				<form method="POST" id="forma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="formPosition">
<div class="block1">

<label>Naslov:<input type="text" name="naslov" id="naslov"></label>

</div>
<br>
<div class="block1">
<label>Tekst: <input type="text" name="oglas" id="oglas" ></label>


</div>
<br>
<div class="block1">
<label>URL :<input type="text" name="url" id="url"  ></label>
</div>
<br>
<div class="block1">

<label>Kod:<input type="text" name="kod" id="kod" ></label> 
</div>
<br>
<div class="block1">
<label id="l1">Pozivni:
				<input type="text" name="tel" id="tel"  >
				</label>
				</div>
				<br>
<div class="block1">
<label>
				Telefon :<input type="text" name="telefon" id="telefon"  >
				</label>
</div>
<br>
<label >			
			<input type="submit" id="dugme" value="Dodaj Vijest">
		</label>
</div>
</form> 

	
	
	


</div>
</form> 







 

</body>
</html>