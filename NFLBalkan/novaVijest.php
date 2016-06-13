<!DOCTYPE html>
<html>
<head>
	<title>Dodavanje vijesti</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stil.css">
	<script src="validacijaVijesti.js"></script>
</head>
<body>
<div hidden id="prijavljen"></div>
<div id="container">
	<a href="./pocetna.php"><div id="wrap">
		<div id="n_left"></div>
		<div id="n_center"></div>
		<div id="n_right"></div>

		<div id="f_left"></div>
		<div id="f_bottom"></div>
		<div id="f_top1"></div>
		<div id="f_top1_add"></div>
		<div id="f_top2"></div>
		<div id="f_top2_add"></div>

		<div id="l_left"></div>
		<div id="l_bottom"></div>

		<div id="b_top_outer"></div>
		<div id="b_top_inner"></div>
		<div id="b_bottom_outer"></div>
		<div id="b_bottom_inner"></div>
		<div id="b_left"></div>
	</div></a>
	<header>

		<a class="tim" href="http://www.buffalobills.com/"><img src="http://prod.static.bills.clubs.nfl.com/nfl-assets/img/gbl-ico-team/BUF/logos/home/large.png" alt="BUF">
		</a>

		<a class="tim" href="http://www.miamidolphins.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/MIA/logos/home/large.png" alt="MIA">
		</a>

		<a class="tim" href="http://www.newenglandpatriots.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NE/logos/home/large.png" alt="NE">
		</a>

		<a class="tim" href="http://www.newyorkjets.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NYJ/logos/home/large.png" alt="NYJ">
		</a>

		<a class="tim" href="http://www.baltimoreravens.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/BAL/logos/home/large.png" alt="BAL">
		</a>

		<a class="tim" href="http://www.bengals.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CIN/logos/home/large.png" alt="CIN">
		</a>

		<a class="tim" href="http://www.clevelandbrowns.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CLE/logos/home/large.png" alt="CLE">
		</a>

		<a class="tim" href="http://www.pittsburghsteelers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/PIT/logos/home/large.png" alt="PIT">
		</a>

		<a class="tim" href="http://www.houstontexans.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/HOU/logos/home/large.png" alt="HOU">
		</a>

		<a class="tim" href="http://www.indianapoliscolts.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/IND/logos/home/large.png" alt="IND">
		</a>

		<a class="tim" href="http://www.jacksonvillejaguars.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/JAC/logos/home/large.png" alt="JAC">
		</a>

		<a class="tim" href="http://www.titans.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/TEN/logos/home/large.png" alt="TEN">
		</a>

		<a class="tim" href="http://www.denverbroncos.com/"><img src="http://prod.static.broncos.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DEN/logos/home/large.png" alt="DEN">
		</a>

		<a class="tim" href="http://www.kansascitychiefs.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/KC/logos/home/large.png" alt="KC">
		</a>

		<a class="tim" href="http://www.oaklandraiders.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/OAK/logos/home/large.png" alt="OAK">
		</a>

		<a class="tim" href="http://www.sandiegochargers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SD/logos/home/large.png" alt="SD">
		</a>

		<a class="tim" href="http://www.dallascowboys.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DAL/logos/home/large.png" alt="DAL">
		</a>

		<a class="tim" href="http://www.newyorkgiants.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NYG/logos/home/large.png" alt="NYG">
		</a>		

		<a class="tim" href="http://www.philadelphiaeagles.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/PHI/logos/home/large.png" alt="PHI">
		</a>

		<a class="tim" href="http://www.washingtonredskins.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/WAS/logos/home/large.png" alt="WAS">
		</a>

		<a class="tim" href="http://www.chicagobears.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CHI/logos/home/large.png" alt="CHI">
		</a>

		<a class="tim" href="http://www.detroitlions.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DET/logos/home/large.png" alt="DET">
		</a>

		<a class="tim" href="http://www.greenbaypackers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/GB/logos/home/large.png" alt="GB">
		</a>

		<a class="tim" href="http://www.minnesotavikings.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/MIN/logos/home/large.png" alt="MIN">
		</a>

		<a class="tim" href="http://www.atlantafalcons.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/ATL/logos/home/large.png" alt="ATL">
		</a>

		<a class="tim" href="http://www.carolinapanthers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CAR/logos/home/large.png" alt="CAR">
		</a>

		<a class="tim" href="http://www.neworleanssaints.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NO/logos/home/large.png" alt="NO">
		</a>

		<a class="tim" href="http://www.buccaneers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/TB/logos/home/large.png" alt="TB">
		</a>

		<a class="tim" href="http://www.arizonacardinals.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/ARI/logos/home/large.png" alt="ARI">
		</a>

		<a class="tim" href="http://www.losangelesrams.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/STL/logos/home/large.png" alt="STL">
		</a>

		<a class="tim" href="http://www.sanfrancisco49ers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SF/logos/home/large.png" alt="SF">
		</a>

		<a class="tim" href="http://www.seattleseahawks.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SEA/logos/home/large.png" alt="SEA">
		</a>

	</header>

	<div id="title">
		<h2>NFL Balkan</h2>
	</div>

	<nav>
		<ul>
			<li><a class="nav" href="./pocetna.php">Naslovnica</a></li>
			<li><a class="nav" href="./timovi.php">Timovi</a></li>
			<li><a class="nav" href="./linkovi.php">Linkovi</a></li>
			<li><a class="nav" href="./kontakt.php">Kontakt</a></li>
			<?php
				$message = '';
            	session_start();
            	if(isset($_SESSION['login'])) 
            	{
            ?>
            <li id="novaVijest"><a class="nav" href="./novaVijest.php">Nova vijest</a></li>
            <li id="logout"><a class="nav" href="./logout.php">Odjava</a></li>
            <?php
            	}
            ?>
            <?php
            	if(!isset($_SESSION['login']))
            	{
      		?>
      		<li id="login"><a class="nav" href="./login.php">Prijava</a></li>
      		<?php
      			}
      		?>
		</ul>
	</nav>
	<?php
		if (isset($_POST['dodaj'])) 
		{
			date_default_timezone_set("Europe/Sarajevo");
            $vijesti = file("vijesti.csv");

            $naslov = htmlentities($_POST['naslov']);
            $naslov = str_replace(",", "&#44;", $naslov);

            $slika = htmlentities($_POST['slika']);
            $slika = str_replace(",", "&#44;", $slika);

            $alt = htmlentities($_POST['alt']);
            $alt = str_replace(",", "&#44;", $alt);
            
            $tekst = htmlentities($_POST['tekst']);
            $tekst = str_replace(",", "&#44;", $tekst);

            $datum = date("Y-m-d");
            $vrijeme = date("H:i:s");

            $telefon = htmlentities($_POST['telefon']);

            if(empty($naslov) || !preg_match("/\.(jpeg|jpg|gif|png)/", $slika) || empty($alt) || empty($tekst))
            {
            	$message = "Neki od podataka nije ispravno unesen, pratite upute iznad svakog od polja.";
				echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
	            $nova = $naslov.",".$slika.",".$alt.",".$tekst.",".$datum." ".$vrijeme.",";
	            array_push($vijesti, $nova);
	            file_put_contents("vijesti.csv", $vijesti);
	            $message = "Uspješno ste dodali vijest.";
	            echo "<script type='text/javascript'>alert('$message');</script>";
            }
    	}

	?>
	<div id="formaVijest">
		<form action="novaVijest.php" method="post">
			<br><label>Naslov(ne smije biti prazno)</label>
			<input id="naslov" type="text" placeholder="Naslov" name="naslov" onfocus="validiraj('naslov')">
			<br>
			<label>URL za sliku(mora biti ispravan i slika)</label>
			<input id="slika" type="url" placeholder="URL slike" name="slika" onfocus="validiraj('slika')">
			<br>
			<label>Alt tag za sliku(ne smije biti prazno)</label>
			<input id="alt" type="text" placeholder="ALT tag" name="alt" onfocus="validiraj('alt')">
			<br>
			<label>Država</label>
			<select id="drzava" onchange="validirajDvoslovniKod()">
				<option value="AF">Afghanistan</option>
				<option value="AX">Åland Islands</option>
				<option value="AL">Albania</option>
				<option value="DZ">Algeria</option>
				<option value="AS">American Samoa</option>
				<option value="AD">Andorra</option>
				<option value="AO">Angola</option>
				<option value="AI">Anguilla</option>
				<option value="AQ">Antarctica</option>
				<option value="AG">Antigua and Barbuda</option>
				<option value="AR">Argentina</option>
				<option value="AM">Armenia</option>
				<option value="AW">Aruba</option>
				<option value="AU">Australia</option>
				<option value="AT">Austria</option>
				<option value="AZ">Azerbaijan</option>
				<option value="BS">Bahamas</option>
				<option value="BH">Bahrain</option>
				<option value="BD">Bangladesh</option>
				<option value="BB">Barbados</option>
				<option value="BY">Belarus</option>
				<option value="BE">Belgium</option>
				<option value="BZ">Belize</option>
				<option value="BJ">Benin</option>
				<option value="BM">Bermuda</option>
				<option value="BT">Bhutan</option>
				<option value="BO">Bolivia, Plurinational State of</option>
				<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
				<option value="BA">Bosnia and Herzegovina</option>
				<option value="BW">Botswana</option>
				<option value="BV">Bouvet Island</option>
				<option value="BR">Brazil</option>
				<option value="IO">British Indian Ocean Territory</option>
				<option value="BN">Brunei Darussalam</option>
				<option value="BG">Bulgaria</option>
				<option value="BF">Burkina Faso</option>
				<option value="BI">Burundi</option>
				<option value="KH">Cambodia</option>
				<option value="CM">Cameroon</option>
				<option value="CA">Canada</option>
				<option value="CV">Cape Verde</option>
				<option value="KY">Cayman Islands</option>
				<option value="CF">Central African Republic</option>
				<option value="TD">Chad</option>
				<option value="CL">Chile</option>
				<option value="CN">China</option>
				<option value="CX">Christmas Island</option>
				<option value="CC">Cocos (Keeling) Islands</option>
				<option value="CO">Colombia</option>
				<option value="KM">Comoros</option>
				<option value="CG">Congo</option>
				<option value="CD">Congo, the Democratic Republic of the</option>
				<option value="CK">Cook Islands</option>
				<option value="CR">Costa Rica</option>
				<option value="CI">Côte d'Ivoire</option>
				<option value="HR">Croatia</option>
				<option value="CU">Cuba</option>
				<option value="CW">Curaçao</option>
				<option value="CY">Cyprus</option>
				<option value="CZ">Czech Republic</option>
				<option value="DK">Denmark</option>
				<option value="DJ">Djibouti</option>
				<option value="DM">Dominica</option>
				<option value="DO">Dominican Republic</option>
				<option value="EC">Ecuador</option>
				<option value="EG">Egypt</option>
				<option value="SV">El Salvador</option>
				<option value="GQ">Equatorial Guinea</option>
				<option value="ER">Eritrea</option>
				<option value="EE">Estonia</option>
				<option value="ET">Ethiopia</option>
				<option value="FK">Falkland Islands (Malvinas)</option>
				<option value="FO">Faroe Islands</option>
				<option value="FJ">Fiji</option>
				<option value="FI">Finland</option>
				<option value="FR">France</option>
				<option value="GF">French Guiana</option>
				<option value="PF">French Polynesia</option>
				<option value="TF">French Southern Territories</option>
				<option value="GA">Gabon</option>
				<option value="GM">Gambia</option>
				<option value="GE">Georgia</option>
				<option value="DE">Germany</option>
				<option value="GH">Ghana</option>
				<option value="GI">Gibraltar</option>
				<option value="GR">Greece</option>
				<option value="GL">Greenland</option>
				<option value="GD">Grenada</option>
				<option value="GP">Guadeloupe</option>
				<option value="GU">Guam</option>
				<option value="GT">Guatemala</option>
				<option value="GG">Guernsey</option>
				<option value="GN">Guinea</option>
				<option value="GW">Guinea-Bissau</option>
				<option value="GY">Guyana</option>
				<option value="HT">Haiti</option>
				<option value="HM">Heard Island and McDonald Islands</option>
				<option value="VA">Holy See (Vatican City State)</option>
				<option value="HN">Honduras</option>
				<option value="HK">Hong Kong</option>
				<option value="HU">Hungary</option>
				<option value="IS">Iceland</option>
				<option value="IN">India</option>
				<option value="ID">Indonesia</option>
				<option value="IR">Iran, Islamic Republic of</option>
				<option value="IQ">Iraq</option>
				<option value="IE">Ireland</option>
				<option value="IM">Isle of Man</option>
				<option value="IL">Israel</option>
				<option value="IT">Italy</option>
				<option value="JM">Jamaica</option>
				<option value="JP">Japan</option>
				<option value="JE">Jersey</option>
				<option value="JO">Jordan</option>
				<option value="KZ">Kazakhstan</option>
				<option value="KE">Kenya</option>
				<option value="KI">Kiribati</option>
				<option value="KP">Korea, Democratic People's Republic of</option>
				<option value="KR">Korea, Republic of</option>
				<option value="KW">Kuwait</option>
				<option value="KG">Kyrgyzstan</option>
				<option value="LA">Lao People's Democratic Republic</option>
				<option value="LV">Latvia</option>
				<option value="LB">Lebanon</option>
				<option value="LS">Lesotho</option>
				<option value="LR">Liberia</option>
				<option value="LY">Libya</option>
				<option value="LI">Liechtenstein</option>
				<option value="LT">Lithuania</option>
				<option value="LU">Luxembourg</option>
				<option value="MO">Macao</option>
				<option value="MK">Macedonia, the former Yugoslav Republic of</option>
				<option value="MG">Madagascar</option>
				<option value="MW">Malawi</option>
				<option value="MY">Malaysia</option>
				<option value="MV">Maldives</option>
				<option value="ML">Mali</option>
				<option value="MT">Malta</option>
				<option value="MH">Marshall Islands</option>
				<option value="MQ">Martinique</option>
				<option value="MR">Mauritania</option>
				<option value="MU">Mauritius</option>
				<option value="YT">Mayotte</option>
				<option value="MX">Mexico</option>
				<option value="FM">Micronesia, Federated States of</option>
				<option value="MD">Moldova, Republic of</option>
				<option value="MC">Monaco</option>
				<option value="MN">Mongolia</option>
				<option value="ME">Montenegro</option>
				<option value="MS">Montserrat</option>
				<option value="MA">Morocco</option>
				<option value="MZ">Mozambique</option>
				<option value="MM">Myanmar</option>
				<option value="NA">Namibia</option>
				<option value="NR">Nauru</option>
				<option value="NP">Nepal</option>
				<option value="NL">Netherlands</option>
				<option value="NC">New Caledonia</option>
				<option value="NZ">New Zealand</option>
				<option value="NI">Nicaragua</option>
				<option value="NE">Niger</option>
				<option value="NG">Nigeria</option>
				<option value="NU">Niue</option>
				<option value="NF">Norfolk Island</option>
				<option value="MP">Northern Mariana Islands</option>
				<option value="NO">Norway</option>
				<option value="OM">Oman</option>
				<option value="PK">Pakistan</option>
				<option value="PW">Palau</option>
				<option value="PS">Palestinian Territory, Occupied</option>
				<option value="PA">Panama</option>
				<option value="PG">Papua New Guinea</option>
				<option value="PY">Paraguay</option>
				<option value="PE">Peru</option>
				<option value="PH">Philippines</option>
				<option value="PN">Pitcairn</option>
				<option value="PL">Poland</option>
				<option value="PT">Portugal</option>
				<option value="PR">Puerto Rico</option>
				<option value="QA">Qatar</option>
				<option value="RE">Réunion</option>
				<option value="RO">Romania</option>
				<option value="RU">Russian Federation</option>
				<option value="RW">Rwanda</option>
				<option value="BL">Saint Barthélemy</option>
				<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
				<option value="KN">Saint Kitts and Nevis</option>
				<option value="LC">Saint Lucia</option>
				<option value="MF">Saint Martin (French part)</option>
				<option value="PM">Saint Pierre and Miquelon</option>
				<option value="VC">Saint Vincent and the Grenadines</option>
				<option value="WS">Samoa</option>
				<option value="SM">San Marino</option>
				<option value="ST">Sao Tome and Principe</option>
				<option value="SA">Saudi Arabia</option>
				<option value="SN">Senegal</option>
				<option value="RS">Serbia</option>
				<option value="SC">Seychelles</option>
				<option value="SL">Sierra Leone</option>
				<option value="SG">Singapore</option>
				<option value="SX">Sint Maarten (Dutch part)</option>
				<option value="SK">Slovakia</option>
				<option value="SI">Slovenia</option>
				<option value="SB">Solomon Islands</option>
				<option value="SO">Somalia</option>
				<option value="ZA">South Africa</option>
				<option value="GS">South Georgia and the South Sandwich Islands</option>
				<option value="SS">South Sudan</option>
				<option value="ES">Spain</option>
				<option value="LK">Sri Lanka</option>
				<option value="SD">Sudan</option>
				<option value="SR">Suriname</option>
				<option value="SJ">Svalbard and Jan Mayen</option>
				<option value="SZ">Swaziland</option>
				<option value="SE">Sweden</option>
				<option value="CH">Switzerland</option>
				<option value="SY">Syrian Arab Republic</option>
				<option value="TW">Taiwan, Province of China</option>
				<option value="TJ">Tajikistan</option>
				<option value="TZ">Tanzania, United Republic of</option>
				<option value="TH">Thailand</option>
				<option value="TL">Timor-Leste</option>
				<option value="TG">Togo</option>
				<option value="TK">Tokelau</option>
				<option value="TO">Tonga</option>
				<option value="TT">Trinidad and Tobago</option>
				<option value="TN">Tunisia</option>
				<option value="TR">Turkey</option>
				<option value="TM">Turkmenistan</option>
				<option value="TC">Turks and Caicos Islands</option>
				<option value="TV">Tuvalu</option>
				<option value="UG">Uganda</option>
				<option value="UA">Ukraine</option>
				<option value="AE">United Arab Emirates</option>
				<option value="GB">United Kingdom</option>
				<option value="US">United States</option>
				<option value="UM">United States Minor Outlying Islands</option>
				<option value="UY">Uruguay</option>
				<option value="UZ">Uzbekistan</option>
				<option value="VU">Vanuatu</option>
				<option value="VE">Venezuela, Bolivarian Republic of</option>
				<option value="VN">Viet Nam</option>
				<option value="VG">Virgin Islands, British</option>
				<option value="VI">Virgin Islands, U.S.</option>
				<option value="WF">Wallis and Futuna</option>
				<option value="EH">Western Sahara</option>
				<option value="YE">Yemen</option>
				<option value="ZM">Zambia</option>
				<option value="ZW">Zimbabwe</option>
			</select>
			<br>
			<label>Broj telefona</label>
			<input type="tel" id="telefon" name="telefon" placeholder="Broj telefona" onblur="validirajPozivniBroj()">
			<br>
			<label>Članak (ne smije biti prazno)</label>
			<textarea id="tekst" name="tekst" placeholder="Članak..." onfocus="validiraj('tekst')"></textarea>
			<br>
			<input type="submit" id="dodajBtn" name="dodaj" value="Pošalji" onclick="return dodaj()">
			<br>
		</form>
	</div>
	
	<footer>
		© Copyright NFLBalkan.com 2016 <br>
		Sva prava zadržana. Zabranjeno preuzimanje bez dozvole izdavača
	</footer>
</div>
</body>
</html>