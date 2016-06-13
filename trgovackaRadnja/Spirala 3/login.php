<?php
session_name('imeSesije');
session_id('idSesije');
session_start();
$_SESSION['username'] = "";
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Trgovacka radnja</TITLE>
<script src="kontakt.js"></script>
<link rel="stylesheet" type="text/css" href="stilLogin.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
  <div class="welcome"> WELCOME </div>
  <div class="formaOkvir">
    <form id="forma" action = "login.php">
	  <br> <br> 
	  <label for="user"> Username:&nbsp;</label>
	  <input type="text" name="user" id="user"> <br> <br>
	  <label for="pw"> Password:&nbsp;&nbsp;</label>
	  <input type="text" name="pw" id="pw"> <br> <br>
	  <input type="submit" id="potvrdi" value="NISSAN"> <br> <br> 
	</form>
  </div>
  <script type="text/javascript">
	alert("Omogucena je prijava sa 2 naloga:\nObicni korisnik([user]=>korisnik [pw]=>korisnik)\n             Admin([user]=>admin    [pw]=>admin)");
  </script>;
  <div class="neispravniPodaci"> &nbsp;&nbsp;Niste unijeli odgovarajuci username ili password!&nbsp;&nbsp; </div>
  <?php
		function dajPassword($user)
		{
			$fajlLogin= file_get_contents('fajlLogin.txt');
			$rijeci = preg_split('/[\s]+/', $fajlLogin, -1, PREG_SPLIT_NO_EMPTY);
			$nasao = 0;
			foreach($rijeci as $rijec) {
				if($nasao === 1) {
					return $rijec;
					break;
				}
				if($rijec === $user)
					$nasao = 1; 
			}
			return $nasao;
		}
		
		if( (isset($_REQUEST['user']) && $_REQUEST['user']!="") && (isset($_REQUEST['pw']) && $_REQUEST['pw']!="") )
		{
			$user = $_REQUEST['user'];
			$pw = $_REQUEST['pw'];
			$pwFile = dajPassword($user);
			if(password_verify($pw, $pwFile)) {
				$_SESSION["username"]=$user;

				echo "<script type=\"text/javascript\">
					  document.getElementById('user').value = \"\";
					  document.getElementById('pw').value = \"\";
					  document.getElementsByClassName('neispravniPodaci')[0].style.display = \"none\";	
                     </script>";
				header('Location: naslovna.php');
			}
			else
			{ 
				echo "<script type=\"text/javascript\">
					  document.getElementsByClassName('neispravniPodaci')[0].style.display = \"block\";
                     </script>";
				$_SESSION["username"]=null;
			}
		}
		else
			echo "<script type=\"text/javascript\">
					  document.getElementsByClassName('neispravniPodaci')[0].style.display = \"none\";	
                     </script>";
	?>
</BODY>
</HTML>