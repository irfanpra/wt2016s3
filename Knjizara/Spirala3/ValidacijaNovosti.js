function ValidacijaAutor()
{
    var _autor = document.getElementById("autor");
	if(_autor.value.length < 4)
	{
          _autor.style.backgroundColor = "#cc0000";
		   alert("Naziv autora mora biti duži od 3 znaka!");
    }
	else
	{
		_autor.style.backgroundColor = "#ffffff";
	}
}
function ValidacijaNaziv()
{  
   var _naziv = document.getElementById("naziv");
   if(_naziv.value.length < 4)
	{
          _naziv.style.backgroundColor = "#cc0000";
		  alert("Naziv novosti mora biti duži od 3 znaka!");
    }
	else
	{
		_naziv.style.backgroundColor = "#ffffff";
	}
}
function ValidacijaNovost()
{	
	var _novost = document.getElementById("novost");
	var novostRegex = /[^A-Za-z0-9 ]/;
	if (novostRegex.test == true)
		{
          _novost.style.backgroundColor = "#cc0000";
		  alert("Neispravan format. Novost se sastoji samo od alfanumeričkih znakova");
        }
	else
	{
		_novost.style.backgroundColor = "#ffffff";
	}
}
function kodDrzave()
{
	var _kod = document.getElementById("kod");
	var _telefon = document.getElementById("telefon");
	
	if (_kod.value.length == 0)
		{ 
           alert("Popunite polje");
		}
		if (_kod.value.length > 2)
		{ 
	       _kod.style.backgroundColor = "#cc0000";
           alert("Kod države ne može biti duzi od 2 znaka");
		}
		
        	var xmlhttp = new XMLHttpRequest();
        
		   xmlhttp.onreadystatechange = function()
		   {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
				  return(xmlhttp.responseText);
                }
        };
        xmlhttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + kod, true);
        return xmlhttp.send();		
}
function ValidacijaTelefon()
{
	/*RegexTelefon*/
	var _telefon = document.getElementById("telefon");
	  var telefonRegEx = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{3}$/gm;
	   if(!telefonRegEx.test(telefon.value))
	   {
		   _telefon.style.backgroundColor = "#cc0000";       
          }
		  else
		  {
			  _telefon.style.backgroundColor = "#ffffff";
		  }
		  
	/*Provjera odgovara li broj kodu držžave*/
    var _drzava = kodDrzave();		  
	if(_telefon != _drzava) 
	{
		_telefon.style.backgroundColor = "#cc0000";
		alert("Kod drzave i broj telefon se ne slažu!");
	}
	else
	{
		_broj.style.backgroundColor = "#ffffff";
	}
}
