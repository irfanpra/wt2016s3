function validateFirstName()
{
	var tb = document.getElementById("first-name");
	var reg = /^[a-zA-Z]+$/; 
	if(tb.value.length == 0 || !tb.value.match(reg))
		tb.style.background = "red";
	else
		tb.style.background = "white";

}

function validateLastName()
{
	var tb = document.getElementById("last-name");
	var reg = /^[a-zA-Z]+$/;
	if(tb.value.length == 0 || !tb.value.match(reg))
		tb.style.background = "red";
	else
		tb.style.background = "white";
}


function validateEmail()
{
	var email = document.getElementById("email");
	var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email.value.length == 0 || !email.value.match(reg))
		email.style.background = "red";
	else
		email.style.background = "white";
}

function crossValidEmail()
{
	var email = document.getElementById("email");
	var conf = document.getElementById("conf");
	if(conf.value.length == 0 || conf.value != email.value)
		conf.style.background = "red";
	else
		conf.style.background = "white";
}


function validateTel()
{
	var tel = document.getElementById("tel");
	var reg = /^[0-9]+$/;
	if(!tel.value.match(reg))
		tel.style.background = "red";
	else
		tel.style.background = "white";
}


function validateCode()
{	
	var isOK = false;
	var code = document.getElementById("code");
	var number = document.getElementById("tel");
	var button = document.getElementById("submitBtn");

	
	if(code.value != "" && code.value.length == 2 && number.value != "" && number.value.length >= 4 &&number.value[0] == "+") 
	{
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + code.value, true);
		xhttp.send();

		
		
		xhttp.onreadystatechange = function() {
  			if (xhttp.readyState  == 4 && xhttp.status == 200){

  				var res = JSON.parse(xhttp.responseText);
  				if(res != "")
  				{

  					var p = number.value.substring(1,4);  					
  					var m = number.value.substring(4,6);
  					
  					var mValid = (Number(m) >= 30 && Number(m) <= 67);
  					var r = /^[0-9]{6,7}$/;
  					var ostatak = number.value.substring(6, number.value.length);
  					
  					
	  				if (res[0].callingCodes == p && mValid && ostatak.match(r))
	  				{		
	  					isOK = true;
	  					code.style.backgroundColor = 'white';
	  					number.style.backgroundColor = 'white';	  
	  					button.disabled = false;

	  				}
	  					
  				}  				 						

  			}
  			
		}
	}
	
	if (isOK == false){
		code.style.backgroundColor = '#8B0000';
	  	number.style.backgroundColor = '#8B0000'; 
	  	button.disabled = true;
	}
}