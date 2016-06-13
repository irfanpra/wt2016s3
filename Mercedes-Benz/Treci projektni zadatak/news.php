<?php

  $niz = $polja = array();
    
    $action ="";

    if(isset($_POST["action"])){
      $action = $_POST["action"];
    }

    function readNews()
    {
    
      $niz = $polja = array();
      $i = 0;
      $handle = fopen("assets/news.csv", "r");
      if($handle)
      {
        while(($red = fgetcsv($handle)) !== false)
        {
          if(empty($polja))
          {
            $polja = $red;
            continue;
          }
          foreach($red as $kljuc => $vrijednost)
          {
            $vrijednost = str_replace('&#44;', ',', $vrijednost);
            $niz[$i][$polja[$kljuc]] = $vrijednost;

          }
          $i++;
        }
        fclose($handle);      
    }         
     return $niz;
  }

  function ABCcompare($a, $b)
  {

    return strtolower($a["Header"]) > strtolower($b["Header"]);
  }

  function datesCompare($a, $b)
  {
    $a = strtotime($a["Date"]);
    $b = strtotime($b["Date"]);
    return $a < $b;
  }

  $niz = readNews();


  if($action == "sort")
        usort($niz, "ABCcompare");
      else
        usort($niz, "datesCompare");

?>


<!DOCTYPE html>

<!-- vise css fileova? mogu li slike u html-->
<html>
  <head>
    <title>News</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/news-style.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <script type="text/javascript" src="script-dates.js"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
  </head>

  <body onload="setDate()">
 

 

<div class="header">
    <div class="menu">
          <div class="logo">
            <div class="merc">
              <div class="ring">
                <div class="top"></div>
                  <div class="right"></div>
                  <div class="left"></div>
                </div>
              </div>
            </div>
            
          <div class="text-logo">
            <p> Mercedes-Benz</p>
            <p>The best or nothing</p>
          </div>

            <div class="menu-wrapper">
              <ul class="top-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>

            <div class="login-form">
                <?php
              require('login.php');
              ?>
            </div>
              

    </div>
  </div>


  <div class="news-wrapper">

    <div id="top-wrapper">
       <div id="news-filter">
        <select id="options">
          <option>Sve novosti</option>
          <option>Današnje novosti</option>
          <option>Novosti ove sedmice</option>
          <option>Novosti ovog mjeseca</option>
          
        </select>

        <button id="button-filter" onclick="filtrate()">Filtriraj</button>

        </div>  
        
         <form id="sort" method = "post" action="news.php">
              <input class="sortButton" id="button-abc" type="submit" value="Sortiraj abecedno">
              <input type="hidden" name="action" value="sort">
            </form>


        


            <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] == "1") { ?>
              <form id="add-news" method = "post" action="addNewNew.php">
               <input class="sortButton" id="button-add" type="submit" value="Dodaj novost">
              </form>
            <?php } ?>

            <br><br>
         
        
      
    </div>
  


    <div class="latest-wrapper">
    <h2>Latest</h2>
      <div class="latest">
        <?php
          if(count($niz)>0)
          for($i=0; $i < count($niz)/2-1; $i++)
          { ?>
              <article class="news">
              <p class="published"> <?php print htmlEntities($niz[$i]["Date"], ENT_QUOTES) ?>  </p> 
              <img src= " <?php print htmlEntities($niz[$i]["Picture"], ENT_QUOTES) ?>"  alt="">
              <h3> <?php print htmlEntities($niz[$i]["Header"], ENT_QUOTES) ?> </h3> 
              <p> <?php print htmlEntities($niz[$i]["Content"], ENT_QUOTES) ?> </p>
              </article>
          <?php } ?>
      </div>
    </div>




    <div class="most-wrapper">
    <h2>Most viewed</h2>
      <div class="most-viewed">
        <?php
          if(count($niz)>0)
          for($i=count($niz)/2; $i < count($niz); $i++)
          { ?>
              <article class="news">
              <p class="published"> <?php print htmlEntities($niz[$i]["Date"], ENT_QUOTES) ?>  </p> 
              <img src= " <?php print htmlEntities($niz[$i]["Picture"], ENT_QUOTES) ?>"  alt="">
              <h3> <?php print htmlEntities($niz[$i]["Header"], ENT_QUOTES) ?> </h3> 
              <p> <?php print htmlEntities($niz[$i]["Content"], ENT_QUOTES) ?> </p>
              </article>
          <?php } ?>      
      </div>
    </div>


  </div>

  <div class="footer">
    <p>© 2016 MERCEDES-BENZ</p>
  </div>

  </body>
  </html>
