function validirajPolje(polje) {
	if(polje.id == "naslov")
        if(validirajNaslov(polje.value) == 0) {
			polje.style.backgroundColor = "#FF6347";
			polje.setAttribute("placeholder","[A-Z][A-Za-z0-9]*!");
			greske[0] = "1";
		}
        else {
			polje.style.backgroundColor = "white";
			polje.setAttribute("placeholder","");
			greske[0] = "0";
		}
		
	if(polje.id == "slika")
        if(validirajSliku(polje.value) == 0) {
			polje.style.backgroundColor = "#FF6347";
			polje.setAttribute("placeholder","Link nije ispravan!");
			greske[1] = "1";
		}
        else {
			polje.style.backgroundColor = "white";
			polje.setAttribute("placeholder","");
			greske[1] = "0";
		}
		
	if(polje.id == "tekst")
        if(validirajTekst(polje.value) == 0) {
			polje.style.backgroundColor = "#FF6347";
			polje.setAttribute("placeholder","[+'?*.A-Za-z0-9]*!");
			greske[2] = "1";
		}
        else {
			polje.style.backgroundColor = "white";
			polje.setAttribute("placeholder","");
			greske[2] = "0";
		}
	if(polje.id == "dkd")
        validirajDKD(polje.value);
	if(polje.id == "tel")
        if(validirajBroj(polje.value) == 0) {
			polje.style.backgroundColor = "#FF6347";
			polje.setAttribute("placeholder","Nije validan telefon!");
			greske[3] = "1";
		}
        else {
			polje.style.backgroundColor = "white";
			polje.setAttribute("placeholder","");
			greske[3] = "0";
		}
}

function validirajNaslov(value) {
	var regIme = /^[A-Z][A-Za-z0-9]*$/
	if(regIme.test(value) && value !== "") 
		return true;
	return false;
}

function validirajSliku(value) {
	var regLink = /^\bhttps?:\/\/\S+(?:png|jpg)\b$/;
	if(regLink.test(value) && value !== "") 
		return true;
	return false;
}

function validirajTekst(value) {
	var regTekst= /^[ -\1,?\1*\1'\1"\1\.A-Za-z0-9]*$/im;
	if(regTekst.test(value) && value !== "") 
		return true;
	return false;
}

function validirajBroj(value) {
	pozivni = document.getElementById('pozivni').value;
	value = pozivni + value;
	var regBroj = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
	if(regBroj.test(value) && value !== "") 
		return true;
	return false;
}

var pozivniBroj;
function validirajDKD(value) {
	var dkod=document.getElementById("dkd");
	var vrijednostDkod=dkod.value;
	
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				var objekat = JSON.parse(xhttp.responseText);
				polje = document.getElementById('dkd');
				if(objekat[0] == null)
				{
					document.getElementById('pozivni').value = pozivniBroj;
					polje.style.backgroundColor = "#FFA07A";
					polje.setAttribute("placeholder","Nije validan DKD(" + polje.value + ")!");
					polje.value = "";
					greske[4] = "1";
				}
				else {
					document.getElementById('pozivni').value = "+" + objekat[0].callingCodes;
					polje.style.backgroundColor = "white";
					polje.setAttribute("placeholder","");
					greske[4] = "0";
				}
			}
		};
	xhttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes="+vrijednostDkod, true);
	xhttp.send();
}

var greske = new Array("1", "1", "1", "1", "1");
//Funkcija radi ispravno, ali nisam imao vremena da preimenujem...
/*var sortirani = new Array(greske[0],greske[1],greske[2],greske[3],greske[4]);
sortirani = sortirani.sort();
var dugme = document.getElementById('dodajVijestB');
if(sortirani[4] == 0)
    document.getElementById('dodaj').removeAttribute("disabled");
else
    dugme.setAttribute("disabled","disabled"); */

/*window.onload = function () {
    var datumi = document.getElementsByClassName("datum");
    var prosloVremena = document.getElementsByClassName("prosloVremena");
    for (var i = 0; i < datumi.length; i++) {
        var datum = new Date(datumi[i].innerHTML);
        prosloVremena[i].innerHTML = prosloOdObjave(datum);
        datumi[i].style.display = 'none';
		prosloVremena[i].style.display = 'block'; 
		prosloVremena[i].style.borderStyle = 'solid';
    }
}*/

function prosloOdObjave(date) {
	var tekst = "Novost objavljenja prije ";
    var milisekunde = new Date() - date;
	//2592000 broj sekundi u 30 dana (otprilike 1 mjesec)
    var vrijeme = Math.floor(milisekunde / (1000 * 2592000));
	//Ako je vrijeme >= 1 znaci da je prosao barem 1 puni mjesec
    if(vrijeme >= 1) {
        return date.toString().slice(4, 25); 
    }
	//604800 broj sekundi u 7 dana(1 sedmica)
	vrijeme = Math.floor(milisekunde / (1000 * 604800));
    //Ako je vrijeme >= 1 znaci da je prosla barem 1 puna sedmica
	if(vrijeme >= 1) {
		if(vrijeme == 1)
			return tekst + vrijeme + " sedmicu";
        return tekst + vrijeme + " sedmice";
    } 
	
	//86400 broj sekundi u 1 danu
	vrijeme = Math.floor(milisekunde / (1000 * 86400));
	//Ako je vrijeme >= 1 znaci da je prosao barem 1 puni dan
	if(vrijeme >= 1) {
		tekst = tekst + vrijeme + " dan";
		if((((vrijeme % 10) == 1) && ((vrijeme / 10) != 1)) != 1)
			return tekst + "a";
		return tekst;
	}
	//3600 broj sekundi u 1 satu
	vrijeme = Math.floor(milisekunde / (1000 * 3600));
	//Ako je vrijeme >= 1 znaci da je prosao barem 1 puni sat
	if(vrijeme >= 1) {
	  tekst = tekst + vrijeme + " sat";
	  if((vrijeme >= 5) && (vrijeme <= 20)) 
		  return tekst + "i";
	  else if((vrijeme % 10) == 1)
		  return tekst;
	  return tekst + "a";
	}	
	
	//60 broj sekundi u 1 minuti
    vrijeme = Math.floor(milisekunde / 1000 * 60);
	//Ako je vrijeme >= 1 znaci da je prosla barem 1 puna minuta
    if ((vrijeme % 10) == 1) {
		if((vrijeme/10) != 1)
			if((vrijeme % 10) == 1)  
				return tekst + vrijeme + " minutu";
			else if(((vrijeme % 10) >= 2) && ((vrijeme % 10) <= 4))
				return tekst + vrijeme + " minute";
		return tekst + vrijeme + " minuta";
	}
	
	//Proslo je manje od minute
	return tekst + "par sekundi";
}