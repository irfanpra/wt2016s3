<?php
if(isset($_REQUEST['odjava'])){
    session_start();
    unset($_SESSION['username']);
}
else session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IEEE BiH</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <?php

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    else if(isset($_POST['username'])){

        $filename = 'loginPodaci.txt';
        $myfile = fopen($filename, "r") or die("Nije moguce otvoriti datoteku.");
        $loginPodaci = explode(',', fread($myfile, filesize($filename)));
        $adminPass = $loginPodaci[1];
        fclose($myfile);
        $adminPass = trim($adminPass);

        $uneseniPass = sha1($_POST['password']);

        if($uneseniPass == $adminPass){
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
        }
        else{
            print("Neispravni login podaci!");

        }
    }

    ?>
    
<header id="header">
        <?php
        if(isset($_SESSION['username'])){

            $poruka = 'Prijavljeni ste kao: ' . $_SESSION['username'];

            echo "<h3 id='usernamePoruka'>$poruka</h3>";

        }

        else{

            echo('<div id="login">
            <form id="loginForma" method="post" action="clanovi.php">
                    <label for="username">Korisničko ime: </label>
                    <input type="text" id="username" name="username" required />
                    <label for="password">Šifra: </label>
                    <input type="password" id="password" name="password" required />

                <button type="submit" id="buttonSend" name="buttonSend">Loguj se</button>
            </form></div>');

        }

        ?>


        <div class="logo">
     
  <div class="logoSlovoI"></div>
  <div class="logoSlovoE">
      <div class="logoPrazno1"></div>
      <div class="logoPrazno2"></div>
  </div>
  <div class="logoSlovoE">
      <div class="logoPrazno1"></div>
      <div class="logoPrazno2"></div>
  </div>
  <div class="logoSlovoE">
      <div class="logoPrazno1"></div>
      <div class="logoPrazno2"></div>
  </div>
  
  </div>



        <div id="menu">

            <ul>
                <li>
                    <a href="index.php">NASLOVNA</a>
                </li>
                <li>
                    <a href="clanovi.php">CLANOVI</a>
                </li>
                <li>
                    <a href="kontakt.php">KONTAKT</a>
                </li>
                <li>
                    <a href="linkovi.php">LINKOVI</a>
                </li>

                <?php
                if(isset($_SESSION['username'])){

                    echo "<li><a href='unosNovosti.php'>DODAJ NOVOST</a></li>";
                    echo "<li><a href='clanovi.php?odjava=true'>ODJAVI SE</a></li>";
                }
                ?>
            </ul>
        </div>

        <h1 id="glavniNaslov">Stranica IEEE udruženja Bosne i Hercegovine</h1>
  </header>
          
  <h3 class="centrirano">Spisak IEEE clanova:</h3>
  
  
  <table>
      <thead>
          <tr>
              <th>R.B.</th><th>Ime</th><th>Prezime</th><th>Cl. broj</th><th>Clan od</th>
          </tr>
      </thead>
      
      <tbody>
          <tr>
              <td>1.</td><td>Neko</td><td>Nekic</td><td>1234</td><td>12.5.2014.</td>
          </tr>
          <tr class="parni">
              <td>2.</td><td>Ljud</td><td>Ljudovic</td><td>4321</td><td>13.3.2013.</td>
          </tr>
          <tr>
              <td>3.</td><td>Covjek</td><td>Covjekovic</td><td>6543</td><td>20.3.2015.</td>
          </tr>
          <tr class="parni">
              <td>4.</td><td>Zena</td><td>Zenkovic</td><td>7654</td><td>19.9.2013.</td>
          </tr>
      </tbody>
      
  </table>
        
        
    


    
</body>
</html>