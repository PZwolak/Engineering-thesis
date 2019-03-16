<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'mysql.agh.edu.pl');
define('DB_USERNAME', 'pzwolak');
define('DB_PASSWORD', '9T3nyfDmV2bPoeRK');
define('DB_NAME', 'pzwolak');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT lux FROM luxsecond");

//execute query
$result = $mysqli->query($query);

$luux="SELECT * FROM luxsecond";
$ciis="SELECT * FROM cissecond";
$tiiw="SELECT * FROM tiwsecond";

$tabela=mysqli_query($mysqli, $luux);
$tabela2=mysqli_query($mysqli, $ciis);
$tabela3=mysqli_query($mysqli, $tiiw); 
	
$wywolaj=mysqli_fetch_assoc($tabela);
$wywolaj2=mysqli_fetch_assoc($tabela2);
$wywolaj3=mysqli_fetch_assoc($tabela3);

//loop through the returned data
$data = array();
	$num = $wywolaj['lux'];
	$float1 = (float)$num;
	$data[] = $float1;
	$num = $wywolaj2['cis'];
	$float1 = (float)$num;
	$data[] = $float1;
	$num = $wywolaj2['alt'];
	$float1 = (float)$num;
	$data[] = $float1;
	$num = $wywolaj2['temp1'];
	$float1 = (float)$num;
	$data[] = $float1;
	$num = $wywolaj3['temp2'];
	$float1 = (float)$num;
	$data[] = $float1;
	$num = $wywolaj3['wilg'];
	$float1 = (float)$num;
	$data[] = $float1;


//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);