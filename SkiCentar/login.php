<!DOCTYPE html>
	
	<html>
	<head>
	<meta charset="UTF-8">
	<title>SkiCentarNH</title>
	<link rel="stylesheet" type="text/css" href="stilNH.css">
	</head>
	
	<body>
		
		<?php
			session_start();
			$username = "";
			$error="";
			$podaci=fgets(fopen("korisnik.txt","r"));
			$admin=explode(" ",$podaci);

		    if (isset($_SESSION['username']))
		        $username = $_SESSION['username'];
		    else if (isset($_REQUEST['username'])) 
		    {
		        if ($_REQUEST['username'] == $admin[0] && md5($_REQUEST['password']) == $admin[1]) 
		        {
		            $username = $_REQUEST['username'];
		            $_SESSION['username'] = $username;
					header("Location: indexNH.php");
		        }
		        else
		            $error="true";
		    }
		?>
			
		<div class="navigation">
		<ul>
			<li><a href="indexNH.php">Home</a></li>
			<li><a href="infoNH.php">Info</a></li>
			<li><a href="galleryNH.php">Gallery</a></li>
			<li><a href="contactNH.php">Contact</a></li>
			<li><a href="linksNH.php">Links</a></li>
		</ul>
		</div>
		
		<div class="pageContent">
			<div class="logo"></div>
			<p class="pageTitle"> Log in </p>
			
			<form id="logform" action="login.php" method="post">
			<?php
				if($error=="true"){ echo 'Incorrect username or password! <br> <br>';}	
			?>
			 <label for="username">Username </label>
			<input type="text" name="username" placeholder=""  />
			<br>
			 <label for="password">Password </label>
			 <input type="password"  name="password" placeholder=""  />
			 <br>
			 <input  id="logbutton"  type="submit"  value="LOG IN" /> 
			</form>
		</div>
		
		
		
	</body>
	</html>