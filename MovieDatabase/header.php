<HEAD>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stil.css" />
  <script type="text/javascript" src="js.js"></script>
  <TITLE>
    Movie Database
  </TITLE>
</HEAD>
<BODY <?php echo ($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/") ? ' onload="onLoad()"' : null?>>
<div class="top">
  <a class="logoLink" href="index.php">
    <div class="fullLogo">
      <div class="logoWrap">
        <div class="logoLine">
        </div>
        <div class="logoBack">
          <div class="logo">
          </div>
        </div>
        <div class="logoLine">
        </div>
      </div>
      <p class="logoText">MDB</p>
    </div>
  </a>
  <div id="login">
  <?php if (isset($_SESSION['user'])): ?>
    Zdravo <?php echo $_SESSION['user'] ?>
    <form id="logout" action="index.php" method="post">
      <input type="submit" name="logout" value="Logout"/>
    </form>
  <?php else: ?>
    <form id="login" method="post">
      <input type="text" name="username" placeholder="Username" />
      <input type="text" name="password" placeholder="Password"/>
      <input type="submit" value="Login"/>
    </form>
  <?php endif; ?>
</div>
</div>
<div class="header">

  <ul class="headerBar">
    <li class="headerItem">
      <a <?php echo ($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="index.php">
          Home
      </a>
    </li>
    <li class="headerItem">
      <a <?php echo ($_SERVER['REQUEST_URI'] == "/table.php") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="table.php">
          Top rated
      </a>
    </li>
    <li class="headerItem">
      <a <?php echo ($_SERVER['REQUEST_URI'] == "/about.php") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="about.php">
          About
      </a>
    </li>
    <li class="headerItem">
      <a <?php echo ($_SERVER['REQUEST_URI'] == "/contact.php") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="contact.php">
          Contact
      </a>
    </li>
    <?php if(!isset($_SESSION['user'])):?>
    <li class="headerItem">
      <a <?php echo ($_SERVER['REQUEST_URI'] == "/register.php") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="register.php">
          Register
      </a>
    </li>
    <?php else:?>
      <li class="headerItem">
        <a <?php echo ($_SERVER['REQUEST_URI'] == "/add.php") ? 'id="activeHeaderLink"' : null?> class="headerLink" href="add.php">
            Dodaj vijest
        </a>
      </li>
    <?php endif;?>

    <?php if($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/"): ?>
    <li class="headerItem">
      <select id="filter" name="filter" onchange="onFilter(this.value)">
        <option value="all">Sve novosti</option>
        <option value="daily">Današnje vijesti</option>
        <option value="weekly">Novosti ove sedmice</option>
        <option value="monthly">Novosti ovaj mjesec</option>
      </select>
    </li>
    <li class="headerItem">
      <form method="post">
        <select id="sort" name="sort" onchange="onSortChanged(this)">>
          <option value="date" <?php echo (!isset($_POST['sort']) || strpos("date", $_POST['sort'])!==FALSE)?"selected":null?>>Sortiraj po datumu</option>
          <option value="alpha" <?php echo (isset($_POST['sort']) && strpos("alpha", $_POST['sort'])!==FALSE)?"selected":null?>>Sortiraj abecedno</option>
        </select>
      </form>
    </li>
  <?php endif; ?>
  </ul>
</div>
