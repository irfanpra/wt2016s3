function onBlurValid(element) {
	var em = document.getElementById(element);

	if(em.value == null || em.value == "") {
		em.style.backgroundColor = "red";
	}
}

function onKeyUpValid(element) {
	var em = document.getElementById(element);

	if(em.value != null && em.value != "") {
		em.style.backgroundColor = "white";
	}
}

function onBlurUnakrsno(element) {
	var adresa = document.getElementById("adresa");
	var mail = document.getElementById("email");

	// Ako nije unesena adresa, onda mora biti unesen mail 
	// po standardu RFC 5322
	if(testMail() || adresa.value != "") {
		mail.style.backgroundColor = "white";
		adresa.style.backgroundColor = "white";
	} else {
		if(element == "email") mail.style.backgroundColor = "red";
		else adresa.style.backgroundColor = "red";
	}
}

function onKeyUnakrsno() {
    var mail = document.getElementById('email');
    var adresa = document.getElementById('adresa');

	if (testMail() || adresa.value != "") {
		mail.style.backgroundColor = "white";
		adresa.style.backgroundColor = "white";
	} 
}

function testMail() {
	var mail = document.getElementById("email");
	var pattern = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
    return pattern.test(mail.value);
}

function onSubimtForm() {
    var mail = document.getElementById('email');
    var adresa = document.getElementById('adresa');
    var ime = document.getElementById('ime');
    var komentar = document.getElementById('text');

    var good = true;

    if(!testMail() && adresa.value == "") {
    	mail.style.backgroundColor = "red";
    	good = false;
    }

    if(ime.value == "") {
    	ime.style.backgroundColor = "red";
    	good = false;
    }

    if(komentar.value == "") {
    	komentar.style.backgroundColor = "red";
    	good = false;
    }

    return good;
}

function kodTelefonValidacija() {
	var kod = document.getElementById('kod');

	if(kod.value == "") {
		kod.style.backgroundColor = "red";
	}
	else {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			var countryInfo = JSON.parse(ajax.responseText);

			if(countryInfo == "") {
				kod.style.backgroundColor = "red";
			}
			else {
				kod.style.backgroundColor = "white";
			var country = countryInfo[0];
			var brTel = document.getElementById('brTel');

			// Na poziciji 0 je +
			if(brTel.value.search(country.callingCodes[0]) != 1) {
				brTel.style.backgroundColor = "red";
			} 
			else {
				brTel.style.backgroundColor = "white";
			}
			
		}
		validateAll();
		}
	}
	ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + kod.value, true);
	ajax.send();
	}
}

function brTelTest() {
	var brTel = document.getElementById('brTel');
	if(brTel.value != "" && brTel.value[0] == "+" && /^\d+$/.test(brTel.value.substring(1))) {
		brTel.style.backgroundColor = "white";
	}
	else {
		brTel.style.backgroundColor = "red";
	}
	validateAll();
}

function elemTest(element) {
	var e = document.getElementById(element);
	
	if(e.value == "") {
		e.style.backgroundColor = "red";
	}
	else {
		e.style.backgroundColor = "white";
	}
	validateAll();
}

function validateAll() {
	var naslov = document.getElementById('naslov');
	var slika = document.getElementById('slika');
	var tekst = document.getElementById('tekst');
	var kod = document.getElementById('kod');
	var brTel = document.getElementById('brTel');

	var btn = document.getElementById('btn');

	if(naslov.value == "" || slika.value == "" || tekst.value == "" || kod.value == "" || brTel.value == "") {
		btn.disabled = true;
		return;
	}

	if(kod.style.backgroundColor === "red" ||
	   brTel.style.backgroundColor === "red") {
		btn.disabled = true;
		return;
	}

	btn.disabled = false;
}