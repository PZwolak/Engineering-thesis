<?php
	session_start();
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8">
	<title>Przenośny robot pobierający informacje o warunkach atmosferycznych</title>
	<meta name="description" content="Dzięki tej stronie dowiesz się jakie panują warunki atmosferyczne w okolicy.">
	<meta name="keywords" content="Raspberry Pi 3, pogoda, warunki atmosferyczne, informatyka">
	<meta name="author" content="Patryk Zwolak">
	
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
	<div class="div1" background color="#deeeee">
	</br>
	<p>Witaj, trafiłeś na stronę internetową gdzie znajdziesz wyniki pomiarów z okolic Podgórza Duchackiego.</br>
	Jeśli chcesz zobaczyć wyniki pomiarów zaloguj się jako uzytkownik/uzytkownik lub za pomocą otrzymanych danych.</p><br />
	
	<form action="zaloguj.php" method="post">
	
		<font size="5"> Login: <br /> <input type="text" name="login" /> <br /> 
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br /></font>
		<input type="submit" value="Zaloguj się" />
	
	</form>
	</div>
	
<?php
	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
?>

</body>
</html>