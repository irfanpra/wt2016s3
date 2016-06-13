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
<title>Lista linkova</title>
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
	  <li><a href="dodajVijest.php">Dodaj vijest</a></li>
 <li><a href="NaslovnaTaska3.php"  >Naslovna</a></li>
  <li><a href="Tabela.php" >Tabela</a></li>
  <li><a href="FormaSaValidacijom.php">Forma</a></li>
  <li><a href="#Lista_linkova">Lista linkova</a></li>
  <li>  <a href="login.php" >Log out</a></li>
	</ul>
		</div>
		<div id="body" >
 	  <ul >

  <li ><a href="https://www.google.ba/?gws_rd=cr&ei=8yfwVtfJHuTVyAPEmIiYAg"  >Google</a></li>
  <li ><a href="https://www.facebook.com/"  >Facebook</a></li>
  <li ><a href="https://www.mozilla.org/en-US/firefox/new/" >Mozilla</a></li>
  <li ><a href="http://www.opera.com/"  >Opera</a></li>
	</ul>

  </div>



</body>
</html>