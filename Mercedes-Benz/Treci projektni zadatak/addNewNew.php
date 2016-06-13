<?php
  
    session_start();
    if(!isset($_SESSION["logged"]) || $_SESSION["logged"] == "0")
    {
      header("Location: new.php");
      exit;
    }

    date_default_timezone_set('Europe/Sarajevo');

    

    function SaveToCSV()
    {
      $path = "assets/news.csv";
      $file = fopen($path, "a");
      $naslov = $_POST["title"];   
      $sadrzaj = $_POST["content"];
      $link = $_POST["picture"];
      
      
      $naslov = str_replace(PHP_EOL, ' ', $naslov);
      $sadrzaj = str_replace(PHP_EOL, ' ', $sadrzaj);
      $naslov = str_replace(',', '&#44;', $naslov);
      $sadrzaj = str_replace(',', '&#44;', $sadrzaj);


      $datum = date("d.m.Y H:i:s");
      $text = $naslov.",".$sadrzaj.",".$link.",".$datum.PHP_EOL;
      fwrite($file, $text);
      fclose($file);
    }



    if(isset($_POST["save"]))
    {  
          SaveToCSV();
    }

?>


<!doctype html>


<html>

  <head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/input.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <script type="text/javascript" src="validator.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  

  <body>


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

     </div>
    </div>

<div class="form-wrapper">
    <form class="contact_form" action="#" method="post" name="contact_form">
      <ul>
        <li>
          <h2>Mercedes-Benz News</h2>
          <h3>Write something new about the best cars in the whole World: </h3>
        </li>
        <li>
          <label>Title:</label>
          <input type="text" name="title" id="title" required></input>
        </li>
        <li>
          <label>Content:</label>
          <textarea name="content" id="content" required></textarea>
        </li>
        <li>
          <label>Picture:</label>
          <input type="text" name="picture" id="picture" required></input>
        </li>
        <li>
        <label>Country code:</label>
        <input onblur="validateCode()" type="text" name="code" id="code" required></input>
        </li>
        <li>
          <label>Telephone number:</label>
          <input onblur="validateCode()" type="tel" name="tel" id="tel" required>
        </li>
        <li>
          <p id="test">Before submit check that all fields are filled out and that the telephone number is correct.</p>
        </li>
        <li>   
          <input type="submit" id = "submitBtn" name = "save" value="Save" disabled="false">
        </li>
    </ul>

  </form>
  </div>


    <div class="footer">
      <p>© 2016 MERCEDES-AMG</p>
    </div>

  </body>

</html>



