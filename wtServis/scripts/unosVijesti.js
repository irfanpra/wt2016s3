function validiraj_kod(obj, obj2){
	var req = new XMLHttpRequest();
	req.onreadystatechange = function() {
   		if (req.readyState == 4 && req.status == 200){
   			var x = JSON.parse(req.responseText);
   			if(x[0]!=null){
   				if(obj2.value.startsWith('+' + x[0].callingCodes[0])){
   					obj.style.backgroundColor = "#e6e6e6";
   					obj2.style.backgroundColor = "#e6e6e6";
                  document.getElementById("val").value = true;
   				}
   				else{
   					obj.style.backgroundColor = "#ffe5e5";
   					obj2.style.backgroundColor = "#ffe5e5";
                  document.getElementById("val").value = false;
   				}
   			}
   			else{
   				obj.style.backgroundColor = "#ffe5e5";
   				obj2.style.backgroundColor = "#ffe5e5";
               document.getElementById("val").value = false;
   			}
   		}    	
         console.log(document.getElementById("val").value);
    }
	req.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + obj.value, true);
	req.send();
}

function validiraj_prazno(obj){
	if(obj.value != "") obj.style.backgroundColor = "#e6e6e6";
	else obj.style.backgroundColor = "#ffe5e5";
}