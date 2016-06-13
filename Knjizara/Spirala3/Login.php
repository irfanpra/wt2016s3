<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Login</TITLE>

<link rel="stylesheet" type="text/css" href="stil.css">
<script src = "novost.js"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<?php
			$_message = '';
			$_ok = false;

			if (isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["password"])) 
			{
				$_username = $_POST["username"];
				$_password = $_POST["password"];
				
				$_adminPodaci = file("AdminPodaci.csv");

				foreach($_adminPodaci as $_admin) {
					$_adminPodaci = explode(',',$_admin);
					if($_adminPodaci[0] == $_username && $_adminPodaci[1] == md5($_password)) {
						$_SESSION["Log"] = true;
						$_message="";
						$_ok = true;
					}
				}
				if(! $_ok) {	
					$_message = 'Pogrešan username ili password';
				}
			}

			if($_ok)
				{
                  header("Location:admin.php");					
			}
			?>
     <div id = "Naslov">
       <h1>eBook</h1>
     </div>
         <div id="meni">
             <ul>
             <li><a href="Knjižara.html">Početna</a></li>
             <li><a href="Knjiga.html">Knjige</a></li>
             <li><a href="Linkovi.html">Linkovi</a></li>
             <li><a href="Onama.html">O nama</a></li>
             <li><a href="Kontakt.html">Kontakt</a></li>
			 <li><a href="Login.php">Login</a></li>
             </ul>
             </div>
			
			 <div id = "NaslovLogin">
			 <h1>Unesite podatke</h1>
			 </div>
			 <div id = "FormaLogin">
			 <form action="Login.php" class="Log" method="post"> 
    		 <p> 
             <label for = "username" class= "uname"> Username: </label>
			 <br>
             <input id="username" name="username" required="required" type="text" placeholder="Username">
             </br>
			 </p>
             <p> 
             <label for="password" class="youpasswd" data-icon="p">Password:</label>
			 <br>
             <input id="password" name="password" required="required" type="password" placeholder="Password"> 
             </br>
			 </p>
             <p> 
            <input type="submit" name = "submit" value="submit"> 
            </p>
			<div id="Poruka">	
			<h3><?php echo $_message;?></h3>
			</div>
            </form>

			</div>
			 <div id="LOGOLogin">
             <p>B</p>
             </div>
</BODY>
</HTML>