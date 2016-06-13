<?php
session_name('Sesija');
session_id('1');
session_start();

if ($_SESSION["username"]!=="admin") {
	
header('Location: login.php');
};
?>
           
				
           
<!DOCTYPE html>
<html>
<head>
<title>Forma</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Task3Stil.css">
<script type="text/javascript" src="Task2js.js"></script>

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
	<li><a href="dodajVijest.php">Dodaj vijest</a></li>
 <li><a href="NaslovnaTaska2.php" >Naslovna</a></li>
  <li><a href="Tabela.php" >Tabela</a></li>
  <li><a href="#FormaSaValidacijom">Forma</a></li>
  <li><a href="Lista_linkova.php">Lista linkova</a></li>
  <li>  <a href="login.php" >Log out</a></li>
	</ul>
		</div>

		<form id="forma">
<div class="formPosition">
<label id="napomena">Napomena:Polja oznacena sa <span id="zvezda">*</span> moraju se popunjiti.</label> <br><br>
<div class="block">

<label>Ime:<span id="zvezda">*</span> </label>
<input type="text" id="ime" oninput="my1()" ><br><span id="errfn"></span><br>
</div>
<div class="block">
<label>Prezime:<span id="zvezda">*</span> </label>

<input   type="text" id="prezime" oninput="my2()"><br><span id="errfn1"></span><br>
</div>
<div class="block">
<label>Država:<span id="zvezda">*</span> </label>
<select name="country" id="country" onchange="setStates();">
  
 
  
  <option value="">Odaberite drzavu</option>
  
  <option value="BiH">BiH</option>
  <option value="Kosovo">Kosovo</option>
  <option value="Srbija">Srbija</option>
</select>
</div>
<div class="block">
<br>
<label>Grad:<span id="zvezda">*</span> </label>

 <select name="state" id="state" >
  <option value=""></option>
  </select>
</div> 
<br>
<div class="block">
<label>Broj telefona:<span id="zvezda">*</span> </label><input type="tel" id="telefon" oninput="my3()" >
</div>
<span id="errfn3"></span>
<br>
<div class="block">
<label>Email:<span id="zvezda">*</span> </label><input type="email" id="email" oninput="validateEmail()"><br>
</div>
<span id="errfn4"></span>
<div class="block">
<br>
<label>Datum dolaska:<span id="zvezda">*</span> </label>  <input type="date" id="myDate"  onfocus="my4()">

</div>
<span id="errfn5"></span>
<br>
<button  onclick="return Klik()">Potvrdi</button> 
</div>
</form> 







 

</body>
</html>