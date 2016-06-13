<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = htmlEntities($_POST['username'], ENT_QUOTES);
	$password = htmlEntities($_POST['password'], ENT_QUOTES);

	$password=md5($password);

	if(!file_exists("podaci.txt")) {
  die("File not found");
} else {
	$tmp = fopen("podaci.txt", "r");
	$u="";
	$p="";
	while(($temp=fgets($tmp))!=null)
	{
		$temp=trim($temp);
		if($temp==$username)
		{ $u=$temp;
			$p=fgets($tmp);
			$p=trim($p);}
	}

fclose($tmp);


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
header('Location: http://localhost/zadaca3/Naslovnica.html');
exit();
}
else if( $u==$username && $p==$password) 
{ session_start();

$_SESSION['username']=$username;
$_SESSION['loggedin']=true;

	header('Location: http://localhost/zadaca3/Naslovnica.html');
	exit();
	}
else  {print "Nisu dobri pristupni podaci.";}

}
}

?>
<html>
<head>
<meta charset="UTF-8">
<title>Prijava</title>
</head>
<body>
<form method="post" action="prijava.php">
Username :<input type="text" name="username" value="<?php 
		if (isset($_REQUEST['username']))
print $_REQUEST['username']; 
?>"><br><br>
 Password   : <input type="password" name="password" value="<?php 
		if (isset($_REQUEST['password']))
print $_REQUEST['password']; 
?>"><br><br>
<input type="submit" name="submit" value="Prijava"/>
</form>
</body>
</html>