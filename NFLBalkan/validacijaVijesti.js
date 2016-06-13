	function validiraj(varijabla)
	{
		if(varijabla == "naslov") var pom = setInterval(function() { validirajNaslov() }, 100);
		else if(varijabla == "slika") var pom = setInterval(function() { validirajURL() }, 100);
		else if(varijabla == "alt") var pom = setInterval(function() { validirajAlt() }, 100);
		else if(varijabla == "tekst") var pom = setInterval(function() { validirajTekst() }, 100);
	}

	function validirajNaslov()
	{
		var validno = false;
		var naslov = document.getElementById("naslov")
		var naslovString = naslov.value;
		if( naslovString.length == 0 ) naslov.style.backgroundColor = "red";
		else 
		{
			naslov.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajURL()
	{
		var validno = false;
		var url = document.getElementById("slika")
		var urlString = url.value;
		if (urlString.match(/\.(jpeg|jpg|gif|png)/) != null)
		{
			url.style.backgroundColor = "white";
			validno = true;
		}
		else url.style.backgroundColor = "red";
		return validno;
	}

	function validirajAlt()
	{
		var validno = false;
		var alt = document.getElementById("alt")
		var altString = alt.value;
		if( altString.length == 0 ) alt.style.backgroundColor = "red";
		else 
		{
			alt.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajTekst()
	{
		var validno = false;
		var tekst = document.getElementById("tekst")
		var tekstString = tekst.value;
		if( tekstString.length == 0 ) tekst.style.backgroundColor = "red";
		else 
		{
			tekst.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajDvoslovniKod()
	{
		var ajax = new XMLHttpRequest();
		var drzava = document.getElementById("drzava").value.toLowerCase(); 
	
		ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + drzava, true);
	
		ajax.onreadystatechange = function() 
		{		
			if (ajax.readyState == 4 && ajax.status == 404) alert("Greska.");
			else
			{
				var json = JSON.parse(ajax.responseText);
				document.getElementById("telefon").value = "+" + json[0].callingCodes;
			}
		}
		ajax.send();
	}

	function validirajPozivniBroj()
	{
		var validno = false;
		var ajax = new XMLHttpRequest();
		var drzava = document.getElementById("drzava").value.toLowerCase(); 
	
		ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + drzava, true);
	
		ajax.onreadystatechange = function() 
		{		
			if (ajax.readyState == 4 && ajax.status == 404) alert("Greska.");
			else
			{
				var json = JSON.parse(ajax.responseText);
				var brojTelefona = document.getElementById("telefon").value.split('+').join("");
				if(brojTelefona.substr(0, 1) == json[0].callingCodes || brojTelefona.substr(0, 2) == json[0].callingCodes || brojTelefona.substr(0, 3) == json[0].callingCodes || brojTelefona.substr(0, 4) == json[0].callingCodes)
				{
					validno = true;
				}
				else
				{
					alert("Pozivni broj nije ispravan za unesenu drzavu.");
				}
			}
		}
		ajax.send();
		return validno;	
	}

	function dodaj()
	{
		if(validirajNaslov() && validirajURL() && validirajAlt() && validirajTekst() && validirajPozivniBroj() )
			alert("Uspješno ste dodali vijest.")
		else alert("Neka od vrijednosti nije ispravno unesena!");
		return true;
	}