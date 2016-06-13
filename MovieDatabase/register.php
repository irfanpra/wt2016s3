<?php include 'gori.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
    <?php include 'header.php'; ?>
    <div class="content">
      <div class="contactForm">
        <label >
          Email:
        </label><br />
        <input type="text" id="emailField" name="email" oninput="validateEmail(this)"/> <br />
        <label >
          Password:
        </label><br />
        <input type="text" id="passwordField" name="password" oninput="validatePassword(this)" /><br />
        <label >
          Confirm:
        </label><br />
        <input type="text" id="confirmField" name="confirm" oninput="validateConfirm(this)" /><br />
        <input type="button" name="submit" value="Submit" />
      </div>
    </div>
  </BODY>
</HTML>
