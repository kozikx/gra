﻿<?php
	session_start();
	if((isset($_SESSION['logged']))&& ($_SESSION['logged']==true))
	{
		header ('Location: gra.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
	<title> Gra przeglądarkowa - Roots</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<div class="conteiner"><h1> Witaj w grze przegladarkowej <span><strong> Roots</strong></span></h1>
	<nav>
		<ul>
			<li> <a href="index.php">Strona główna</a></li>
			<li> <a href="#">O grze</a></li>
			<li> <a href="#">Zarejestruj się</a></li>
			<li> <a href="zaloguj.php">Zaloguj się</a></li>
			<li> <a href="#">Kontakt</a></li>
		</ul>
	</nav>
	<article> 
		<form action="login.php" method="post">
			login: </br><input type="text" name="login" /></br>
			password: </br><input type="password" name="pass" /></br>
			<input type="submit" value="zaloguj się"/>
		</form>
<?php
			if (isset($_SESSION['blad']))echo $_SESSION['blad'];
		
			
?>
	</article>
	<footer> 
		Kamil Mrozik wszystkie prawa zastrzezone &copy 
	</footer>
</div>
</body>


