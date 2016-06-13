<?php session_name('Sesija');
session_id('1');
session_start();
 $_SESSION["username"]="";	
?>
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Sign-In</title>
 <link rel="stylesheet" type="text/css" href="LoginStil.css"> 
 </head> <body id="Pozadina">
 <?php
 
if(isset($_POST['submit']) && ($_REQUEST['user']=="" || $_REQUEST['pass']==""))
{
	echo '<script type="text/javascript">'; 
echo 'alert("Popunjite polja za username i password!")'; 
echo '</script>';  
}
?>
<?php
if(isset($_POST['submit']) && isset($_REQUEST['user']) && $_REQUEST['user']!="" && isset($_REQUEST['pass']) && $_REQUEST['pass']!="")
 {
			$user = $_REQUEST['user'];
			$pw = $_REQUEST['pass'];
			
	
			$pwFile = dajPW($user);
	
	 		
			if(password_verify($pw, $pwFile)) {
	 $_SESSION["username"]=$user;				
	 header('Location: NaslovnaTaska3.php');

	 
	 
 }
 else
 {
	echo '<script type="text/javascript">'; 
echo 'alert("Ne ispravan username ili password!")'; 
echo '</script>';  
	 
 }
 }
 ?>
 <?php
 function dajPW($username)
	{
	$lines= file("log.txt");
	$data=array();
	$u=$username;
	$p="almeidn";
	
	for($i=0; $i<count($lines);$i++)
	{
		if(trim($lines[$i])==trim($u))
		{
				

			$p=trim($lines[$i+1]);
			break;
		}
	}

return $p;
	}
?>


 <div id="Prijava">
 <fieldset style="width:20%">
 <legend id="tekst">LOGIN</legend>
 <form method="POST" action="login.php" id="tekst"> User:  <br>
 <input type="text" name="user" size="30" id="tekst"><br> Password: <br>
 <input type="password" name="pass" size="30"><br>
 <input id="button123" type="submit" name="submit" value="Login" >
 </form>
 </fieldset>
 </div> 
 </body>
 </html>