﻿<!DOCTYPE html>

<!-- vise css fileova? mogu li slike u html-->
<html>
  <head>
    <title>Mercedes-Benz</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
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

            <div class="login-form">
                <?php
              require('login.php');
              ?>
            </div>
    </div>
   </div>



  <div class="content">
     <div class="slider">
      <img class='photo' src="css/img/index/cov1.jpg" alt="" />
      <img class='photo' src="css/img/index/cov2yellow.jpg" alt="" />
      <img class='photo' src="css/img/index/cov3.jpg" alt="" />
      <img class='photo' src="css/img/index/main.jpg" alt="" />
    </div> 
  </div>
  
  <div class="footer">
    <p>© 2016 MERCEDES-BENZ</p>
  </div>

  <div class="footer-second">
    <p>[1] Further information about the official fuel consumption and the official specific CO2 emissions for new passenger automobiles can be found in the 'New Passenger Vehicle Fuel Consumption and CO2 Emission Guidelines', which are available free of charge at all sales outlets and from Deutsche Automobil Treuhand GmbH, www.dat.de.</p>
  </div>
  
  </body>
</html>