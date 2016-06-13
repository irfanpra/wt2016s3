<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Tabela</TITLE>
<link rel="stylesheet" type="text/css" href="style/style.css">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

	<?php
		session_start();
		$page = 'tabela';
		if(isset($_SESSION['username']))
		{
			include 'navbar-admin.php';
		} 
		else include 'navbar.php';
	?>
	
	<table id="naslovna-tabela">
		<tr class="vodeci-red">
			<th>Ime</th>
			<th>Prezime</th>
			<th>Godine</th>
			<th>Spol</th>
			<th>Telefon</th>
		</tr>
		<tr>
			<td>Hamo</td>
			<td>Hamić</td> 
			<td>21</td>
			<td>M</td>
			<td>061123456</td>
		</tr>
		<tr>
			<td>Mujo</td>
			<td>Mujić</td> 
			<td>27</td>
			<td>M</td>
			<td>061442865</td>
		</tr>
		<tr>
			<td>Fata</td>
			<td>Fatić</td> 
			<td>21</td>
			<td>Ž</td>
			<td>062952037</td>
		</tr>
		<tr>
			<td>Suljo</td>
			<td>Suljić</td> 
			<td>18</td>
			<td>M</td>
			<td>061821999</td>
		</tr>
	</table>
	
</BODY>
</HTML>
