<!DOCTYPE html>
<?php
session_start();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Podstranica sa kontakt formom</title>
    <link rel="stylesheet" type="text/css" href="stil.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="logo2.css" media="screen" title="no title">
    <!-- font-family: 'Josefin Sans', sans-serif;
    font-family: 'Oswald', sans-serif;
    font-family: 'Montserrat', sans-serif;
    font-family: 'Poiret One', cursive;
  -->
  </head>
  <body>

    <script src="validacije.js"></script>
<!--                     LOGO                     -->
    <div class="baza">
      <div class="most">
        <div class="most1">
        </div>
      </div>
      <div class="okvir desno">
      </div>
      <div class="okvir lijevo">
      </div>
      <div class="rub" id="lijevi-rub">
      </div>
      <div class="rub" id="desni-rub">
      </div>
      <div class="gumica" id="lijeva-gumica">
      </div>
      <div class="gumica" id="desna-gumica">
      </div>
    </div>
<!--                     KRAJ LOGOa                    -->

    <div class="stranica">
        <div class="navpozicija">
          <nav class="navigacija">
            <a href="index.php">NASLOVNICA</a>
            <a href="tabela.php">Tabela</a>
            <a href="kontakt.php">Kontakt</a>
            <a href="linkovi.php">Linkovi</a>
            <?php
              if(isset($_SESSION['user'])){
                print '<a href="dodavanje.php?action=logout">Nova novost</a>';
                print '<a href="login.php?action=logout">Logout</a>';
              }
              else{
                print '<a href="login.php">Login</a>';
              }
             ?>
          </nav>
        </div>

      <div class="glavni-citav autovisina">
        <h1>Tabela</h1>
        <form class="forma-kontakt" action="index.html" method="get">

          <div class="grupa-unos">
            <label>Ime i prezime</label>
            <input id="ime_polje" type="text" name="name" value="" onkeyup="validiraj_ime(this.value)"><br>
          </div>

          <div class="grupa-unos">
            <label>Email</label>
            <input id="mail_polje" type="email" name="name" value="" onkeyup="validiraj_mail(this.value)"><br>
          </div>

          <div class="grupa-unos">
            <label>Grad</label>
            <select onchange="izmjeniGrad()">
              <option>Sarajevo</option>
              <option>Zenica</option>
            </select><br>
          </div>

          <div class="grupa-unos">
            <label>Telefon</label>
            <input id="telefon_polje" type="tel" name="name" value="" placeholder="033/xxx-xxx" onkeyup="validirajTelefon(this.value)"><br>
          </div>

          <div class="grupa-unos">
            <label>Ocjena stranice (Sto je vise desno, bolja stranica)</label>
            <input type="range" name="name" min="1" max="5"><br>
          </div>

          <div class="grupa-unos">
            <label>Spol</label>
            <div class="radio-okvir">
              <input type="radio" name="gender" value="male" checked> Muski
              <input type="radio" name="gender" value="female"> Zenski
            </div>
          </div>

          <div class="grupa-unos">
            <label>Poruka</label>
            <textarea rows="6" cols="40"></textarea>
          </div>

          <input class="dugme" type="submit" value="Posalji">
          <div class="cistimo-float"></div>
        </form>
      </div>

    </div>

  </body>
</html>
