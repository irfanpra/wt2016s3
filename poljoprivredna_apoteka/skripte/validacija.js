var lettersPatt = new RegExp('^(?:[A-Za-z]+)(?:[A-Za-z0-9 _]*)$');
var emailPatt = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
var urlPatt = new RegExp("^http\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(/\S*)?$");
var phonePatt = new RegExp("^[+]?[0-9]*$");

window.onload = function(){
	var inputs = document.getElementsByTagName("form")[0];
	for (var i = 0; i < inputs.length; i++) {
		if(inputs[i].type == "text") {
			inputs[i].addEventListener("blur", blurText, true);
			inputs[i].addEventListener("keypress", blurText, true);
		}
		if(inputs[i].type == "email") {
			inputs[i].addEventListener("blur", blurEmail, true);
			inputs[i].addEventListener("keypress", blurEmail, true);
		}
		if(inputs[i].type == "url") {
			inputs[i].addEventListener("blur", blurUrl, true);
			inputs[i].addEventListener("keypress", blurUrl, true);
		}
		if(inputs[i].type == "textarea") {
			inputs[i].addEventListener("blur", blurTextArea, true);
			inputs[i].addEventListener("keypress", blurTextArea, true);
		}
		if(inputs[i].type == "password") {
			inputs[i].addEventListener("blur", blurPassword, true);
			inputs[i].addEventListener("keypress", blurPassword, true);
		}
		if(inputs[i].name == "cijena") {
			inputs[i].addEventListener("blur", blurCijena, true);
			inputs[i].addEventListener("keypress", blurCijena, true);
		}
	}
}

function validateForm(){
	var inputs = document.getElementsByTagName("form")[0];
	validno = true;
	for (var i = 0; i < inputs.length; i++) {
		if(inputs[i].type == "text") {
			if(!validirajText(inputs[i])) validno = false;
		}
		if(inputs[i].type == "email") {
			if(!validirajEmail(inputs[i])) validno = false;
		}
		if(inputs[i].type == "url") {
			if(!validirajUrl(inputs[i])) validno = false;
		}
		if(inputs[i].type == "textarea") {
			if(!validirajTextArea(inputs[i])) validno = false;
		}
		if(inputs[i].type == "password") {
			if(!validirajPassword(inputs[i])) validno = false;
		}
		if(inputs[i].name == "cijena") {
			if(!validirajCijenu(inputs[i])) validno = false;
		}
	};

	return validno;
}

function postaviGresku(parent, msg){
	obrisiGresku(parent);
	var div = document.createElement('div');
	div.className += 'col-5 error-div';
	var em = document.createElement('em');
	em.className += 'error-input-msg';
	em.innerHTML = msg;
	div.appendChild(em);
	parent.parentElement.appendChild(div);
}
function obrisiGresku(parent){
	var glavni = parent.parentElement;
	for (var i = glavni.childNodes.length - 1; i >= 0; i--) {
		if(glavni.childNodes[i].className != null && glavni.childNodes[i].className.indexOf("error-div") > -1){
			glavni.removeChild(glavni.childNodes[i]);
		}
	};
}

