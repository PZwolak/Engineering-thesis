<?php
	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<script src="Chart.js"></script>
	<script src="jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Przenośny robot pobierający informacje o warunkach atmosferycznych</title>
	<meta name="description" content="Dzięki tej stronie dowiesz się jakie panują warunki atmosferyczne w okolicy.">
	<meta name="keywords" content="Raspberry Pi 3, pogoda, warunki atmosferyczne, informatyka">
	<meta name="author" content="Patryk Zwolak">
	
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	
</head>

<body onload="tydzien1(); tydzien2(); tydzien3(); tydzien4();">
	<header> 
		<h1 class="logo">Przenośny robot pobierający informacje o warunkach atmosferycznych</h1>
		<nav>
			<ul class="menu">
			<li><a href="wyniki.php">Strona główna</a></li>
			<li><a href="wyniki.php">Aktualne</a></li>
			<li><a href="wczoraj.php">Dzienne</a></li>
			<li><a href="tydzien.php">Tygodniowe</a></li>
			<li><a href="#">Miesięczne</a></li>
			<li><a href="#">
<?php
	echo'<a href="logout.php">Wyloguj się!</a>';
?></a></li>
			</ul>
		</nav>
	</header>


	<main>
	<div class="div1">
		<article>
		
			<section>
					<header>
						<h1>Tygodniowe pomiary</h1>
						<p>Znajdziesz tutaj informacje o pomiarach z okolic Kurdwanowa Nowego. Temperatura, ciśnienie, natężenie światła, wilgotność
						z aktualnej chwili, sprzed kilku dni, tygodni oraz miesięcy przedstawione w postaci prostych wykresów.</br></br>
						Jeśli chcesz zobaczyć wcześniejsze wyniki wpisz np: 3 (wyświetli się wykres z 3 dniowym przenunięciem wstecz). 
						<form method="post" action="tydzien.php">
						Podaj dzień: <input type="text" name="id">
						<input type="submit" value="Zobacz wykres"></br></br><hr></br>
						<h1>Poniższe wyniki z dnia: 
<?php
$pole = @$_POST['id'] ;
//echo $pole ;
$plik_nazwa = 'dane1a.txt';
$wynik = fopen($plik_nazwa, 'r+');
fputs($wynik,$pole);
$plik_nazwa = 'dane2a.txt';
$wynik = fopen($plik_nazwa, 'r+');
fputs($wynik,$pole);
$plik_nazwa = 'dane3a.txt';
$wynik = fopen($plik_nazwa, 'r+');
fputs($wynik,$pole);
$plik_nazwa = 'dane4a.txt';
$wynik = fopen($plik_nazwa, 'r+');
fputs($wynik,$pole);
fclose($wynik); 
$czas = time();
if($pole!=0)
{
$czas = time();
$czass = time();
$z1=0;
$z2=0;
$z1=86400*$pole;
$z2=86400*$pole+604800;
//echo $z1;
//echo $z2;
$czas = $czas - $z1;
$czass = $czass - $z2;
$czas = date('Y-m-d', $czas);
$czass = date('Y-m-d', $czass);
echo $czass;
echo " - ";
echo $czas;
}
else
{
$czas = time();
$czass = time();
$z1=0;
$z2=0;
$z1=86400;
$z2=86400+604800;
//echo $z1;
//echo $z2;
$czas = $czas - $z1;
$czass = $czass - $z2;
$czas = date('Y-m-d', $czas);
$czass = date('Y-m-d', $czass);
echo $czass;
echo " - ";
echo $czas;
}
	
?> 
</p></h1>
						</form>
					</header>
			</section>

			<section>
				<!--<div class="chart-container">
				<canvas id="myChart" width="200" height="200"></canvas>
				<script src="wczoraj.js"></script>
				</div>-->
		<div >
		<canvas id="tydzien1"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="tydzien1.js"></script></br></br>
		</div>
		
		<div >
		<canvas id="tydzien2"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="tydzien2.js"></script></br></br>
		</div>
		
		<div >
		<canvas id="tydzien3"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="tydzien3.js"></script></br></br>
		</div>
		
		<div >
		<canvas id="tydzien4"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="tydzien4.js"></script></br></br>
		</div>
			</section>
		
			</article>



</div>
	</main>
<footer>
<div class="div1">
<p>Wszelkie prawa zastrzeżone &copy; 2017 Dziękuję za zainteresowanie!</p>
</div>
</footer>



</body>
</html>