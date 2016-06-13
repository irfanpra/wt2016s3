<?php
  session_start();
  $openShiftFolder = $_ENV['OPENSHIFT_DATA_DIR'];
  if(isset($_POST['username']) && isset($_POST['password'])) {
    $file = file_get_contents("users");
    $file = str_replace("\n", "", $file);
    $niz = explode(",", $file);
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($niz[0] == $username && $niz[1] == sha1($password)) {
      $_SESSION['user']=$_POST['username'];
    }
  }

  if(isset($_POST['vijest'])) {
    $vijestiFile = file_get_contents($openShiftFolder."vijesti.csv");
    $vijest = $_POST['vijest'];
    if(strpos($vijest, ',') !== FALSE) {
      $vijest = str_replace('"', '""', $vijest);
      $vijest = '"'.$vijest.'"';
    }
    $slike = (isset($_POST['slika']))?$_POST['slika']:'';
    if(isset($_POST['slika'])) {
      if(strpos($slike, ',') !== FALSE) {
        $slike = str_replace('"', '""', $slike);
        $slike = '"'.$slike.'"';
      }
    }

    $time = date(DATE_ISO8601, strtotime("now"));
    $vijestiFile = $time.','.$slike.','.$vijest."\n".$vijestiFile;
    $vijestiFile = strip_tags($vijestiFile);
    file_put_contents($openShiftFolder."vijesti.csv", $vijestiFile);
  }

  if(isset($_POST['logout'])) {
    unset($_SESSION['user']);
  }

  if(($_SERVER['REQUEST_URI'] == "/add.php" && !isset($_SESSION['user'])) || ($_SERVER['REQUEST_URI'] == "/register.php" && isset($_SESSION['user']))) {
    header('Location: index.php');
  }
?>
