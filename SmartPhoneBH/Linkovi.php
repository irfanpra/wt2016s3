<!DOCTYPE html>
<html>
<head>
	<title>SmartphoneBH - Linkovi</title>
	<link rel="stylesheet" type="text/css" href="SmartphoneBH.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="omotac">
<div id="header">
	<div id="logo">
			<a href="Naslovnica.php" id="linkLogo"><div id="okvirTelefona"></div></a>
			<div id="dugme"></div>
			<div id="zvucnik"></div>
		</div>
	<a href="Naslovnica.php" id="naslovLink"><h1>SmartPhoneBH | Smartphone, Tablet Reviews, Tips and Tricks</h1></a>
	<div id="meni">
		<ul>
			<li id="liNovosti"><a href="Naslovnica.php"><span>Novosti</span></a></li>
			<li id="liPodstranica"><a href="Tabele.php"><span>Telefoni</span></a></li>
			<li id="liForma"><a href="Kontakt.php"><span>Forma za kontakt</span></a></li>
			<li id="liListaLinkova"><a href="Linkovi.php">Lista linkova</a></li>
			<li id="liLogin"><a href="LoginPage.php">Login</a></li>
			<?php
					session_start();
					if(isset($_SESSION['login'])) {
				?>	
						<li id="liAdminPage"><a href="AdminPage.php">Admin Page</a></li>
				<?php
					}
			?>	
		</ul>
	</div>
</div>

<h1 id="h1Linkovi">Linkovi</h1>
<hr>
<ul id="listaZaLinkove">
			<li class="brendovi" id="samsung">
				<a href="http://www.samsung.com/hr/home/" target="_blank">Samsung</a>
				<br>
				<br>
				For over 70 years, Samsung has been dedicated to making a better world through diverse businesses that today span advanced technology, semiconductors, skyscraper and plant construction, petrochemicals, fashion, medicine, finance, hotels, and more. Our flagship company, Samsung Electronics, leads the global market in high-tech electronics manufacturing and digital media.
			</li>
			<li class="brendovi" id="apple">
				<a href="http://www.apple.com/" target="_blank">Apple</a>
				<br>
				<br>
				Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. Its hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, and the Apple Watch smartwatch. Apple's consumer software includes the OS X and iOS operating systems, the iTunes media player, the Safari web browser, and the iLife and iWork creativity and productivity suites. Its online services include the iTunes Store, the iOS App Store and Mac App Store, and iCloud.
			</li>
			<li class="brendovi" id="sony">
				<a href="http://www.sony.ba/" target="_blank">Sony</a>
				<br>
				<br>
				At Sony, our mission is to be a company that inspires and fulfills your curiosity. Our unlimited passion for technology, content and services, and relentless pursuit of innovation, drives us to deliver ground-breaking new excitement and entertainment in ways that only Sony can.Creating unique new cultures and experiences. Everything we do, is to move you emotionally.
			</li>
			<li class="brendovi" id="lg">
				<a href="http://www.lg.com/hr" target="_blank">LG</a>
				<br>
				<br>
				LG Electronics manufactures a wide range of smartphones and tablet devices.Other than the G3, LG officially unveiled the curved smartphone, G Flex, on 27 October 2013. LG has released it in South Korea in November 2013, and later announced releases in Europe, the rest of Asia, and North America. At Consumer Electronics Show in January 2014, LG announced an U.S. release for the G2 across several major carriers. In 2015, LG has released LG G4 globally in late May through early June
			</li>
			<li class="brendovi" id="htc">
				<a href="http://www.htc.com/us/" target="_blank">HTC</a>
				<br>
				<br>
				HTC brings brilliance to life through leading innovation in smart mobile device and experience design. Beginning with a vision to put a personal computer in the palm of our customers’ hands, we have led the way in the evolution from palm PC to smartphone.
			</li>
			<li class="brendovi" id="huawei">
				<a href="http://www.huawei.com/en/" target="_blank">Huawei</a>
				<br>
				<br>
				Huawei is a global leader of ICT solutions. Continuously innovating based on customer needs, we are committed to enhancing customer experiences and creating maximum value for telecom carriers, enterprises, and consumers. Our telecom network equipment, IT products and solutions, and smart devices are used in 170 countries and regions. Huawei ranked 228th on the Global Fortune 500 based on its revenue in 2014. In 2014, the company’s revenue reached approximately USD 46.5 billion.
			</li>
			<li class="brendovi" id="motorola">
				<a href="http://www.motorola.com/us/home" target="_blank">Motorola</a>
				<br>
				<br>
				Motorola exists to invent, build and deliver the best mobile devices on the planet, improving the lives of millions of people. Motorola created the mobile communications industry. We invented most of the protocols and technologies that make mobile communications possible, including the first mobile phone, the first base station, and most everything in between.
			</li> 
		</ul>
<hr>
<div id="footer">
		<ul id="drmreze">
			<li><a href="http://www.facebook.com" target="_blank"><img src="facebook.png" alt="Facebook"></a></li>
			<li><a href="http://www.twitter.com" target="_blank"><img src="twitter.png" alt="Twitter"></a></li>
			<li><a href="http://www.youtube.com" target="_blank"><img src="youtube.jpg" alt="Youtube"></a></li>
			<li><a href="https://plus.google.com/explore" target="_blank"><img src="googleplus.png" alt="Google +"></a></li>
		</ul>
		<p id="copyright">Copyright (c) Mirnes Peljto  <a href="#Top">Top</a></p>
	</div>
</div>
</body>
</html>