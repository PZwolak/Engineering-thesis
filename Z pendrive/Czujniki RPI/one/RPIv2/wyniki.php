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
	echo"</br></br>";
	

?>

<?php
	
	$pol = mysqli_connect("localhost","root","","rpidb");
	if(mysqli_connect_errno())
	{
		echo 'Błąd wczytywania bazy'.$mysqli_connect_error();
	}
	$luux="SELECT * FROM luxsecond";
	$tabela=mysqli_query($pol, $luux); 
	$wywolaj=mysqli_fetch_assoc($tabela);
	echo $wywolaj['lux'];
	#$mysqli = new mysqli("localhost","root","","rpidb");
	#if ($mysqli->connect_errno!=0)
	#{
	#	echo "Error: ".$mysqli->connect_errno;
	#}
	
	
	#$swiatlo=mysql_query("SELECT * FROM luxsecond")
	#or die('Błąd');
	
	#while($a=mysql_fetch_assoc($wynik))
	#{
	#	echo $a['hour'];
	#}

?>

</body>
</html>