<!DOCTYPE html>
<html>
<head>
	<title>Create form</title>
	<link rel="stylesheet" type="text/css" href="./../styles/form.css">
  <SCRIPT src="./../scripts/login.js"></SCRIPT>
</head>
<body>
   <?php
    $msg = '';
    $success ='';
   if(isset($_POST['lifeStory'])){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);


    if(empty($firstName) || empty($lastName))
 {
  $msg = "There is empty field.";
 }
 else if(!ctype_alpha($firstName) || !ctype_alpha($lastName))
 {
  $msg = "Only letters in first and last name.";
 }
 else if(!preg_match("/^[A-Za-z]{3,20}$/", $firstName) || !preg_match("/^[A-Za-z]{3,20}$/", $lastName))
 {
  $msg = "First or last name is not valid.";
 }

 else if(strlen($firstName) < 3  || strlen($lastName) < 3 )
 {
  $msg = "Minimum 3 characters for first and last name !";
 }
 else if(strlen($firstName) > 20  || strlen($lastName) > 20 )
 {
  $msg = "Maximum 20 characters for first and last name !";
 }
 else{
  $success ="Your life story is successfully added.";
 }


   }
     
    if(isset($_REQUEST['firstName']) && isset($_REQUEST['lastName']) && isset($_REQUEST['image']) && isset($_REQUEST['storyInput']) && isset($_REQUEST['telephone']))
    {    

      file_put_contents("./../csv/story.csv"," ".htmlentities($_REQUEST['categories'], ENT_QUOTES).",".htmlentities($_REQUEST['firstName'],ENT_QUOTES).",".htmlentities($_REQUEST['lastName'],ENT_QUOTES).",".htmlentities($_REQUEST['image'],ENT_QUOTES).",".htmlentities($_REQUEST['codeCountry'],ENT_QUOTES).",".htmlentities($_REQUEST['telephone'],ENT_QUOTES).",".date("d/m/Y").",".htmlentities($_REQUEST['storyInput'],ENT_QUOTES)." \n",FILE_APPEND);
    }
    
  ?>

   <h4 class="logout"><a href = "logout.php" title = "Logout">Logout</a></h4>
<table id="menu" >
  <tr>
  <td class="loader">Profile</td>
    <td><a class="linkNavbar" href="admin.php"> Home</a></td>
    <td><a class="linkNavbar" href="">Table</a></td> 
    <td><a class="linkNavbar active" href="">Contact</a></td>
    <td><a class="linkNavbar" href="">Links</a></td>
    <td><a class="linkNavbar" href"form.php">Form</a></td>  	
  </tr>
