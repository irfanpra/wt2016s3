<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" type="text/css" href="forma.css">
<script src="script.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans%7CStalemate%7CSatisfy' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Primjedbe i/ili pitanja</title>

</head>
<body>
<!-- <div class="wrap">
  <div class="logoWrap"></div>
</div> -->
  <header>
  <h1>Poruke</h1>
  </header>

  <nav >    
  <ul>
    <li><a href="index.php">Pocetna</a></li>
    <li><a href="DizajnerskiNakit.php">Dizajnerski nakit</a></li>
    <li><a href="Kategorije.php">Kategorije</a></li>
	  <li><a href="Kontakt.php">Kontakt</a></li>
  </ul>
  </nav>
<main>
<form action="#" id="myForm" method='post' name="myForm">

  <label for="name">Ime</label>
    <input type="text" id="name" name="name" placeholder="Vaše ime " onkeyup='return validateName()' pattern="[a-zA-Z0-9_-]{3,12}" autofocus required 
       title="Ime mora sadržavati najmanje 3 znaka alfabeta"><br/>

     <label for="surname">Prezime</label>
            
    <input type="text" id="surname" name="surname" placeholder="Vaše prezime " onkeyup='return validateName()' pattern="[a-zA-Z0-9_-]{3,12}" 
       title="Prezime mora sadržavati najmanje 3 znaka alfabeta"><br/>
		
	
	
	<label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder=" Email" onblur='return validateEmail()'>
			
            
			<label for="grad">Grad</label>
    <input type="text" name="grad" id="grad" list="gradovi">
			<datalist id="gradovi">

				<option value="Sarajevo">Sarajevo</option>
				<option value="Banja Luka">Banja Luka</option>
				<option value="Tuzla">Tuzla</option>
				<option value="Zenica">Zenica</option>
				<option value="Mostar">Mostar</option>
				<option value="Bihac">Bihać</option>
				<option value="Trebinje">Trebinje</option>
			    <option value="Prijedor">Prijedor</option>
				<option value="Kljuc">Ključ</option>
				<option value="Maglaj">Maglaj</option>
				<option value="Bugojno">Bugojno</option>
			   <option value="Gorazde">Goražde</option>
			</datalist>
		<br/>

	  <label for="postanski">ZIP</label>
     <input type="text" id="postanski" name="postanski" onblur="return validiraj()"><br/>


			<span class='poruka_invisible' id='poruka_broj'>Poštanski broj ne odgovara unesenom gradu</span>	
			
			<label for="Message">Poruka</label>
<textarea rows="3" cols="25" id="Message"> Unesite pitanje ili poruku...</textarea><br/>
           
		   <span class='poruka_invisible' id='poruka_komentar'>Ne možete poslati poruku praznog sadržaja</span>
		   
<button class="btn btn-default" id="button" onclick="return validateForm()">Submit</button>
 <span class='poruka_invisible' id='poruka_button'></span>
</form>
</main>
  
  <footer>
<p>Copyright &copy; Web tehnologije/Irma Solakovic 2015/2016.</p>
  </footer>



<script type="text/javascript" src="ValidacijaKontaktForme.js"></script>

</body>



</html>