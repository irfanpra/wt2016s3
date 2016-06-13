<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Novost</TITLE>
<link rel="stylesheet" type="text/css" href="stil.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src = "ValidacijaNovosti.js"></script>
</HEAD>
<BODY>

<?php
    $_message ="";
	$_messageAutor ="";
	$_messageNaziv ="";
	$_messageNovost ="";
	$_messageKod = "";
    $_autor ="";
    $_naziv ="";
    $_novost ="";
	$_kod="";
	$_datum = date("M d, Y H:m:s");
	
	
	 if(isset($_POST['OK']) && empty($_POST['autor']) || empty($_POST['naziv']) || empty($_POST['novost']) || empty($_POST['kod']) || empty($_POST['telefon']))
	{
       $_message = 'Unesite sve podatke';
	}
    if (isset($_POST['autor']) && isset($_POST['naziv']) && isset($_POST['novost']))
	{
		$_autor = $_POST['autor'];
        $_naziv = $_POST['naziv'];
		$_novost = $_REQUEST['novost'];
	}	
      $list = array($_autor,$_naziv,$_novost,$_datum);

      $_file = fopen('NovostiCSVsaForme.csv','a');

      foreach ($list as $line)
      {
       fputcsv($_file,explode(',',$line));
      } 

       fclose($_file);
	 
	  if(strlen($_autor) < 4 && isset($_POST['OK']))
		{
			$_messageAutor = "Naziv autora mora biti duži od 3 znaka!";
		}
		if(strlen($_naziv) < 4 && isset($_POST['OK']))
		{
			$_messageNaziv = "Naziv novosti mora biti duži od 3 znaka!";
		}
		
		if(!preg_match("/[^a-z0-9]/",$_novost) && isset($_POST['OK']))
		{
			$_messageNovost = "Neispravan format. Novost se sastoji samo od alfanumeričkih znakova";
		}
		if(strlen($_kod)>2 && isset($_POST['OK']))
		{
			$_messageKod = "Kod drzave ne moze biti duzi od dva znaka";
		}
?>
<div id = "Naslov">
     <h1>eBook</h1>
     </div>
         <div id="meni">
             <ul>
             <li><a href="Knjižara.html">Početna</a></li>
             <li><a href="Knjiga.html">Knjige</a></li>
             <li><a href="Linkovi.html">Linkovi</a></li>
             <li><a href="Onama.html">O nama</a></li>
             <li><a href="Kontakt.html">Kontakt</a></li>
			 <li><a href="Login.php">Login</a></li>
             </ul>
             </div>
			 <div id="novoForma">
			 <form action="DodajNovosti.php" method="post">
			 <label>Unesite ime autora:</label>
			 <br>
			 <input type="text" name="autor" id="autor" placeholder="Autor" required="required" onkeyup="ValidacijaAutor()"></input><label id = "demoAutor"><?php echo $_messageAutor; ?></label>
			 </br>
			 <label>Unesite naziv novosti:</label>
			 <br>
			 <input type="text" name="naziv" id="naziv" placeholder="Naziv novosti" required="required" onkeyup="ValidacijaNaziv()"></input><label id = "demoNaziv"><?php echo $_messageNaziv; ?></label>
			 </br>
			 <label>Unesite novost:</label>
			 <br>
			 <textarea rows="4" cols="35" name ="novost" id = "novost" placeholder="Novost" required="required" onkeyup="ValidacijaNovost()"></textarea><label id = "demoNovost"><?php echo $_messageNovost; ?></label>
			 </br>
			 <label>Unesite dvoslovni kod države:</label>
			 <br>
			 <input type="text" name="kod" id = "kod" placeholder="Dvosloni kod" required="required" onkeyup="return kodDrzave()" ></input><label id = "demoKod"><?php echo $_messageKod; ?></label>
			 </br>
			 <label>Unesite broj autora:</label>
			 <br>
			 <input type="tel" name="telefon" id="tel" id = "telefon" placeholder="Broj telefona" required="required" onkeyup="ValidacijaTelefon()"></input><label id = "demoTelefon"></label>
			 </br>
			 <br>
			 <input type="submit" name = "OK" value="OK"></input>
			 </br>
			 <label><?php echo $_message; ?></label>
			 </form>
			 </div>
</BODY>
</HTML>