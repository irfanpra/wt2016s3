<?php include 'gori.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
    <?php include 'header.php'; ?>
    <div class="content">
      <form class="contactForm" method="post">
        <label >
          Slika link:
        </label><br />
        <input type="text" id="emailField" name="slika"/> <br />
        <label >
          Country code:
        </label><br />
        <input type="text" id="ccode" name="countryCode" onblur="validateCountry(this)"/> <br />
        <label >
          Broj telefona:
        </label><br />
        <input type="text" id="brtel" name="phoneNumber" onblur="validatePhone(this)"/> <br />
        <label >
          Tekst:
        </label><br />
        <textarea type="text" rows="30" cols="70" id="passwordField" name="vijest" ></textarea><br />
        <input id="input" type="submit" disabled="true" name="submit" value="Submit" />
      </form>
    </div>
  </BODY>
</HTML>
