<?php
//setting header to json
header('Content-Type: application/json');

define('DB_HOST', 'mysql.agh.edu.pl');
define('DB_USERNAME', 'pzwolak');
define('DB_PASSWORD', '9T3nyfDmV2bPoeRK');
define('DB_NAME', 'pzwolak');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

$plik_nazwa = 'dane4a.txt';
$wynik = fopen($plik_nazwa, 'r+');
$wynikgotowy = fread($wynik,filesize($plik_nazwa));
file_put_contents('dane4a.txt', '1');
fclose($wynik);
//echo($wynikgotowy);

$czas = time();
$czass = time();
$z1=0;
$z2=0;
$z1=86400*$wynikgotowy;
$z2=86400*$wynikgotowy+604800;
//echo $z1;
//echo $z2;
$czas = $czas - $z1;
$czass = $czass - $z2;
$czas = date('Y-m-d', $czas);
$czass = date('Y-m-d', $czass);
//echo $czass;
//echo "---";
//echo $czas;


$tiww="SELECT wilg FROM tiwsql WHERE date BETWEEN '{$czass}' AND '{$czas}'";

$tabela2=mysqli_query($mysqli, $tiww);
	
	$licznik=0;
	    while($row =mysqli_fetch_assoc($tabela2))
    {
        $tiw[] = (float)$row['wilg'];
		$licznik=$licznik+1;
    }
	$licznik2x=$licznik/56;
	
	$a=0;
	$b=0;
	$suma=0;
	$suma2=0;
	$k=0;
	$wynik=0;
	$test=0;
	for($i=0; $i<56;$i++)
	{	
		
		for($j=0; $j<$licznik2x; $j++)
		{
			$a=$tiw[$k+$j];
			$suma=$suma+1;
			$suma2=$suma2+$a;
		}
		
		$k=$k+$licznik2x;
		$wynik=$suma2/$suma;
		$data2[$i]=$wynik;
		$a=0;
		$suma=0;
		$suma2=0;
	}
	
	

//free memory associated with result
$tabela2->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data2);