<!DOCTYPE html>
<?php
session_start();
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Podstranica sa tabelom</title>
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

      <div class="glavni-citav">
        <h1>Tabela</h1>
        <table>
          <tr>
            <th>
              Najcitanija kritika
            </th>
            <th>
              Broj pregleda
            </th>
            <th>
              Autor
            </th>
            <th>
              Kategorija
            </th>
            <th>
              Datum objave
            </th>
          </tr>
          <tr>
            <td>
              <a href="http://www.jutarnji.hr/nova-knjiga-ante-tomica--uz-nevjerojatan-smisao-za-fabuliranje--vrijednost--romana-je-i-u-izbjegavanju-stereotipa-o-bogatasima-/1256499/">Kritika romana Ante Tomića, 'Veličanstveni Poskokovi'</a>
            </td>
            <td>
              2015
            </td>
            <td>
              Jagna Pogačnik
            </td>
            <td>
              Proza
            </td>
            <td>
              17.12.2014.
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nydailynews.com/entertainment/movies/citizen-kane-premieres-1941-article-1.2202132">‘Citizen Kane’ is superb: 1941 movie review</a>

            </td>
            <td>
              1941
            </td>
            <td>
              Kate Cameron
            </td>
            <td>
              Filmovi
            </td>
            <td>
              2.5.1941
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.sputnikmusic.com/review/2376/Morphine-Cure-for-Pain/">Morphine - Cure for Pain</a>
            </td>
            <td>
              999
            </td>
            <td>
              Andrew H.
            </td>
            <td>
              Muzika
            </td>
            <td>
              6.4.2005
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://dactylreview.com/2011/01/10/pulp-by-charles-bukowski/">Pulp by Charles Bukowski</a>
            </td>
            <td>
              994
            </td>
            <td>
              Arthur Graham
            </td>
            <td>
              Proza
            </td>
            <td>
              10.1.2011
            </td>
          </tr>
        </table>
      </div>

    </div>

  </body>
</html>
