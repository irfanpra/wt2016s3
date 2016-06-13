<?php 
	$myfile = fopen("credentials.txt", "r") or die ("Unable to open file!");
	while (!feof($myfile)) 
	{
		$username = fgets($myfile);
		$pass = fgets($myfile) ;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$naslov = htmlspecialchars($_POST['naslov']);
		$novost = htmlspecialchars($_POST['novost']);
		$list = "";
		array_push($list, $naslov);
		array_push($list, $novost);


		$file = fopen($naslov . ".csv","w");

		foreach ($list as $line)
		{
			fputcsv($file, explode(',',$line));
		}

		fclose($file);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sempre forte</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Calligraffitti" />
 

        

       
</head>
<body>

<div id = "top">
  <h2 id = "top-header">sempre forte</h2>
</div>
<div id = "div-menu">
  <ul>
    <li><a href="index.html">Desavanja</a></li>
    <li><a href="sponzori.html">Sponzori</a></li>
    <li><a href="kontakt.html">Kontakt</a></li>
    <li><a href="sastav.html">Sastav</a></li>
    <li><a href="prijatelji.html">Prijatelji</a></li>
    <li><a href="login.php">Log Out</a></li>
  </ul>
</div>

<!--default gore-->

<div id = "div-dashboard">
  <div id = "div-naslov-admin"> Welcome <?php echo $username;?> </div>
  <form id="novosti" name="novosti" method="post" action="adminpanel.php" onsubmit="return validateForm()">
    <p><br>
      <input type="text" name="naslov" placeholder="Naslov" required />
  </p>
    <p><br>
      <textarea id="novost" name="novost" placeholder="Tekst Novosti" required></textarea>
    </p>
    <p>
     
     <input name="kod" type="text" id="kod" onchange="setKod(document.Form, this.value);">
   
      
      <input name="showkod" type="text" id="showkod" value="<show-value-of-kod-here" onchange="setKod(document.Form, this.value);" />
    </p>
    <button type="submit">Dodaj Novost</button>
  </form>
  
  
 
 </p>
   
<script>

var conCodes = {
    'BA': "+" + 387,
    'HR': "+" + 385,
    'SLO': "+" + 389
};

var form = document.getElementById('novosti');
form.elements.kod.onchange = function () {
    var form = this.form;
	
    form.elements.showkod.value = conCodes[this.value];
	
	
};

</script>


  
  
  
  
</div>





<script type="text/javascript">
      var regKod=/^(\+|00)(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)(\s?\d){9}$/;
		function validateForm() {
		    var naslov = document.forms["novosti"]["naslov"].value;
			var phoneKod=document.forms["novosti"]["phoneCode"].value;
		    if (naslov == null || naslov == "" || naslov.length < 5) {
		        alert("Naslov mora imati najmanje pet znakova");
		        return false;
		    } else if (naslov.length > 15) {
		    	alert("Naslov ne moze biti duzi od petnaest znakova");
		    	return false;
		    }
			var kod=document.forms["novosti"]["countryCode"].value;
			if(kod == null || kod == "" || kod.length !=2 || kod.value!=regKod){
				 alert("Kod mora biti dvoslovan!");
				 return false;

				
				}
				
		}
		
		
		
	</script>
<script>

    	$(document).ready(function(){

    		$('.sCountries').phonecode({
                        setClass:'phone'

    		});

    		

    	});

    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
