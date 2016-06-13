function ValidirajDrzavu(drzava) {
	var naziv = document.getElementById("drzava");
	var tekst = document.getElementById("drzava").value;
	var poljeBroj = document.getElementById("broj")
	var broj = document.getElementById("broj").value;

	var reg = /^[A-za-z][A-za-z]$/gm;
	if(!(reg.test(tekst)))
	{
		naziv.style.backgroundColor="#FF9494";
	}
	else 
	{
		naziv.style.backgroundColor="white";
	}

	if(tekst.length <=3)
	{
		var ajax = new XMLHttpRequest();

		ajax.onreadystatechange = function() {
			var x= document.getElementById("broj");

		//4: request finished and response is ready, 200: OK
		if (ajax.readyState == 4 && ajax.status == 200){
			var br=JSON.parse(ajax.response);

			if (br[0] != null)
			{
				x.value="+"+br[0]["callingCodes"];
			}
			else
			{
				x.value="";
			}

		}

		//4: request finished and response is ready, 404:Page not found
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("broj").innerHTML = "Uneseni kod ne postoji.";
	}
	ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes="+tekst, true);
	naziv.style.backgroundColor="white";
	poljeBroj.style.backgroundColor="white";
	ajax.send();	
}
}

function ValidirajBroj(broj) {
	var naziv = document.getElementById("broj");
	var broj = document.getElementById("broj").value;
	var poljeDrzava = document.getElementById("drzava");
	broj = broj.substr(1);
	var reg = /^387[0-9]{8}[0-9]?$/gm;
	if (!(reg.test(broj)))
	{
		naziv.style.backgroundColor="#FF9494";
	}
	else 
	{
		naziv.style.backgroundColor="white";
	}
	if(broj.length <=3)
	{
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function() 
		{

		//4: request finished and response is ready, 200: OK
		if (ajax.readyState == 4 && ajax.status == 200){
			var br=JSON.parse(ajax.response);

			if(br[0]!=null){
				document.getElementById("drzava").value="";
				document.getElementById("drzava").value= br[0]["alpha2Code"].toUpperCase();
			}
			else
			{
				document.getElementById("drzava").value="";
			}
		}

		//4: request finished and response is ready, 404:Page not found
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("broj").innerHTML = "Pozivni se ne moze povezati sa drzavom";
	}
	ajax.open("GET", "https://restcountries.eu/rest/v1/callingcode/"+broj, true);
	naziv.style.backgroundColor="white";
	poljeDrzava.style.backgroundColor="white";
	ajax.send();
}
}