</table>

  <form action="form.php" method="post" id="storyForm">
    <div class="form-frame">
    <label>Choose category:</label><br/>
     <select name="categories">
       <option value="love">Love</option>
       <option value="family">Family</option>
       <option value="bussines">Bussines</option>
    </select>
     <input id="first"  name="firstName" type="text" required placeholder="First name" onkeyup="validateName()"/><br/>
     <input id="last"  name="lastName" type="text" required placeholder="Last name" onkeyup="validateLastName()"/><br/>
     <label>Choose image:</label><br/>
     <input type="file" id="imgFile" name="image" accept="image/*"><br/>
     <textarea id="message" class="input"  rows="7" cols="30" placeholder="Write life story" name="storyInput"></textarea><br />
     <label>Choose country:</label><br/>
     <select id="countryCode" onChange="phoneCode()" name="codeCountry">
  <option value="AF">Afghanistan (AF)</option>
  <option value="AX">Åland Islands (AX)</option>
  <option value="AL">Albania (AL)</option>
  <option value="DZ">Algeria (DZ)</option>
  <option value="AS">American Samoa (AS)</option>
  <option value="AD">Andorra (AD)</option>
  <option value="AO">Angola (AO)</option>
  <option value="AI">Anguilla (AI)</option>
  <option value="AQ">Antarctica (AQ)</option>
  <option value="AG">Antigua and Barbuda (AG)</option>
  <option value="AR">Argentina (AR)</option>
  <option value="AM">Armenia (AM)</option>
  <option value="AW">Aruba (AW)</option>
  <option value="AU">Australia (AU)</option>
  <option value="AT">Austria (AT)</option>
  <option value="AZ">Azerbaijan (AZ)</option>
  <option value="BS">Bahamas (BS)</option>
  <option value="BH">Bahrain (BH)</option>
  <option value="BD">Bangladesh (BD)</option>
  <option value="BB">Barbados (BB)</option>
  <option value="BY">Belarus (BY)</option>
  <option value="BE">Belgium (BE)</option>
  <option value="BZ">Belize (BZ)</option>
  <option value="BJ">Benin (BJ)</option>
  <option value="BM">Bermuda (BM)</option>
  <option value="BT">Bhutan (BT)</option>
  <option value="BO">Bolivia, Plurinational State of (BO)</option>
  <option value="BQ">Bonaire, Sint Eustatius and Saba (BQ)</option>
  <option value="BA">Bosnia and Herzegovina (BA)</option>
  <option value="BW">Botswana (BW)</option>
  <option value="BV">Bouvet Island (BV)</option>
  <option value="BR">Brazil (BR)</option>
  <option value="IO">British Indian Ocean Territory (IO)</option>
  <option value="BN">Brunei Darussalam (BN)</option>
  <option value="BG">Bulgaria (BG)</option>
  <option value="BF">Burkina Faso (BF)</option>
  <option value="BI">Burundi (BI)</option>
  <option value="KH">Cambodia (KH)</option>
  <option value="CM">Cameroon (CM)</option>
  <option value="CA">Canada (CA)</option>
  <option value="CV">Cape Verde (CV)</option>
  <option value="KY">Cayman Islands (KY)</option>
  <option value="CF">Central African Republic (CF)</option>
  <option value="TD">Chad (TD)</option>
  <option value="CL">Chile (CL)</option>
  <option value="CN">China (CN)</option>
  <option value="CX">Christmas Island (CX)</option>
  <option value="CC">Cocos (Keeling) Islands (CC)</option>
  <option value="CO">Colombia (CO)</option>
  <option value="KM">Comoros (KM)</option>
  <option value="CG">Congo (CG)</option>
  <option value="CD">Congo, the Democratic Republic of the (CD)</option>
  <option value="CK">Cook Islands (CK)</option>
  <option value="CR">Costa Rica (CR)</option>
  <option value="CI">Côte d'Ivoire (CI)</option>
  <option value="HR">Croatia (HR)</option>
  <option value="CU">Cuba (CU)</option>
  <option value="CW">Curaçao (CW)</option>
  <option value="CY">Cyprus (CY)</option>
  <option value="CZ">Czech Republic (CZ)</option>
  <option value="DK">Denmark (DK)</option>
  <option value="DJ">Djibouti (DJ)</option>
  <option value="DM">Dominica (DM)</option>
  <option value="DO">Dominican Republic (DO)</option>
  <option value="EC">Ecuador (EC)</option>
  <option value="EG">Egypt (EG)</option>
  <option value="SV">El Salvador (SV)</option>
  <option value="GQ">Equatorial Guinea (GQ)</option>
  <option value="ER">Eritrea (ER)</option>
  <option value="EE">Estonia (EE)</option>
  <option value="ET">Ethiopia (ET)</option>
  <option value="FK">Falkland Islands (Malvinas) (FK)</option>
  <option value="FO">Faroe Islands (FO)</option>
  <option value="FJ">Fiji (FJ)</option>
  <option value="FI">Finland (FI)</option>
  <option value="FR">France (FR)</option>
  <option value="GF">French Guiana (GF)</option>
  <option value="PF">French Polynesia (PF)</option>
  <option value="TF">French Southern Territories (TF)</option>
  <option value="GA">Gabon (GA)</option>
  <option value="GM">Gambia (GM)</option>
  <option value="GE">Georgia (GE)</option>
  <option value="DE">Germany (DE)</option>
  <option value="GH">Ghana (GH)</option>
  <option value="GI">Gibraltar (GI)</option>
  <option value="GR">Greece (GR)</option>
  <option value="GL">Greenland (GL)</option>
  <option value="GD">Grenada (GD)</option>
  <option value="GP">Guadeloupe (GP)</option>
  <option value="GU">Guam (GU)</option>
  <option value="GT">Guatemala (GT)</option>
  <option value="GG">Guernsey (GG)</option>
  <option value="GN">Guinea (GN)</option>
  <option value="GW">Guinea-Bissau (GW)</option>
  <option value="GY">Guyana (GY)</option>
  <option value="HT">Haiti (HT)</option>
  <option value="HM">Heard Island and McDonald Islands (HM)</option>
  <option value="VA">Holy See (Vatican City State) (VA)</option>
  <option value="HN">Honduras (HN)</option>
  <option value="HK">Hong Kong (HK)</option>
  <option value="HU">Hungary (HU)</option>
  <option value="IS">Iceland (IS)</option>
  <option value="IN">India (IN)</option>
  <option value="ID">Indonesia (ID)</option>
  <option value="IR">Iran, Islamic Republic of (IR)</option>
  <option value="IQ">Iraq (IQ)</option>
  <option value="IE">Ireland (IE)</option>
  <option value="IM">Isle of Man (IM)</option>
  <option value="IL">Israel (IL)</option>
  <option value="IT">Italy (IT)</option>
  <option value="JM">Jamaica (JM)</option>
  <option value="JP">Japan (JP)</option>
  <option value="JE">Jersey (JE)</option>
  <option value="JO">Jordan (JO)</option>
  <option value="KZ">Kazakhstan (KZ)</option>
  <option value="KE">Kenya (KE)</option>
  <option value="KI">Kiribati (KI)</option>
  <option value="KP">Korea, Democratic People's Republic of (KP)</option>
  <option value="KR">Korea, Republic of (KR)</option>
  <option value="KW">Kuwait (KW)</option>
  <option value="KG">Kyrgyzstan (KG)</option>
  <option value="LA">Lao People's Democratic Republic (LA)</option>
  <option value="LV">Latvia (LV)</option>
  <option value="LB">Lebanon (LB)</option>
  <option value="LS">Lesotho (LS)</option>
  <option value="LR">Liberia (LR)</option>
  <option value="LY">Libya (LY)</option>
  <option value="LI">Liechtenstein (LI)</option>
  <option value="LT">Lithuania (LT)</option>
  <option value="LU">Luxembourg (LU)</option>
  <option value="MO">Macao (MO)</option>
  <option value="MK">Macedonia, the former Yugoslav Republic of (MK)</option>
  <option value="MG">Madagascar (MG)</option>
  <option value="MW">Malawi (MW)</option>
  <option value="MY">Malaysia (MY)</option>
  <option value="MV">Maldives (MV)</option>
  <option value="ML">Mali (ML)</option>
  <option value="MT">Malta (MT)</option>
  <option value="MH">Marshall Islands (MH)</option>
  <option value="MQ">Martinique (MQ)</option>
  <option value="MR">Mauritania (MR)</option>
  <option value="MU">Mauritius (MU)</option>
  <option value="YT">Mayotte (YT)</option>
  <option value="MX">Mexico (MX)</option>
  <option value="FM">Micronesia, Federated States of (FM)</option>
  <option value="MD">Moldova, Republic of (MD)</option>
  <option value="MC">Monaco (MC)</option>
  <option value="MN">Mongolia (MN)</option>
  <option value="ME">Montenegro (ME)</option>
  <option value="MS">Montserrat (MS)</option>
  <option value="MA">Morocco (MA)</option>
  <option value="MZ">Mozambique (MZ)</option>
  <option value="MM">Myanmar (MM)</option>
  <option value="NA">Namibia (NA)</option>
  <option value="NR">Nauru (NR)</option>
  <option value="NP">Nepal (NP)</option>
  <option value="NL">Netherlands (NL)</option>
  <option value="NC">New Caledonia (NC)</option>
  <option value="NZ">New Zealand (NZ)</option>
  <option value="NI">Nicaragua (NI)</option>
  <option value="NE">Niger (NE)</option>
  <option value="NG">Nigeria (NG)</option>
  <option value="NU">Niue (NU)</option>
  <option value="NF">Norfolk Island (NF)</option>
  <option value="MP">Northern Mariana Islands (MP)</option>
  <option value="NO">Norway (NO)</option>
  <option value="OM">Oman (OM)</option>
  <option value="PK">Pakistan (PK)</option>
  <option value="PW">Palau (PW)</option>
  <option value="PS">Palestinian Territory, Occupied (PS)</option>
  <option value="PA">Panama (PA)</option>
  <option value="PG">Papua New Guinea (PG)</option>
  <option value="PY">Paraguay (PY)</option>
  <option value="PE">Peru (PE)</option>
  <option value="PH">Philippines (PH)</option>
  <option value="PN">Pitcairn (PN)</option>
  <option value="PL">Poland (PL)</option>
  <option value="PT">Portugal (PT)</option>
  <option value="PR">Puerto Rico (PR)</option>
  <option value="QA">Qatar (QA)</option>
  <option value="RE">Réunion (RE)</option>
  <option value="RO">Romania (RO)</option>
  <option value="RU">Russian Federation (RU)</option>
  <option value="RW">Rwanda (RW)</option>
  <option value="BL">Saint Barthélemy (BL)</option>
  <option value="SH">Saint Helena, Ascension and Tristan da Cunha (SH)</option>
  <option value="KN">Saint Kitts and Nevis (KN)</option>
  <option value="LC">Saint Lucia (LC)</option>
  <option value="MF">Saint Martin (French part) (MF)</option>
  <option value="PM">Saint Pierre and Miquelon (PM)</option>
  <option value="VC">Saint Vincent and the Grenadines (VC)</option>
  <option value="WS">Samoa (WS)</option>
  <option value="SM">San Marino (SM)</option>
  <option value="ST">Sao Tome and Principe (ST)</option>
  <option value="SA">Saudi Arabia (SA)</option>
  <option value="SN">Senegal (SN)</option>
  <option value="RS">Serbia (RS)</option>
  <option value="SC">Seychelles (SC)</option>
  <option value="SL">Sierra Leone (SL)</option>
  <option value="SG">Singapore (SG)</option>
  <option value="SX">Sint Maarten (Dutch part) (SX)</option>
  <option value="SK">Slovakia (SK)</option>
  <option value="SI">Slovenia (SI)</option>
  <option value="SB">Solomon Islands (SB)</option>
  <option value="SO">Somalia (SO)</option>
  <option value="ZA">South Africa (ZA)</option>
  <option value="GS">South Georgia and the South Sandwich Islands (GS)</option>
  <option value="SS">South Sudan (SS)</option>
  <option value="ES">Spain (ES)</option>
  <option value="LK">Sri Lanka (LK)</option>
  <option value="SD">Sudan (SD)</option>
  <option value="SR">Suriname (SR)</option>
  <option value="SJ">Svalbard and Jan Mayen (SJ)</option>
  <option value="SZ">Swaziland (SZ)</option>
  <option value="SE">Sweden (SE)</option>
  <option value="CH">Switzerland (CH)</option>
  <option value="SY">Syrian Arab Republic (SY)</option>
  <option value="TW">Taiwan, Province of China (TW)</option>
  <option value="TJ">Tajikistan (TJ)</option>
  <option value="TZ">Tanzania, United Republic of (TZ)</option>
  <option value="TH">Thailand (TH)</option>
  <option value="TL">Timor-Leste (TL)</option>
  <option value="TG">Togo (TG)</option>
  <option value="TK">Tokelau (TK)</option>
  <option value="TO">Tonga (TO)</option>
  <option value="TT">Trinidad and Tobago (TT)</option>
  <option value="TN">Tunisia (TN)</option>
  <option value="TR">Turkey (TR)</option>
  <option value="TM">Turkmenistan (TM)</option>
  <option value="TC">Turks and Caicos Islands (TC)</option>
  <option value="TV">Tuvalu (TV)</option>
  <option value="UG">Uganda (UG)</option>
  <option value="UA">Ukraine (UA)</option>
  <option value="AE">United Arab Emirates (AE)</option>
  <option value="GB">United Kingdom (GB)</option>
  <option value="US">United States (US)</option>
  <option value="UM">United States Minor Outlying Islands (UM)</option>
  <option value="UY">Uruguay (UY)</option>
  <option value="UZ">Uzbekistan (UZ)</option>
  <option value="VU">Vanuatu (VU)</option>
  <option value="VE">Venezuela, Bolivarian Republic of (VE)</option>
  <option value="VN">Viet Nam (VN)</option>
  <option value="VG">Virgin Islands, British (VG)</option>
  <option value="VI">Virgin Islands, U.S. (VI)</option>
  <option value="WF">Wallis and Futuna (WF)</option>
  <option value="EH">Western Sahara (EH)</option>
  <option value="YE">Yemen (YE)</option>
  <option value="ZM">Zambia (ZM)</option>
  <option value="ZW">Zimbabwe (ZW)</option>
</select><br>
<input id="phone" type="tel" name="telephone" required placeholder="Phone number"/>
     <h4><?php echo $msg; ?></h4>
     <input type="submit" name="lifeStory" value="Create life story">
     <h4 class="success"><?php echo $success; ?></h4>
   </div>
 </form>

</body>
</html>

