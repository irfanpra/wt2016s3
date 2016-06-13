<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unos novosti</title>
    <link rel="stylesheet" href="stil.css">
    <script type="text/javascript" src="jsfunkcije.js"></script>
    <script type="text/javascript" src="AjaxFunkcije.js"></script>


</head>
<body>

    <?php
    date_default_timezone_set("Europe/Sarajevo");
    if(isset($_POST['naslov']) and isset($_FILES['fileToUpload']) and isset($_POST['tekstNovosti'])){
        if(!empty($_POST['naslov']) and !empty($_FILES['fileToUpload']) and !empty($_POST['tekstNovosti'])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $target_dir = 'images/';
                $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "Fajl je slika - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "Odabrani fajl nije slika.";
                        $uploadOk = 0;
                    }
                }
                
                if (file_exists($target_file)) {
                    echo "Odabrana slika vec postoji.";
                    $uploadOk = 0;
                }
                
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Odabrana slika je prevelika.";
                    $uploadOk = 0;
                }
                
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Dozvoljeni su samo JPG, JPEG, PNG i GIF formati.";
                    $uploadOk = 0;
                }
                
                if ($uploadOk == 0) {
                    echo " Slika nije upload-ovana.";
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo " Slika ". basename( $_FILES["fileToUpload"]["name"]). " je uspješno upload-ovana";
                        $myfile = fopen("novosti.csv", "a") or die("Unable to open file!");

                        $novostTekst = $_POST['tekstNovosti'];
                        $novostTekst = str_replace(PHP_EOL, "</br>", $novostTekst);

                        $csvData = array($_POST['naslov'], $novostTekst,  ($target_dir.basename($_FILES['fileToUpload']['name'])), date_format(new DateTime(), 'Y/m/d H:i:s'));



                        fputcsv($myfile, $csvData, ";");
                        fclose($myfile);
                        unset($_POST["fileToUpload"]);
                        unset($_POST["naslov"]);
                        unset($_POST["tekstNovosti"]);


                    } else {
                        echo " Žao nam je, desila se greška pri upload-u slike.";
                    }
                }
            }
        }
        else{
            echo "Niste unijeli sve podatke o novosti!";
        }
    }
    ?>

    <header id="header">

        <div id="login">
            <a href="#">Prijavi se</a>
            <a href="unosNovosti.php">Dodaj novost</a>
        </div>

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
                <li><a href="index.php">NASLOVNA</a></li>
                <li><a href="clanovi.php">CLANOVI</a></li>
                <li><a href="kontakt.php">KONTAKT</a></li>
                <li><a href="linkovi.php">LINKOVI</a></li>
            </ul>
        </div>

        <h1>Stranica IEEE udruženja Bosne i Hercegovine</h1>
    </header>

    <h3 class="centrirano">Unesite novost:</h3>



    <form id="forma" action="unosNovosti.php" method="post" enctype="multipart/form-data">

        <label for="naslov">Naslov:</label>
        <input type="text" id="naslov" name="naslov" required />

        <label for="tekstNovosti">Tekst novosti:</label>
        <textarea id="tekstNovosti" name="tekstNovosti" required></textarea>

        <label for="fileToUpload">Slika:</label>
        <input type="file" id="fileToUpload" name="fileToUpload" accept="image/*" />



        <!--AJAX-->
        <label for="kodDrzave">Dvoslovni kod države:</label>
        <input type="text" id="kodDrzave" name="kodDrzave" placeholder="npr. BA"  required/>

        <label for="brTelefona">Broj telefona:</label>
        
        <input type="text" id="brPozivni" name="brPozivni" placeholder="pozivni" required/>
        <input type="tel" id="brTelefona" name="brTelefona" placeholder="ostatak broja" onblur="validirajKod()" required/>
        <!--AJAX END-->

        <button id="buttonSend" type="submit">Dodaj novost</button>

    </form>

   


</body>
</html>