<?php

	function sortByVrijeme($a, $b) {
    	return $b['vrijemeObjave'] - $a['vrijemeObjave'];
	}

	function sortByAbecedno($a, $b) {
    	return strcmp(strtolower($a['naslov']), strtolower($b['naslov']));
	}

	if (isset($_REQUEST['req'])) {
		$req = $_REQUEST['req'];
	}
	

	$tmpx = array();
	$file="vijesti/vijesti.csv";
	$csv= file_get_contents($file);
	$array = array_map("str_getcsv", explode("\n", $csv));
	
	foreach ($array as $value) {
		if($value[0] !== null && $value[1] !== null && $value[2] !== null && $value[3] !== null){
			$tmp =  array( 'naslov' => $value[0], 'opis' => $value[3], 'altAttr' => 'none', 'imagePath' => $value[1], 'vrijemeObjave' => $value[2] );
			array_push($tmpx, $tmp);
		}
	}
	if($req == 'true') usort($tmpx, 'sortByVrijeme');
	else if($req == 'false') usort($tmpx, 'sortByAbecedno');
	$json = json_encode($tmpx);
	echo $json;

	
	/*
	echo "<div id='vijesti'>";
	foreach($tmpx as $value) {
		if($value["imagePath"] != null && $value["naslov"] != null && $value["opis"] != null){
			$d = odrediVrijeme($value["vrijemeObjave"]);
			echo "<div class='novost'><img src=".$value["imagePath"]." alt='none'/>
			<h4>".$value["naslov"]."</h4><p>".$value["opis"]."</p><div class='vrijeme'><i>".$d."</i></div></div>";
		}
	}
	echo "</div>";

	function odrediVrijeme($d){
		$razlika = time() - $d;
		//echo "<script>console.log(".$razlika.")</script>";
		$res = "undefined";
		if($razlika<60) $res = "Novost objavljena prije par sekundi";
		//minute
		else if($razlika<3600){
			$tmp = round($razlika/60);
			$tmpS = (string) $tmp;
			$res = "Novost je objavljena prije ".$tmp;
			if($tmp == 1 || $tmp == 21 || $tmp == 31 || $tmp == 41 || $tmp ==51) $res = $res." minutu";
			else if($tmp == 11 || $tmp == 12 || $tmp == 13 || $tmp == 14) $res = $res." minuta";
			else if( $tmpS[strlen($tmpS) - 1] > 1 && $tmpS[strlen($tmpS) - 1] < 5  ) $res = $res." minute";
			else $res = $res." minuta";
		}
		else if($razlika<86400){
			$tmp = round($razlika/3600);
			$tmpS = (string) $tmp;
			$res = "Novost je objavljena prije ".$tmp;
			if($tmp == 1 || $tmp == 21 || $tmp == 31 || $tmp == 41 || $tmp ==51) $res = $res." sat";
			else if($tmp == 11 || $tmp == 12 || $tmp == 13 || $tmp == 14) $res = $res." sati";
			else if( $tmpS[strlen($tmpS) - 1] > 1 && $tmpS[strlen($tmpS) - 1] < 5  ) $res = $res." sata";
			else $res = $res." sati";
		}
		else if($razlika<604800){
			$tmp = round($razlika/86400);
			$tmpS = (string) $tmp;
			$res = "Novost je objavljena prije ".$tmp;
			if($tmp == 1 ) $res = $res." dan";
			else $res = $res." dana";
		}
		//sedmice
		else if($razlika<2419200){
			$tmp = round($razlika/604800);
			$res = "Novost je objavljena prije ".$tmp;
			if($tmp == 1) $res = $res." sedmicu";
			else $res = $res." sedmice";
		}
		else{
			$res = "Novost je objavljena ".date("d.m.Y h:i:s a", $d);
		}

		return $res;
	}*/
	
?>


