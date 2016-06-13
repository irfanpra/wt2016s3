<?php
session_name('imeSesije');
session_id('idSesije');
session_start();
if ($_SESSION["username"]!="admin" && $_SESSION["username"]!="korisnik") {
	header('Location: oguliJabuku.html');
};
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Trgovacka radnja</TITLE>
<script src="naslovna.js"></script>
<link rel="stylesheet" type="text/css" href="stilNaslovna.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
  <div class="logo">
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

    <form method="POST" class="formaaa" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="submit" id="sorter1" name="sortirajPoDatumu"  value="Sortiraj po datumu" > </submit>
		<input type="submit" id="sorter2" name="sortirajPoNaslovu" value="Sortiraj po naslovu"> </submit>
	</form>
  
  <form method="POST" class="formaVijest" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br> 
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Naslov:&nbsp;&nbsp;&nbsp;                  <input type="text" name="naslov"  id="naslov"  onblur="validirajPolje(this)"  required> </label> <br> <br>
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slika:&nbsp;&nbsp;&nbsp; <input type="text" name="slika"   id="slika"   onblur="validirajPolje(this)"  required> </label> <br> <br>
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tekst:&nbsp;&nbsp;&nbsp; <input type="text" name="tekst"   id="tekst"   onblur="validirajPolje(this)"  required> </label> <br> <br>
	<label>&nbsp;&nbsp;XX kod države:&nbsp;&nbsp;&nbsp;                                                                                   <input type="text" name="dkd"     id="dkd"     onblur="validirajPolje(this)"  required> </label> <br> <br>
	<label id="l1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pozivni Broj:&nbsp;&nbsp;&nbsp;                                                    <input type="text" name="pozivni" id="pozivni" onblur="validirajPolje(this)"  disabled> </label> <br> <br>
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefon:&nbsp;&nbsp;&nbsp;                 <input type="text" name="tel"     id="tel"     onblur="validirajPolje(this)"  required> </label> <br> <br>
	<input type="submit" id="dodajVijestB" value="Dodaj Vijest" >
	<br>
  </form>
  
  <?php
		if( (isset($_REQUEST['naslov']) && $_REQUEST['naslov']!="") && 
		    (isset($_REQUEST['slika'])  && $_REQUEST['slika']!="")  && 
			(isset($_REQUEST['tekst'])  && $_REQUEST['tekst']!="") )
		{ 
			date_default_timezone_set("Europe/Sarajevo");
			$naslov   = trim(stripslashes(htmlspecialchars($_REQUEST['naslov'])));
			$tekst    = trim(stripslashes(htmlspecialchars($_REQUEST['tekst'])));
			$slika    = trim(stripslashes(htmlspecialchars($_REQUEST['slika'])));
			$datum    = date("M d,Y H:i:s");
			
			$podaci=array($naslov,$tekst,$slika,$datum);
			$vijesti=fopen("vijesti.csv","a+") or die("Problem sa otvaranjem datoteke!");
			fwrite($vijesti,"\n");
			fputcsv($vijesti,$podaci,";");
			$stat = fstat($vijesti);
			fclose($vijesti);
		}
	?>
<div id="novosti">
	<section id="prvaNovost" class='prvaNovost'>
		<div class='slika'> 
			<a href=''> <img src="" alt='Slika'> </a>
		</div>			
		<div class='tekst'>
			<h2> Naslov </h2>
			<p> Oglas </p>
			<aside class='datum'>Objavljeno: <time class='vrijeme' data-datum=".$datum."></time> </aside>
		</div>							
	</section>
	
	<?php
		$vijestiFile=fopen("vijesti.csv",'r') or die ("Datoteka se ne može otvoriti");
		$red;
		$i=0;
		$vijesti2;
		while(!feof($vijestiFile))
		{
			$vijesti2[$i]=fgets($vijestiFile);
			if(strlen($vijesti2[$i])>10)
				$red=explode(";",$vijesti2[$i]);
			else
				continue;

			if (!isset($red[0]) || !isset($red[1]) || !isset($red[2]) || !isset($red[3]) || $red[0] == "" || $red[1] == "" || $red[2] == "" || $red[3] == "" ) 
				for($j =0; $j < 4; $j++)
					$red[$j] = null;
			$niz=Array("0"=>str_replace('"', '', $red[0]), "1"=>str_replace('"', '', $red[1]), "2"=>str_replace('"', '', $red[2]), "3"=>str_replace('\"', "" ,$red[3]));
			$vijesti2[$i++]=$niz;
		}
		$vrijednosti = array();
		if(isset($_REQUEST['sortirajPoDatumu']))
		{
			usort($vijesti2, 'kriterijDatum');
		}
		
		if(isset($_REQUEST['sortirajPoNaslovu']))
		{
			usort($vijesti2, 'kriterijNaslov');
		}
		for($j=0;$j<count($vijesti2);$j++) {
			if($vijesti2[$j]['0'] != " " && $vijesti2[$j]['1'] != "") {
				for($k=0; $k < 4; $k++)
					$vrijednosti[$k]=$vijesti2[$j][$k];
				echo "<section id='".$j."' class='novost'>
						<div class='naslov'>
							<h2> ".$vrijednosti[0]." </h2>
						</div>
						<div class='sve'>
							<div class='slika'>
								<img src='".$vrijednosti[2]."' alt='Slika'>
							<div class='tekst'>
								<p> ".$vrijednosti[1]." </p>
								<aside class='datum'> Objavljeno: $vrijednosti[3] </aside>
								<aside class='prosloVremena'> </aside>
							</div>
						</div>					
					</section>"; 
			}
		}
		
		function kriterijDatum($a, $b)
		{ 
			return -((new DateTime(str_replace('"', '',$b['3'])))->format('U') - (new DateTime(str_replace('"', '',$a['3'])))->format('U'));
		}  
		
		function kriterijNaslov($a, $b)
		{
			return strcmp($a['0'], $b['0']);	
		}	
		if( $_SESSION["username"] == "korisnik") {
			echo "<script type=\"text/javascript\">
					  document.getElementsByClassName('formaVijest')[0].style.display = \"none\";
					  document.getElementsByClassName('prvaNovost')[0].style.display = \"none\";
                     </script>";
		}
		else {
			echo "<script type=\"text/javascript\">
					  document.getElementsByClassName('formaVijest')[0].style.display = \"block\";
					  document.getElementsByClassName('prvaNovost')[0].style.display = \"block\";
					  document.getElementsByClassName('prvaNovost')[0].style.zIndex = \"0\";
                     </script>";
		}
	?>
</div>
</BODY>
</HTML>