window.onload = function (){
	var vremena = document.getElementsByClassName("datumObjave");
	for (var i = vremena.length - 1; i >= 0; i--) {
		vremena[i].innerHTML = "Proizvod objavljen " + postaviVrijemeObjave(new Date(vremena[i].innerHTML));
	};
	var vremenaVijesti = document.getElementsByClassName("datumObjaveVijest");
	for (var i = vremenaVijesti.length - 1; i >= 0; i--) {
		vremenaVijesti[i].innerHTML = "Vijest objavljena " + postaviVrijemeObjave(new Date(vremenaVijesti[i].innerHTML));
	};
}

Date.prototype.getMonthWeek = function(){
    var firstDay = new Date(this.getFullYear(), this.getMonth(), 1).getDay();
    return Math.ceil((this.getDate() + firstDay)/7);
}
Date.prototype.removeHours = function(h) {    
   this.setTime(this.getTime() - (h*60*60*1000)); 
   return this;   
}
Date.prototype.removeSeconds = function(seconds) {
	this.setSeconds(this.getSeconds() - seconds);
	return this;
};
Date.prototype.removeMinutes = function(minutes) {
	this.setMinutes(this.getMinutes() - minutes);
	return this;
};

function postaviVrijemeObjave(vrijeme){
	var trenutno = new Date();
	if(vrijeme.getFullYear() != trenutno.getFullYear()){
		return vrijeme.getDate()+ "." + (vrijeme.getMonth()+1) + "." + vrijeme.getFullYear();
	}
	else if(vrijeme.getFullYear() == trenutno.getFullYear() && vrijeme.getMonth() != trenutno.getMonth()){
		return vrijeme.getDate()+ "." + (vrijeme.getMonth()+1) + "." + vrijeme.getFullYear();
	}
	//Isti dan, sat, minuta
	else if(vrijeme.getDate() == trenutno.getDate() && vrijeme.getHours() == trenutno.getHours() && vrijeme.getMinutes() == trenutno.getMinutes() && vrijeme.getSeconds() <= trenutno.getSeconds()){
		return "prije par sekundi"
	}
	//Isti dan, sat
	else if(vrijeme.getDate() == trenutno.getDate() && vrijeme.getHours() == trenutno.getHours() && vrijeme.getMinutes() <= trenutno.getMinutes()){
		var minute = trenutno.getMinutes() - vrijeme.getMinutes();
		if(minute == 1 || minute % 10 == 1) return "prije " + minute + " minutu";
		if(minute == 2 || minute == 3 || minute == 4 || minute % 10 == 2 || minute % 10 == 3 || minute % 10 == 4) return "prije " + minute + " minute";
		return "prije " + minute + " minuta";
	}
	//Manje od 24h
	else if(Math.abs(trenutno.getHours() - vrijeme.getHours()) > 0 && Math.abs(trenutno.getHours() - vrijeme.getHours()) <= 24  && vrijeme.getDate() == trenutno.getDate()){
		var sati = trenutno.getHours() - vrijeme.getHours();
		if(sati >= 5 && sati <= 20) return "prije " + sati + " sati";
		if(sati == 1 || sati % 10 == 1) return "prije " + sati + " sat";
		if(sati == 2 || sati == 3 || sati == 4 || sati % 10 == 2 || sati % 10 == 3 || sati % 10 == 4) return "prije " + sati + " sata";
		return "prije " + sati + " sati";
	}
	//Manje od 7dana
	else if(Math.abs(trenutno.getDate() - vrijeme.getDate()) > 0 && Math.abs(trenutno.getDate() - vrijeme.getDate()) <= 7){
		var dana = trenutno.getDate() - vrijeme.getDate();
		if(dana == 1) return "prije " + dana + " dan";
		return "prije " + dana + " dana";
	}
	//U mjesecu ali vise od 7 dana
	else{
		var sedmica = trenutno.getMonthWeek() - vrijeme.getMonthWeek();
		if(sedmica == 1) return "prije " + sedmica + " sedmicu";
		if(sedmica == 2 || sedmica == 3 || sedmica == 4) return "prije " + sedmica + " sedmice";
		return "prije " + sedmica + " sedmica";
	}
}


function filtrirajProizvode(){
	var trenutno = new Date();
	var izbor = document.getElementById("filter").value;
	var proizvodi = document.getElementsByClassName("proizvod");
	if(izbor == "sve"){
		for (var i = proizvodi.length - 1; i >= 0; i--) {
			proizvodi[i].style.display = 'block';
		};
	}
	else if(izbor == "danas"){
		for (var i = proizvodi.length - 1; i >= 0; i--) {
			var dan = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getDate();
			var sedmica = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getMonthWeek();
			var mjesec = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getMonth();
			var godina = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getFullYear();
			
			if(mjesec == trenutno.getMonth() && godina == trenutno.getFullYear() && sedmica == trenutno.getMonthWeek() && dan == trenutno.getDate())
				proizvodi[i].style.display = 'block';
			else proizvodi[i].style.display = 'none';

		};
	}
	else if(izbor == "sedmice"){
		for (var i = proizvodi.length - 1; i >= 0; i--) {
			var sedmica = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getMonthWeek();
			var mjesec = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getMonth();
			var godina = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getFullYear();
			if(mjesec == trenutno.getMonth() && godina == trenutno.getFullYear() && sedmica == trenutno.getMonthWeek())
				proizvodi[i].style.display = 'block';
			else proizvodi[i].style.display = 'none';
		};
	}
	else if(izbor == "mjesec"){
		for (var i = proizvodi.length - 1; i >= 0; i--) {
			var mjesec = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getMonth();
			var godina = new Date(proizvodi[i].getElementsByClassName('datum')[0].innerHTML).getFullYear();
			if (mjesec == trenutno.getMonth() && godina == trenutno.getFullYear()) proizvodi[i].style.display = 'block';
			else proizvodi[i].style.display = 'none';
		};
	}
	else if(izbor == "u"){
		var lokacija = window.location.href;
		lokacija = lokacija.substr(0, lokacija.indexOf('?')); 
		window.location.href = "?sort=u";
	}
	else if(izbor == "d"){
		var lokacija = window.location.href;
		lokacija = lokacija.substr(0, lokacija.indexOf('?')); 
		window.location.href = "?sort=d";
	}
}

function idiDoVijesti(param){
	document.getElementById('novoNaslov').scrollIntoView();
	document.getElementById("filter").value = param;
}