function validirajText(input){
	if(input.value == "") {
		postaviGresku(input.parentElement, "Popunite ovo polje !");
		input.className = 'error-input';
		return false;
	}
	else if(!lettersPatt.test(input.value)){
		postaviGresku(input.parentElement, "Ime mora sadrzavati samo slova i brojeve!");
		input.className = 'error-input';
		return false;		
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}
function validirajUrlZaEmail(){
	var input = document.getElementById("url");
	if(input.value == "" || !urlPatt.test(input.value)) return false;
	return true;
}
function validirajEmail(input){
	var cont = validirajUrlZaEmail();
	if(input.value == "" && !cont) {
		postaviGresku(input.parentElement, "Popunite ovo polje ili url !");
		input.className = 'error-input';
		return false;
	}
	else if(!cont && !emailPatt.test(input.value)){
		postaviGresku(input.parentElement, "Pogresan format email-a !");
		input.className = 'error-input';
		return false;		
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}
function validirajEmailZaUrl(){
	var input = document.getElementById("email");
	if(input.value == "" || !emailPatt.test(input.value)) return false;
	return true;
}
function validirajUrl(input){
	var cont = validirajEmailZaUrl();
	if(input.value == "" && !cont) {
		postaviGresku(input.parentElement, "Popunite ovo polje ili email !");
		input.className = 'error-input';
		return false;
	}
	else if(!cont && !urlPatt.test(input.value)){
		postaviGresku(input.parentElement, "Pogresan format url-a !");
		input.className = 'error-input';
		return false;		
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}
function validirajTextArea(input){
	if(input.value == "") {
		postaviGresku(input.parentElement, "Popunite ovo polje !");
		input.className = 'error-input';
		return false;
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}

function validirajPassword(input){
	if(input.value == "") {
		postaviGresku(input.parentElement, "Popunite ovo polje !");
		input.className = 'error-input';
		return false;
	}
	else if(!lettersPatt.test(input.value)){
		postaviGresku(input.parentElement, "Lozinka mora sadrzavati samo slova i brojeve!");
		input.className = 'error-input';
		return false;		
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}

function validirajCijenu(input){
	if(input.value == "") {
		postaviGresku(input.parentElement, "Popunite ovo polje !");
		input.className = 'error-input';
		return false;
	}
	else if(input.value < 0){
		postaviGresku(input.parentElement, "Cijena mora biti veća od nule !");
		input.className = 'error-input';
		return false;		
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}

function blurText(){
	validirajText(this);
}
function blurEmail(){
	validirajEmail(this);
}
function blurUrl(){
	validirajUrl(this);
}
function blurTextArea(){
	validirajTextArea(this);
}
function blurPassword(){
	validirajPassword(this);
}
function blurCijena(){
	validirajCijenu(this);
}



//kod i telefon
function popuniSelect(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			var drzave = JSON.parse(xhttp.responseText);
			var selectList = document.getElementsByName("code")[0];
			//onchange select
			selectList.addEventListener("change", upisiTelefon);
			//onfocuslost pozivni broj
			document.getElementsByName("telefon")[0].addEventListener("blur", blurBrojTelefona, true);

			for(i = 0; i < drzave.length; i++) {
		        var option = document.createElement("option");
			    option.value = drzave[i]["alpha2Code"];
			    option.text = drzave[i]["name"];
			    selectList.appendChild(option);
    		}
		}
	};
	xhttp.open("GET", "https://restcountries.eu/rest/v1/all", true);
	xhttp.send();
}

function upisiTelefon(){

	var xhttp = new XMLHttpRequest();
	var selectList = document.getElementsByName("code")[0];
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			var pozivni = JSON.parse(xhttp.responseText);
			document.getElementsByName("telefon")[0].value = "+" + pozivni[0]["callingCodes"];
		}
	};
	var zahtjev = "https://restcountries.eu/rest/v1/alpha?codes="+selectList.options[selectList.selectedIndex].value;
	xhttp.open("GET", zahtjev, true);
	xhttp.send();
}

function blurBrojTelefona(){
	validirajTelefon(this);
}

function validirajTelefon(input){
	if(input.value == "") {
		postaviGresku(input.parentElement, "Popunite ovo polje !");
		input.className = 'error-input';
		return false;
	}
	else if(!phonePatt.test(input.value)){
		postaviGresku(input.parentElement, "Pogrešan format. +999999999999");
		input.className = 'error-input';
		return false;		
	}
	else{
		//postavka drzave na osnovu koda
		var selectList = document.getElementsByName("code")[0];
		var selectedCode = selectList.options[selectList.selectedIndex].value;
		var xhttp = new XMLHttpRequest();
		var broj_telefona = input.value;
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				var drzave = JSON.parse(xhttp.responseText);
				for (var i = 0; i < drzave.length; i++) {
					if(broj_telefona.startsWith("+"+drzave[i]["callingCodes"])){
						//odaberi drzavu
						for (var j = selectList.length - 1; j >= 0; j--) {
							if(selectList.options[j].text == drzave[i]["name"]){
								selectList.options[j].selected = true;
								break;
							}
						}
						break;
					}
				}
			}
		};
		xhttp.open("GET", "https://restcountries.eu/rest/v1/all", true);
		xhttp.send();
	}
	obrisiGresku(input.parentElement);
	input.className = '';
	return true;
}