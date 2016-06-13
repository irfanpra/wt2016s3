<?php
   session_start();
   session_unset();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   header("Location: login.php");
?>