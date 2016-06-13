    <?php
session_start();

  if (!isset($_SESSION["logged"])){
    $_SESSION["logged"] = "0";
      }

  $action = "";

  if (isset($_POST["action"])){
    $action = $_POST["action"];
  }

  function login(){
    $path = "assets/usernames.txt";
    $a = fopen($path, "r");
    $doc = fread($a, filesize($path)) ;
    $i = strpos($doc, ",", 0);
    $user = substr($doc, 0, $i);
    $pass = substr($doc, $i+1);
    $user = trim($user);
    $pass = trim($pass);
  

  if (isset($_POST["username"]) && isset($_POST["password"]) ){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    if ($username == $user && $password == $pass){
      $_SESSION["logged"] = "1";
    }
  }

}

  if ($action == "login"){
    login();
  }

  if ($action == "logout"){
    session_destroy();
    $_SESSION["logged"] = "0";
  }



    if ($_SESSION["logged"] == "0"){
    print'
    <div id="login-wrapper">
      <form id="login" action="#" method="post">
          <input class="login-input" type="text" name="username" placeholder="Username">
          <input class="login-input" type="password" name="password" placeholder="Password">
          <input class="login-button" type="submit" value="Login" name="submit-login">
          <input type="hidden" value="login" name="action">
      </form>

    </div>  ';
     
  }
   


    if ($_SESSION["logged"] == "1"){
      print'
    <div id="logout-wrapper">
      <form id="logout" action="#" method="post">
          <input class="login-button" type="submit" value="logout" name="submit-logout">
          <input type="hidden" value="logout" name="action">
      </form>

    </div>  ';
    } 

    ?>