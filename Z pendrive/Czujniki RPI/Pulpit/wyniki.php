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

	<style>
	#pojemnik
	{
	background-image: url(img/WP3B9W3Q.jpg);
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover:
	background-size:cover;
	width:1366px;
	margin-left:auto;
	margin-right:auto;
	}
	#logo
	{
	background-image: url(img/pogoda.jpg);
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover:
	background-size:cover;
	width:1366px;
	text-align:center;
	padding:5px;
	}
	#nawigacja
	{
	float:left;
	background-color:lightblue;
	width:130px;
	min-height:1000px;
	padding:10px;
	}
	#srodek
	{
	float:left;
	
	padding:10px;
	width:990px;
	}
	#prawy
	{
	float:left;
	width:180px;
	min-height:1000px;
	padding:10px;
	background-color:lightblue;
	}
	#stopka
	{
	clear:both;
	background-color:lightgreen;
	text-align:center;
	padding:10px;
	}
	</style>
</head>

<body>
	<div id="pojemnik">

		<div id="logo">
		<h1>Robot poierajacy informacje o warunkach atmosferycznych</h1>
		</div>

		<div id="nawigacja">
<?php
	echo"<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj się!</a>]</p>';
	echo"I jak Ci się podobają moje wyniki:</br>";
	echo"</br></br>";
	

?>
		</div>

		<div id="srodek">
<?php
	header('refresh: 5;');

	$pol = mysqli_connect("localhost","root","nokia6630","RPIDB");
	if(mysqli_connect_errno())
	{
		echo 'Błąd wczytywania bazy'.$mysqli_connect_error();
	}
	$luux="SELECT * FROM luxsecond";
	$ciis="SELECT * FROM cissecond";
	$tiiw="SELECT * FROM tiwsecond";

	$tabela=mysqli_query($pol, $luux);
	$tabela2=mysqli_query($pol, $ciis);
	$tabela3=mysqli_query($pol, $tiiw); 
	
	$wywolaj=mysqli_fetch_assoc($tabela);
	$wywolaj2=mysqli_fetch_assoc($tabela2);
	$wywolaj3=mysqli_fetch_assoc($tabela3);

	
	echo 'Pomiar natężenia światła:   '.$wywolaj['lux'].' lux</br>';
	echo 'Pomiar cisnienia atmosferycznego:   '.$wywolaj2['cis'].' hPa</br>';
	echo 'Pomiar wysokości od poziomu morza:   '.$wywolaj2['alt'].' m</br>';
	echo 'Pomiar temperatury z czujnika cisnienia:   '.$wywolaj2['temp1'].' C</br>';
	echo 'Pomiar temperatury z drugiego czujnika:   '.$wywolaj3['temp2'].' C</br>';
	echo 'Pomiar wilgotności:   '.$wywolaj3['wilg'].' rh</br>';

	






	#$mysqli = new mysqli("localhost","root","","RPIDB");
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
		</div>

		<div id="prawy">
		MIEJSCE NA REKLAME
		</div>

		<div id="stopka">
		Informacje atmosferyczne &copy; Wszelkie prawa zastrzeżone
		</div>

	</div>




</body>
</html>
