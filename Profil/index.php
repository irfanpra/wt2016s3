<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Profile</title>
  <link rel="stylesheet" type="text/css" href="styles/loginStyle.css">
  <SCRIPT src="scripts/login.js"></SCRIPT>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <?php
    $msg = '';

    $sadrzaj=file('csv/login.csv');
    
    if (isset($_POST['login']) && !empty($_POST['user-name']) 
     && !empty($_POST['password'])) {
      
        $array=explode(',',$sadrzaj[0]);

      if ($_POST['user-name'] == $array[0] && 
        sha1($_POST['password']) == $array[1]) {
        $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['user-name'] = $array[0];

      header('Refresh: 1; URL = pages/admin.php');
    }else {
      $msg = 'Wrong username or password';
    }
  }
  ?>

  <form action="index.php" method="post">
    <div class="login-frame">
     <input id="userName"  name="user-name" type="text" required placeholder="Username=admin" /><br />
     <input id="pass" name="password" type="password" required placeholder="Password=admin" />
     <input type="submit" name="login" value="Login">
   </div>
 </form>
 <h4><?php echo $msg; ?></h4>
 <h4><a href="pages/home.html">Continue as a Guest</a></h4>

</body>
</html>