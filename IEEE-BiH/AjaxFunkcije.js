var xmlHttp = createHttpRequestObject();

function createHttpRequestObject() {
    var xmlHttp;

    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xmlHttp = false;
        }
    }
    else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }

    if (!xmlHttp) alert("Greska kod HttpRequest");
    else return xmlHttp;
}

function validirajKod() {
    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
        
        kodDrzave = encodeURIComponent(document.getElementById("kodDrzave").value);
        

        xmlHttp.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + kodDrzave, true);

        xmlHttp.onreadystatechange = parsirajIProvjeri;
        xmlHttp.send(null);
    } else {
        setTimeout('validirajKod()', 1000);
    }
}

function parsirajIProvjeri() {
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            xmlresponse = JSON.parse(xmlHttp.responseText);
            
            pozivniUneseni = encodeURIComponent(document.getElementById("brPozivni").value);
            
            var pozivniBrojevi = xmlresponse[0].callingCodes;

            var ok = false;

            for(var i=0; i< pozivniBrojevi.length; i++){
                if (pozivniBrojevi[i] === pozivniUneseni) {
                    ok = true;
                    break;
                }
            }
            if (ok === false) {
                document.getElementById("brPozivni").style.borderColor = "red";
            }

           
        }
    }
}