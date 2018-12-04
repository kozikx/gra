<?php
	session_start();
	if (!isset($_SESSION['logged']))
	{
		header('Location: zaloguj.php');
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
			<li> <a href="index.php#">Postać</a></li>
			<li> <a href="#">Wyprawa</a></li>
			<li> <a href="#">Folwark</a></li>
			<li> <a href="zaloguj.php">Targ</a></li>
			<li> <a href="#">Ołtaż harmonizacji</a></li>
			<li> <a href="#">Wyloguj</a></li>
		</ul>
	</nav>
	<article> 
	
		<?php
			echo "zalogowany";
			echo "Witaj ". $_SESSION['user']."! posiadasz ".$_SESSION['zloto']." sztuk złota.";
			echo "<a href = 'logout.php'>Wyloguj się</a>"
		
		?>
	</article>
	<footer> 
		Kamil Mrozik wszystkie prawa zastrzezone &copy 
	</footer>
</div>
</body>


