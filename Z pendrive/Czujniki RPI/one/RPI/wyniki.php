<?php
	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wyniki pomiarów Raspberry PI</title>
</head>

<body>
	
<?php
	$licz = fopen("liczby.txt", "r");
	echo"<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj się!</a>]</p>';
	echo"Tutaj niedługo pojawią się jakieś wyniki</br>";
	$tekst=fread($licz,100);
	echo $tekst;
	echo"</br>lub</br>";
?>

</body>
</html>