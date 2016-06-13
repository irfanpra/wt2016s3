function izmijeniVrijeme(){
	//alert("Page is loaded");

	//bilo za one vec postavljene datume duse slatke
	/*
	var elements = document.getElementsByClassName("datumVrijeme");
	var datumiNovosti = [];
	var sec2 = 0.1;
	for (var i = 0, len = elements.length; i < len; i++) {
	 	var sada = new Date();
	 	var temp = new Date();
	 	//var pomocni = new Date("May 20, 2016 01:15:00");
	 	var pomocni = new Date("2016-05-20 14:55:47");
	 	temp.setTime(pomocni.getTime() - sec2*1000);
	 	var sec = (sada.getTime() - temp.getTime())/1000;
	 	datumiNovosti.push(temp);
	*/ 

	var elements = document.getElementsByClassName("datumVrijemeNovo");
	var datumiNovosti = [];
	//var sec2 = 0.1;
	for (var i = 0, len = elements.length; i < len; i++) {
	 	var sada = new Date();
	 	//var temp = new Date();
	 	var pomocni = new Date(elements[i].innerHTML);
	 	pomocni.setTime(pomocni.getTime() + (2*60*60*1000)); 
	 	//var pomocni = new Date("2016-05-20 14:55:47");
	 	//temp.setTime(pomocni.getTime() - sec2*1000);
	 	var sec = (sada.getTime() - pomocni.getTime())/1000;
	 	datumiNovosti.push(pomocni);
	 	
   /* var dt = elements[i].innerHTML.split(/\-|\s/);
    var dat = new Date(dt.slice(0,3).reverse().join('/')+' '+dt[3]);
    var now = new Date();
    //alert(now);
    //alert(dat);
    var dif = dat.getTime() - now.getTime();

	var Seconds_from_dat_to_now = dif / 1000;
	var temp = Math.abs(Seconds_from_dat_to_now);
	var sec = Math.round(temp);
	//alert(temp);*/
	
	if (sec<60) elements[i].innerHTML = 'Novost objavljena prije par sekundi';
	else if(sec>=60 && sec<3600) 
	{
		//alert(sec/60);
		var min = Math.floor(sec/60);
		//alert(min);
		if (min%10 == 1 && min!=11) elements[i].innerHTML = 'Novost objavljena prije ' + min + ' minutu';
		else if ((min%10 == 2 || min%10 == 3 || min%10 == 4) && min!=12 && min!=13 && min!=14) elements[i].innerHTML = 'Novost objavljena prije ' + min + ' minute';
		else elements[i].innerHTML = 'Novost objavljena prije ' + min + ' minuta';
	}
	else if(sec>=3600 && sec<86400)
	{
		var sat = Math.floor(sec/3600);
		if (sat%10 == 1 && sat!=11) elements[i].innerHTML = 'Novost objavljena prije ' + sat + ' sat';
		else if ((sat%10 == 2 || sat%10 == 3 || sat%10 == 4) && sat!=12 && sat!=13 && sat!=14) elements[i].innerHTML = 'Novost objavljena prije ' + sat + ' sata';
		else elements[i].innerHTML = 'Novost objavljena prije ' + sat + ' sati';

	}
	else if(sec>=86400 && sec<604800)
	{
		var sed = Math.floor(sec/86400);
		if (sed == 1) elements[i].innerHTML = 'Novost objavljena prije ' + sed + ' dan';
		else elements[i].innerHTML = 'Novost objavljena prije ' + sed + ' dana';

	}
	else if(sec>=604800 && sec<2592000)
	{
		var sed2 = Math.floor(sec/604800);
		if (sed2 == 1) elements[i].innerHTML = 'Novost objavljena prije ' + sed2 + ' sedmicu';
		else elements[i].innerHTML = 'Novost objavljena prije ' + sed2 + ' sedmice';
	}
	else elements[i].innerHTML = pomocni.toLocaleString();
	/*if (i<2) sec2 += 1987;
	else if (i<6) sec2 += 116675;
	else if (i<9) sec2 += 316324;
	else sec2 += 29292929;*/
	
	

}

	var rad = document.filter.filteri;
	var trenutni = new Date();

	var x = document.getElementsByClassName("divA");


    	rad[0].onclick = function() {
    		for (var i = 0, len = elements.length; i < len; i++) {
    			//alert(datumiNovosti[i]);
    			x[i].style.display = "inline";
				var odPonoci = trenutni.getHours()*60*60 + trenutni.getMinutes()*60 + trenutni.getSeconds();
    			if (((trenutni.getTime() - datumiNovosti[i].getTime())/1000) >=odPonoci) x[i].style.display = "none";
    			
    		}
        	
    	};
    	rad[1].onclick = function() {
    		for (var i = 0, len = elements.length; i < len; i++) {
    			//alert(datumiNovosti[i]);
    			x[i].style.display = "inline";
				var pomocna;
				if (trenutni.getDay()==0) pomocna=6;
				else pomocna = trenutni.getDay()-1;
				var odPonedjeljka = pomocna*24*60*60 + trenutni.getHours()*60*60 + trenutni.getMinutes()*60 + trenutni.getSeconds();
    			if (((trenutni.getTime() - datumiNovosti[i].getTime())/1000) >= odPonedjeljka) x[i].style.display = "none";
    			
    		}
        	
    	};
    	rad[2].onclick = function() {
    		for (var i = 0, len = elements.length; i < len; i++) {
    			//alert(datumiNovosti[i]);
    			x[i].style.display = "inline";
    			if (((trenutni.getTime() - datumiNovosti[i].getTime())/1000) >=odPrvog()) x[i].style.display = "none";
    			
    		}
        	
    	};
    	rad[3].onclick = function() {
    		for (var i = 0, len = elements.length; i < len; i++) {
    			//alert(datumiNovosti[i]);
    			x[i].style.display = "inline";
    			//if (((trenutni.getTime() - datumiNovosti[i].getTime())/1000) >=2592000) x[i].style.display = "none";
    			
    		}
        	
    	};

    	

var naslovi = document.getElementsByClassName("proba");
for (var i = 0, len = naslovi.length; i < len; i++) {
	if (naslovi[i].clientHeight>17)
		{
			while(naslovi[i].clientHeight>17) naslovi[i].innerHTML = naslovi[i].innerHTML.substring(0,naslovi[i].innerHTML.length-5);
			naslovi[i].innerHTML = naslovi[i].innerHTML.substring(0,naslovi[i].innerHTML.length-3);
			naslovi[i].innerHTML = naslovi[i].innerHTML.concat("...");

		}
}
var spanovi = document.getElementsByClassName("bitanSpan");
for (var i = 0, len = spanovi.length; i < len; i++) {
	if (spanovi[i].clientHeight>80)
		{
			while(spanovi[i].clientHeight>80) spanovi[i].innerHTML = spanovi[i].innerHTML.substring(0,spanovi[i].innerHTML.length-5);
			spanovi[i].innerHTML = spanovi[i].innerHTML.substring(0,spanovi[i].innerHTML.length-3);
			spanovi[i].innerHTML = spanovi[i].innerHTML.concat("...");

		}
}





}

 			function odPrvog() {
				var now = new Date().getTime(),
					monthStart = new Date();

					monthStart.setDate(1);
					monthStart.setHours(0);
					monthStart.setMinutes(0);
					monthStart.setSeconds(0);
					monthStart.setMilliseconds(0);
					return Math.floor((now - monthStart.getTime()) / 1000);
						}