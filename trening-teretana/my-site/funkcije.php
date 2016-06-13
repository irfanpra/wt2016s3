<?php
		
	function provjeriDaLiJePrijavljen()
	{
		if(isset($_SESSION['username']))
			return true;
		else
			return false;
	}
	
	function preusmjeri($stranicaN)
	{
		header("Location: " . $stranicaN);
		//header("Location")
	}
	
	function provjeriUserNamePass()
	{
		$korisnici = array_map('str_getcsv', file("korisnici.csv"));
		
		foreach($korisnici as $korisnik)
		{
			if($korisnik[0] == $_POST['username'])
			{
				$pass = md5($_POST['password']);
				
				if($korisnik[1] == $pass)
				{
					$_SESSION['username'] = $_POST['username'];
					return true;
				}
			}
		}
		
		return false;
		
	}
	function daLiSuPostavljeniUserNamePass()
	{
		if(isset($_POST['username']) && isset($_POST['password']))
			return true;
		return false;
	}
	
	function dajImeKorisnika($username)
	{
		$korisnici = array_map('str_getcsv', file("korisnici.csv"));
		
		foreach($korisnici as $korisnik)
		{
			if($korisnik[0] == $username)
			{
				return $korisnik[2];
			}
		}
	}
		function logout()
	{
		session_unset();
	}
	
	?>