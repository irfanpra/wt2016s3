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
    <script type="text/javascript" src="jsfunkcije.js"></script>


</head>

<body onload="izracunajDatum()">


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


    <div id="wrapper">

        <header id="header">

            <?php
            if(isset($_SESSION['username'])){

                $poruka = 'Prijavljeni ste kao: ' . $username;

                echo "<h3 id='usernamePoruka'>$poruka</h3>";

            }

            else{

                echo('<div id="login">
            <form id="loginForma" method="post" action="index.php">
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
                        <a href="linkovi.php" >LINKOVI</a>
                    </li>

                    <?php
                    if(isset($_SESSION['username'])){

                        echo "<li><a href='unosNovosti.php'>DODAJ NOVOST</a></li>";
                        echo "<li><a href='index.php?odjava=true'>ODJAVI SE</a></li>";
                    }
                    ?> 
                </ul>
            </div>

            <h1 id="glavniNaslov">Stranica IEEE udruženja Bosne i Hercegovine</h1>

        </header>


        <h2 class="centrirano">Novosti</h2>

        <div id="filterNovosti">
            <input type="radio" name="filter" id="sve" checked />
            <label for="sve">Sve</label>
            <input type="radio" name="filter" id="dan" />
            <label for="dan">Danas</label>
            <input type="radio" name="filter" id="sedmica" />
            <label for="sedmica">Tekuca sedmica</label>
            <input type="radio" name="filter" id="mjesec" />
            <label for="mjesec">Tekuci mjesec</label>

            <button type="button" onclick="filtrirajNovosti()">Filtriraj</button>
        </div>

        <div id="filterNovosti">
            <input type="radio" name="filter" id="datum" checked />
            <label for="datum">Po datumu</label>
            <input type="radio" name="filter" id="abece" />
            <label for="abece">Po abecedi</label>

            <button type="button" onclick="sortirajNovosti()">Sortiraj</button>
        </div>
        



        <?php
        $file = fopen("novosti.csv", "r");
        $nizNovosti = array();
        while(($red = fgetcsv($file,  0, ";")) !== FALSE){

            array_push($nizNovosti, ('<div class="novosti">
            <img src="'.$red[2].'" alt="slika novosti" />
            <h3>'.$red[0].'</h3>
            <p>'.$red[1].'</p>
            <p class="datumObjave">'.$red[3].'</p>
            <p class="filterDatum">'.$red[3].'</p></div>'));

        }
        $nizNovosti = array_reverse($nizNovosti, false);

        for($i = 0; $i <= count($nizNovosti); $i++){
            print $nizNovosti[$i];
        }


            fclose($file);
        ?>
     
    </div>
</body>
</html>