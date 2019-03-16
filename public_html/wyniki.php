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
    <script>
            setInterval(function(){
                $.ajax({url: "aktualne.php", success: function(response){
                    $('$wywolaj2['cis']').html(response)
                }});
            }, 1000);
    </script>
	
	<meta charset="utf-8">
	<title>Opracowanie, budowa oraz implementacja systemu 
pobieraj?cego oraz analizuj?cego podstawowe informacje o 
warunkach atmosferycznyc</title>
	<meta name="description" content="Dzięki tej stronie dowiesz się jakie panują warunki atmosferyczne w okolicy.">
	<meta name="keywords" content="Raspberry Pi 3, pogoda, warunki atmosferyczne, informatyka">
	<meta name="author" content="Patryk Zwolak">
	
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	
</head>

<body onload="wykres1(); wykres2(); wykres3(); wykres4(); wykres5(); wykres6(); aktualne();">
	<header> 
		<h1 class="logo">Opracowanie, budowa oraz 
implementacja systemu pobieraj?cego oraz analizuj?cego podstawowe 
informacje o warunkach atmosferycznych</h1>
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
						<h1>
<?php
echo"".$_SESSION['user']
?>
						witaj na stronie z moimi pomiarami.</h1>
						<p>Znajdziesz tutaj informacje o pomiarach z okolic Kurdwanowa Nowego. Temperatura, ciśnienie, natężenie światła, wilgotność
						z aktualnej chwili, sprzed kilku dni, tygodni oraz miesięcy przedstawione w postaci prostych wykresów.</p></br></br>
					</header>
			</section>

			<section>

	<div class="chart-container">
		<canvas id="mycanvas2"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app2.js"></script>
	</div>
	
	<div class="chart-container">
		<canvas id="mycanvas"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app.js"></script>
		
	</div>
	
	<div class="chart-container">
		<canvas id="mycanvas3"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app3.js"></script>
	</div>

	<div class="chart-container">
		<canvas id="mycanvas4"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app4.js"></script>
	</div>
	
	<div class="chart-container">
		<canvas id="mycanvas5"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app5.js"></script>
	</div>
	
	<div class="chart-container">
		<canvas id="mycanvas6"></canvas>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="Chart.js"></script>
		<script type="text/javascript" src="app6.js"></script></br></br>
	</div>
	
			</section>
			<section>
			
<div class="div2">
<?php
include 'aktualne.php';
?>
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
