function pocetna(){

var inputNaslov = document.getElementById('naslovTxt');
var inputNovost = document.getElementById('novostTxt');
var inputKod = document.getElementById('kodTxt');
var inputTelefon = document.getElementById('telefonTxt');


inputNaslov.onkeyup = function(){
	provjeriText(inputNaslov);
}

inputNovost.onkeyup = function(){
	provjeriText(inputNovost);
}

inputKod.onkeyup = function(){
	provjeriKod(inputKod, inputTelefon);
}
inputTelefon.onkeyup = function(){
	provjeriTelefon(inputTelefon, inputKod);
}


}

function provjeriText(input)
{
	if (input.value=="")
	  {input.style.backgroundColor = "#ff668c"; return false;}
	else {input.style.backgroundColor = "white"; return true;}
}
function provjeriKod(input,input2)
{
	if (input.value == "" && input2.value == "") {input.style.backgroundColor = 'white'; input2.style.backgroundColor = 'white'; return;}
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes="+input.value, true);
	ajax.send();
	ajax.onreadystatechange = function() {// Anonimna funkcija
        		if (ajax.readyState == 4 && ajax.status == 200) {
            			//document.getElementById("Upisi").innerHTML = ajax.responseText;
            			var str = ajax.responseText;
						var n = str.search("callingCodes");
						var res = str.substring(n+16, str.indexOf('"],"top'));
						//alert(res);
            			
						if (res != input2.value.substring(1,input2.value.indexOf('-'))) {document.getElementById('kodTxt').focus(); document.getElementById('kodTxt').style.backgroundColor = "#ff668c";document.getElementById('telefonTxt').style.backgroundColor = "#ff668c";}
						else {document.getElementById('kodTxt').style.backgroundColor = 'white';document.getElementById('telefonTxt').style.backgroundColor = 'white';}
				}
        		/*if (ajax.readyState == 4 && ajax.status == 404)
            			document.getElementById("Upisi").innerHTML = imeStranice;
            		alert("tu sam ipak");*/
			}
	return false;
}
function provjeriTelefon(input,input2)
{
	if (input.value == "" && input2.value == "") {input.style.backgroundColor = 'white'; input2.style.backgroundColor = 'white'; return;}
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes="+input2.value, true);
	ajax.send();
	ajax.onreadystatechange = function() {// Anonimna funkcija
        		if (ajax.readyState == 4 && ajax.status == 200) {
            			//document.getElementById("Upisi").innerHTML = ajax.responseText;
            			var str = ajax.responseText;
						var n = str.search("callingCodes");
						var res = str.substring(n+16, str.indexOf('"],"top'));
						//alert(res);
            			
            			
						if (res != input.value.substring(1,input.value.indexOf('-'))) {document.getElementById('telefonTxt').focus(); document.getElementById('kodTxt').style.backgroundColor = "#ff668c";document.getElementById('telefonTxt').style.backgroundColor = "#ff668c";}
						else {document.getElementById('kodTxt').style.backgroundColor = 'white';document.getElementById('telefonTxt').style.backgroundColor = 'white';}
				}
        		/*if (ajax.readyState == 4 && ajax.status == 404)
            			document.getElementById("Upisi").innerHTML = imeStranice;
            		alert("tu sam ipak");*/
			}
	return false;
}
String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.split(search).join(replacement);
};
function submituj()
{
	
	var inputNaslov = document.getElementById('naslovTxt');
	var inputNovost = document.getElementById('novostTxt');
	var inputKod = document.getElementById('kodTxt');
	var inputTelefon = document.getElementById('telefonTxt');

	if (inputKod.value == "" && inputTelefon.value == "") {inputTelefon.style.backgroundColor = 'white'; inputKod.style.backgroundColor = 'white';}

	if (provjeriText(inputNaslov) && provjeriText(inputNovost) && inputKod.style.backgroundColor == 'white' && inputTelefon.style.backgroundColor == 'white') 
		{

	return true;
	}
return false;
}