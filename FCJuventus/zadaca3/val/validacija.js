
function provjeriNaslovNovosti()
{
if(document.getElementById("naslovNovosti").value.length < 4)
	{
		document.getElementById("naslovNovosti").style.backgroundColor = "#FC7B7B";
			 document.getElementById("nevalidanNaslov").innerHTML=
"Naslov mora imati bar 4 slova";
		return false;
	}
	else{
	document.getElementById("naslovNovosti").style.backgroundColor = "lightgreen";
	 document.getElementById("nevalidanNaslov").innerHTML="";
	
	return true;}
}

function provjeriTekstNovosti()
{
	if(document.getElementById("tekstNovosti").value.length <=6)
	{document.getElementById("tekstNovosti").style.backgroundColor = "#FC7B7B";
	 document.getElementById("nevalidanTekst").innerHTML=
"Tekst mora imati bar 7 slova";

	return false;}
	else {
	document.getElementById("tekstNovosti").style.backgroundColor = "lightgreen";
		 document.getElementById("nevalidanTekst").innerHTML="";
	return true;}
}

function validirajFormu()
{
	if(provjeriNaslovNovosti()==true && provjeriTekstNovosti()==true && provjeri()==true  
	&& provjeriBrojTelefona(document.getElementById("brojTelefona").value)==true)
		return true;
	return false;
}
function provjeri()
{
	 var broj=document.getElementById("provjeraBroja").innerHTML;
  var kod=document.getElementById("provjeraKoda").innerHTML;
  
   if( broj==kod && broj!="" && kod!="")
  {document.getElementById("kod").style.backgroundColor="lightgreen";
   document.getElementById("br").style.backgroundColor="lightgreen";
  return true;}
  else 
  { document.getElementById("kod").style.backgroundColor="#FC7B7B";
    document.getElementById("br").style.backgroundColor="#FC7B7B";
	  return false;}
  }


function provjeriTel()
 {
  var xhttp = new XMLHttpRequest();
  var broj=document.getElementById("br").value;
  var kod=document.getElementById("kod").value;
  	 
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {

      document.getElementById("provjeraBroja").innerHTML = xhttp.responseText;
	   document.getElementById("provjeraBroja").style.visibility="hidden";
	  
	  provjeri();

    }
	else { document.getElementById("provjeraBroja").innerHTML = "Netačno";
	  document.getElementById("provjeraBroja").style.visibility="hidden";
	provjeri();}
	
  };
  xhttp.open("GET", "https://restcountries.eu/rest/v1/callingcode/"+broj, true);
  xhttp.send();

}

function provjeriKod()
 {
  var xhttp = new XMLHttpRequest();
  var broj=document.getElementById("br").value;
  var kod=document.getElementById("kod").value;
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("provjeraKoda").innerHTML = xhttp.responseText;
	   document.getElementById("provjeraKoda").style.visibility="hidden";
	  provjeri();
    }
  };
  xhttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes="+kod, true);
  xhttp.send();

}
 function provjeriBrojTelefona(tel)
 {
	 var r=/[0-9]{9}$/g;
	if(!r.test(tel))
	{
		document.getElementById("brojTelefona").style.backgroundColor="#FC7B7B";
 document.getElementById("pogresanBrojTelefona").innerHTML=
"Broj telefona mora imati 9 cifara";
return false;}
else {document.getElementById("brojTelefona").style.backgroundColor="lightgreen";
 document.getElementById("pogresanBrojTelefona").innerHTML="";
 return true;}
	}		
 





	

