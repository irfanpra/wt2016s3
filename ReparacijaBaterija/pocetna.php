<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Battery repair</title>
	<link rel="stylesheet" type="text/css" href="Stilovi/stil.css">
	<link rel="stylesheet" type="text/css" href="Stilovi/logo.css">
	<script type="text/javascript" src="Skripte/skripta.js"></script>
</head>

<body>
	<div class="meni">
		<div class="logo">
			<div class="baterija">
				<div class="battery charging"> </div>
				<div class="battery-veliki"> </div>
				<div class="battery-mali"> </div>
			</div>
			
			<div class="naslov">
				<div id="tekstlogo"> B a t t e r y&nbsp;&nbsp;&nbsp;r e p a i r </div>
			</div>
		</div>
		
		<ul>
			<li class="aktivna">Pocetna</li>
			<li> <a href="onama.php"> O nama </a> </li>
			<li> <a href="cjenovnik.php"> Cjenovnik </a> </li>
			<li> <a href="kontakt.php"> Kontakt </a> </li>
			<li> <a href="vanjskilinkovi.php"> Vanjski linkovi </a> </li>
			<?php
        		if(isset($_SESSION['user'])){
        			echo "<li> <a href='dodajnovost.php'>Dodaj novost</a><li>";
          			echo "<li> <a href='login.php?potvrdi=logout'>Logout</a><li>";
        		}
        		else{
          			echo "<li> <a href='login.php'>Login</a> </li>";
        		}
       		?>
		</ul>
	</div>
	
	<div class="sredina">
		<div class="kolona-lijeva">
			<h3>Novosti</h3>
			<div id="odabirFiltera">
	         Filter:
	            <select onchange="filtriraj(this)">
	                <option value="sve">Sve novosti</option>
	                <option value="danasnje">Današnje novosti</option>
	                <option value="sedmicne">Sedmične novosti</option>
	                <option value="mjesecne">Mjesečne novosti</option>
	            </select>
        	</div>


        		<div class="vijest">
					<div id="v1"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p> 
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>		
				</div>

				<div class="vijest">
					<div id="v2"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p> 
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>			
				</div>
				
				<div class="vijest">
					<div id="v3">  </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p> 
						Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document 
						written in a markup language. Although most often used to set the visual style of web pages and user interfaces 
						written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, 
						and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS is a cornerstone 
						technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user 
						interfaces for many mobile applications.
					</p>				
				</div>
				
				<div class="vijest">
					<div id="v4"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>
				</div>

				<div class="vijest">
					<div id="v5"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>				
				</div>

				<div class="vijest">
					<div id="v6"></div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>					
				</div>

				<div class="vijest">
					<div id="v7"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>					
				</div>

				<div class="vijest">
					<div id="v8"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>					
				</div>

				<div class="vijest">
					<div id="v9"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>					
				</div>

				<div class="vijest">
					<div id="v10"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>					
				</div>

				<div class="vijest">
					<div id="v11"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>
				</div>

				<div class="vijest">
					<div id="v12"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>
				</div>

				<div class="vijest">
					<div id="v13"> </div>
					<img src="Slike/slika.jpg" alt="slika">
					<p>
						HTML5 is a markup language used for structuring and presenting content on the World Wide Web. 
						It is the fifth and current version of the HTML standard.
						It was published in October 2014 by the World Wide Web Consortium (W3C) to improve the language with 
						support for the latest multimedia, while keeping it easily readable by humans - and consistently understood by 
						computers and devices such as web browsers, parsers, etc. HTML5 is intended to subsume not only HTML 4, 
						but also XHTML 1 and DOM Level 2 HTML.
					</p>
				</div>
		</div>
		
		<div class="kolona-desna">
			<div class="red-desne">
				<p>
					"Battery repair.doo" <br> Hasana Sućeske 2 <br>+38733111222 <br>+39761223445 <br> batteryrepair@gmail.com <br>
				</p>
			</div>
			
			<div class="red-desne">
				<div class="komentarWrap">
						<label id="klabela" for="komentar">Ukoliko imate neki komentar ili pitanje, upišite u polje ispod: </label>
						<textarea id="komentar" name="komentar" cols="60" rows="8" > </textarea>
						<input type="submit" id="dugme" value="Pošalji" /> 
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>