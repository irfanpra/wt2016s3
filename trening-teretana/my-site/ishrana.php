<?php
	session_start();
	include 'stranice.php';
	include 'funkcije.php';
	$prijavljeniKorisnik = false;
	
	if(provjeriDaLiJePrijavljen())
	{
		//echo 'korisnik je prijavljen';
		$prijavljeniKorisnik = true;
		$username = $_SESSION['username'];
		$imeKorisnika = dajImeKorisnika($username);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML5, CSS3">
<link rel="stylesheet" href="main1.css">
<link rel="stylesheet" href="logo.css">
<title>HOME</title>
</head>
<body>

<header id="he"><div id="brend">
	<p>Fitness trening teretana</p>
</div>
	<div id="loginTip">
	<?php 
							if(!$prijavljeniKorisnik)
							{
								echo " &nbsp&nbsp&#x267B&nbsp<a href='" . $login . "'> Login!</a>";
							
							}
							else
							{
								echo "Korisnik: " . $imeKorisnika . " &nbsp&nbsp&#x267B&nbsp  <a href='" . $logout . "'>Logout!</a>";
							}
				
				?>
	</div>
<div class="teg">
  <div class="osigurac"></div
  ><div class="ploca2"></div
  ><div class="ploca1"></div
  ><div class="sipka"></div
  ><div class="ploca1"></div
  ><div class="ploca2"></div
  ><div class="osigurac"></div>
</div>
</header>

<nav class="menu">
	<div id="mainTraka">
	<ul>
		<li><a href="<?php echo $homepage;?>">Home</a></li>
		<li><a href="<?php echo $trening;?>">Trening</a></li>
		<li><a href="<?php echo $ishrana;?>">Ishrana</a></li>
		<li><a href="<?php echo $suplementacija; ?>">Suplementacija</a></li>
		<li><a href="<?php echo $kontakt;?>">Kontak</a></li>
		
	</ul>
	</div>
</nav>
<section>
	<table id="t1">
	<caption><h4>kalorijska tablica</h4></caption>
		<tr>
			<th>namirnica</th>
			<th>kalorija (kcal)</th>
			<th>proteini</th>
			<th>ugljikohidrati</th>
			<th>masti</th>
		</tr>
		<tr>
			<td>pileća prsa bez kože</td>
			<td>110</td>
			<td>23</td>
			<td>0</td>
			<td>1</td>
		</tr>
		<tr>
			<td>sir Mozzarella</td>
			<td>227</td>
			<td>20</td>
			<td>0</td>
			<td>17</td>
		</tr>
		<tr>
			<td>posni sir</td>
			<td>78</td>
			<td>12</td>
			<td>3</td>
			<td>2</td>
		</tr>
		<tr>
			<td>cijelo jaje</td>
			<td>167</td>
			<td>13</td>
			<td>1</td>
			<td>11</td>
		</tr>
		<tr>
			<td>bjelance</td>
			<td>54</td>
			<td>17</td>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>zobene pahuljice</td>
			<td>402</td>
			<td>14</td>
			<td>66</td>
			<td>7</td>
		</tr>
		</table>
		</section>
<section>
	<header>
	<h2>Doručak šampiona</h2>
	</header>
	<img src="dorucak.jpg" alt="dorucak">
	<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</h5>
</section>

</body>
</html>
