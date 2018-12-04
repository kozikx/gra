<?php
	session_start();
	if((!isset($_POST['login']))||  (!isset($_POST['pass'])))
	{
		header('Location: zaloguj.php');
		exit();
	}
	
	require_once "connect.php";
	
	$connect = @new  mysqli($host, $db_user, $db_password, $db_name);
	if($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	else
	{
		$login = $_POST ['login'];
		$pass = $_POST['pass'];
		
		$login = htmlentities ($login, ENT_QUOTES, "UTF-8");
		$pass = htmlentities ($pass, ENT_QUOTES, "UTF-8");
						
		if ($rezultat = @$connect->query(sprintf("SELECT * FROM gra WHERE login='%s'	AND pass='%s'", 
		mysqli_real_escape_string($connect,$login), mysqli_real_escape_string($connect,$pass))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['logged'] = true;
				unset($_SESSION['blad'])
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['user'] = $wiersz['login'];
				$_SESSION['zloto'] = $wiersz['zloto'];
				;
				$rezultat->close();
				header ('Location: gra.php');
			}else{
				$_SESSION['blad'] = '<span style ="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: zaloguj.php');
		
			}
		}
		$connect->close();
	}	
	
?>













