﻿<!DOCTYPE html>

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

            <div class="login-form">
                <?php
              require('login.php');
              ?>
            </div>
    </div>
   </div>



  <div class="form-wrapper">
  	<form class="contact_form" action="#" method="post" name="contact_form">
  		<ul>
		    <li>
		    	<h2>Mercedes-Benz Newsletter</h2>
		    	<h3>To keep you in the loop of our latest news, register now for our email newsletter.</h3>
		    </li>
		    <li>
		    	<label>First name:</label>
		    	<input onkeyup="validateFirstName()" type="text" name="first-name" id="first-name" required=""></input>
		    </li>
		    <li>
		    	<label>Last name:</label>
		    	<input type="text" name="last-name" id="last-name" onkeyup="validateLastName()" required></input>
		    </li>
		    <li>
		    	<label>Email:</label>
		    	<input onkeyup="validateEmail()" type="text" name="email" id="email" required=""></input>
		    </li>
	    	<li>
	    	<label>Confirm email:</label>
	    	<input onkeyup="crossValidEmail()" type="text" name="conf" id="conf" required=""></input>
		    </li>
		    <li>
		    	<label>Telephone number:</label>
		    	<input onkeyup="validateTel()" type="tel" name="tel" id="tel" required>
		    </li>
		    <li>
		    	<label>Birth date:</label>
		    	<input id="dob" name="dob" type="date">
		    </li>
		    <li>
		    	<label>Message:</label>
		    	<textarea name="message" cols="30" rows="8" required></textarea>
		    </li>
		    <li>
		    	
		    </li>
		    <li>
		    	<p>The data you provide will only be used for sending this newsletter. You can unsubscribe from our newsletter any time you wish by simply clicking on the link at the end of the newsletter.</p>
		    </li>
		    <li>
		    	<button class="submit" type="submit">Send message</button>
		    </li>
		</ul>

	</form>
	</div>


	  <div class="footer">
	    <p>© 2016 MERCEDES-AMG</p>
	  </div>

  </body>

 </html>