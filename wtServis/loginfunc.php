<?php

	session_start();

	if (isset($_POST['login'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(handle_csv('files/users.csv', $username, $password) == true){
			$_SESSION['login'] = true;
			$_SESSION['username'] = $username;
		}
		else echo "<script>console.log( 'Pogrešni korisnički podaci' );</script>";
		
	}
	else if (isset($_SESSION['username'])) echo "<script>console.log( 'Sesija uspostavljena' );</script>";
	else echo "<script>console.log( 'Sesija nije uspostavljena' );</script>"; 

	function handle_csv($name){
		$row = 1;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$flag = false;
		if (($handle = fopen($name, "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $usr = $data[0];
		        $pw = $data[1];
		        if($usr == $username && $password == $pw) 
		        	$flag = true;
		    } 
		    fclose($handle);
		}
		return $flag;
	}

?>