<?php
	$pol = mysqli_connect('mysql.agh.edu.pl','pzwolak','9T3nyfDmV2bPoeRK','pzwolak');
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
	
	//echo 'LUX: '.$wywolaj['lux'].'</br>';
	//echo 'hPa: '.$wywolaj2['cis'].'</br>';
	//echo 'Wysokość: '.$wywolaj2['alt'].'</br>';
	//echo 'Temp1: '.$wywolaj2['temp1'].'</br>';
	//echo 'Temp2: '.$wywolaj3['temp2'].'</br>';
	//echo 'RH: '.$wywolaj3['wilg'].'</br></br>';
?>

<table width='250' border='3' cellspacing='1' cellpadding='3' align='center'>
	<tr>
		<td>Natężenie światła: </td><td> <?=$wywolaj['lux'];?></td>
	</tr>
	<tr>
		<td>Ciścienie: </td><td> <?=$wywolaj2['cis'];?></td>
	</tr>
	<tr>
		<td>Wysokość: </td><td> <?=$wywolaj2['alt'];?></td>
	</tr>
	<tr>
		<td>Temperatura(BMP180): </td><td> <?=$wywolaj2['temp1'];?></td>
	</tr>
	<tr>
		<td>Temperatura(DHT21): </td><td> <?=$wywolaj3['temp2'];?></td>
	</tr>
	<tr>
		<td>Wilgotność: </td><td> <?=$wywolaj3['wilg'];?></td>
	</tr>
	
	</table>