<!DOCTYPE html>

<!-- vise css fileova? mogu li slike u html-->
<html>
  <head>
    <title>Vehicles</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/vehicles.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->
  </head>

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


  <div class="table-wrapper">
    <table class="car-table">

      <tr class="classes">
        
        <th>C</th>
        <th>CLA/CLS</th>
        <th>GT</th>
        <th>S</th>
        <th>G</th>
      </tr>

      <tr>
        <td>
          <div class="car">
            <img src="css/img/vehicles/c1.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/cla1.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/gt1.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/s1.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/e1.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>
      </tr>


       <tr>
        <td>
          <div class="car">
            <img src="css/img/vehicles/c2.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/cla2.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/gt2.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/s2.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/e2.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="car">
            <img src="css/img/vehicles/c3.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/cla3.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/gt1.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/s3.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/e3.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="car">
            <img src="css/img/vehicles/c4.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/cla4.png" alt="">
            <p> Mercedes S</p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/gt2.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/s4.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>

        <td>
          <div class="car">
            <img src="css/img/vehicles/e4.png" alt="">
            <p> Mercedes S </p>
          </div>
        </td>
      </tr>




    </table>
  </div>


  <div class="footer">
    <p>© 2016 MERCEDES-BENZ</p>
  </div>
  
  </body>

  </html>