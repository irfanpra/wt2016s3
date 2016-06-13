<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Admin</TITLE>

<link rel="stylesheet" type="text/css" href="stil.css">
<script src = "novost.js"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<?php
   if (isset($_POST["submit"]))
   {
	  header("Location:DodajNovosti.php");
   }
   if (isset($_POST["Odjavasubmit"]))
   {
	  header("Location:Login.php");
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
			 <div id = "admin">
			 <form action="admin.php" class="adminForma" method="post">
			 <input type="submit" name = "submit" value="Dodaj Novost">
			 <input type="submit" name = "Odjavasubmit" value="Odjava">
			 </div>
			 </form>
			 </div>
			 
			 <div id="LOGOAdmin">
             <p>B</p>
             </div>
</BODY>
</HTML>