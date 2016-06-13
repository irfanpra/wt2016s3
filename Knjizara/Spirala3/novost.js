function Izracunaj(datum)
{
	var t1 = new Date(2016, 2, 23, 2, 2, 3);
    var t2 = new Date();
    datum = t1.getDate() + "." + t1.getDay() + "." + t1.getFullYear() + ".";
    var razlika = t1.getTime() - t2.getTime();
    var Seconds_from_T1_to_T2 = razlika / 1000;
    var sekunde = Math.floor((Seconds_from_T1_to_T2)); //ukupan broj sekundi između dva datuma	
	var s = Math.floor(((((((sekunde%60)%3600)%86400)%604800)%241922)%29030400));
	var minute = Math.floor((sekunde/60));
	var sati = Math.floor(((sekunde%60)/3600));
	var dan = Math.floor((((sekunde%60)%3600)/86400));
	var sedmica = Math.floor(((((sekunde%60)%3600)%86400)/604800));
	var mjesec = Math.floor((((((sekunde%60)%3600)%86400)%604800)/241922));
	var godina = Math.floor(((((((sekunde%60)%3600)%86400)%604800)%241922)/29030400));
	
	if(s == 1 || s == 21 || s == 31 || s == 41 || s == 51)
	{
		return "Novost objavljena prije" + s + "sekundu";
	}
	else if((s >=2 && s <= 4) || (s >=22 && s <= 24) || (s >=32 && s <= 34) || (s >=42 && s <= 44) || (s >=52 && s <= 54))
	{
		return "Novost objavljena prije" + s + "sekunde";
	}
	else if(( s >= 5 && s <= 20)|| (s >= 25 && s <= 30)|| (s >= 35 && s <= 40)|| (s >= 45 && s <= 50)|| (s >= 55 && s < 60))
	{
		 return "Novost objavljena prije" + s + "sekundi";
	}
	else if( minute == 1 || minute == 21 || minute == 31 || minute == 41 || minute == 51)
	{
		return "Novost objavljena prije" + minute + "minutu";
	}
	else if((minute >=2 && minute <= 4) || (minute >=22 && minute <= 24) || (minute >=32 && minute <= 34) || (minute >=42 && minute <= 44) || (minute >=52 && minute <= 54))
	{
		return "Novost objavljena prije" + minute + "minute";
	}
	else if(( minute >= 5 && minute <= 20)||(minute >= 25 && minute <= 30)|| (minute >= 35 && minute <= 40)|| (minute >= 45 && minute <= 50)|| (minute >= 55 && minute < 60))
	{
		return "Novost objavljena prije" + minute + "minuta";
	}
	else if( sati == 1 || sati == 21)
	{
		return "Novost objavljena prije" + sati + "sat";
	}
	else if((sati >=2 && sati <= 4) || (sati >=22 && sati < 24))
	{
		return  "Novost objavljena prije" + sati + "sata";
	}
	else if(( sati >= 5 && sati <= 20))
	{
		return  "Novost objavljena prije" + sati + "sati";
	}
	else if(dan == 1)
	{
		return "Novost objavljena prije" + dan + "dan";
	}
	else if( dan >=2 && dan <=6)
	{
		return "Novost objavljena prije" + dan + "dana";
	}
	else if(sedmica == 1)
	{
		return "Novost objavljena prije" + sedmica + "sedmicu";
	}
	else if(sedmica>=2 && sedmica <= 4)
	{
		return "Novost objavljena prije" + sedmica + "sedmice";
	}
	else if(mjesec == 1)
	{
		return "Novost objavljena prije" + mjesec + "mjesec";
	}
	else if(mjesec>= 2 && mjesec <= 4)
	{
		return "Novost objavljena prije" + mjesec + "mjeseca";
	}
	else if (mjesec >= 5 && mjesec <= 12)
	{
		return "Novost objavljena prije" + mjesec + "mjeseci";
	}
	else
	{
	 return "Novost je objavljena "+ datum; 
	}	
}
window.onload = function()
{
	 var _vrijeme = document.getElementsByClassName("vrijeme");
     for (var i = 0; i < _vrijeme.value.length; i++)
		 {
           var _datum = new Date(_vrijeme[i].innerHTML);
           _vrijeme[i].innerHTML = Izracunaj(_datum);
  }
}
function Promijeni()
{
	var _izabrano = document.getElementById("novostiSelect");
	var _novost = document.getElementById("Novo");
	var _datumi = document.getElementById("vrijeme");
	
	var _pomocno = new Date(_datumi[i].innerHTML);
	var _proslo = Math.floor((new Date() - _pomocno) / 1000);
	var _interval = Math.floor(_proslo / 86400);
	
	if(_izabrano == "danasnje")
	{
		for(var i = 0; i < _datumi.value.length; i++)
		{
		 if (interval >= 1)
			 _novosti[i].style.display = 'none';
         else
			 _novosti[i].style.display = 'inline-block';
		
	}
	if(_izabrano == "sedmicne")
	{
		for(var i = 0; i < _datumi.value.length; i++)
		{
			if(interval <= 2 && interval > danUSedmici + 1 && interval >= 1)
				_novosti[i].style.display = 'none';
            else
				_novosti[i].style.display = 'inline-block';
			
		}
	}
	if(_izabrano == "mjesecne")
	{
		for(var i = 0; i < _datumi.value.length; i++)
		{
			if( _proslo >= 2592000 )
			_novosti[i].style.display = 'none';
            else 
			_novosti[i].style.display = 'inline-block';
		}
	}
	if(_izabrano == "sve")
	{
		for(var i = 0; i < _datumi.value.length; i++)
		{
	      _novosti[i].style.display = 'inline-block';		
		}
	}
}
function ValidirajFormu()
{
	//multiple field validacija
	var x = document.forms["Forms"]["email"].value;
	var y = document.forms["Forms"]["drzava"].value;
	var z = document.forms["Forms"]["tel"].value;
	var k = document.forms["Forms"]["mss"].value;
    if (x == null || x == "") 
	{
        alert("Ne možete unijeti vrijednost ukoliko prethodno polje nije ispunjeno!");
        return false;
    }
	//regex i promjena boje
	var email = document.getElementById("email");
        var emailRegEx = /[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/;
        if (!emailRegEx.test(email.value))
			{
			email.style.backgroundColor ="red";       
          }
		  else
		  {
			  email.style.backgroundColor ="white";
		  }
		  
	var telefon = document.getElementById("tel");
	  var telefonRegEx = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{3}$/;
	   if(!telefonRegEx.test(telefon.value))
	   {
		   telefon.style.backgroundColor ="red";       
          }
		  else
		  {
			  telefon.style.backgroundColor ="white";
		  }		
}
//Sortiranje abecedno
function SortirajAbecedno()
{
	var _novost = document.getElementById("Novo");
	_novosti.sort();
	for(var i = 0; i < _novost.value.length; i++)
	{
		_novost[i].style.display = 'inline-block';
	}
}
