<?php
if(isset($_REQUEST['odjava'])){
    session_start();
    unset($_SESSION['username']);
}
else session_start();
?>
<!DOCTYPE html>
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
            <form id="loginForma" method="post" action="linkovi.php">
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
                    echo "<li><a href='linkovi.php?odjava=true'>ODJAVI SE</a></li>";
                }
                ?>
            </ul>
        </div>

        <h1 id="glavniNaslov">Stranica IEEE udruženja Bosne i Hercegovine</h1>
  </header>
          
  <h3 class="centrirano">Linkovi na eksterne IEEE stranice:</h3>
  
  <div class="linkovi">
  <ol>
      <li><a href="http://ieee.org">IEEE - zvanicna stranica</a></li>
      <li><a href="http://www.ieee.org/theinstitute">The Institute - novosti iz IEEE</a></li>
      <li><a href="http://www.etf.unsa.ba/">Sarajevo: Elektrotehnički fakultet</a></li>
      <li><a href="http://www.fe.untz.ba/">Tuzla: Fakultet elektrotehnike</a></li>

  </ol>
  
  </div>
        
        
    


    
</body>
</html>