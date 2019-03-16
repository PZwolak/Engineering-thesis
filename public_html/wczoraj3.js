function wczoraj3()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/dziala3.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var wartosci = []
			var wartosci2 = []
			
			wartosci.push(data[0]);
			wartosci.push(data[1]);
			wartosci.push(data[2]);
			wartosci.push(data[3]);
			wartosci.push(data[4]);
			wartosci.push(data[5]);
			wartosci.push(data[6]);
			wartosci.push(data[7]);
			wartosci.push(data[8]);
			wartosci.push(data[9]);
			wartosci.push(data[10]);
			wartosci.push(data[11]);
			wartosci.push(data[12]);
			wartosci.push(data[13]);
			wartosci.push(data[14]);
			wartosci.push(data[15]);
			wartosci.push(data[16]);
			wartosci.push(data[17]);
			wartosci.push(data[18]);
			wartosci.push(data[19]);
			wartosci.push(data[20]);
			wartosci.push(data[21]);
			wartosci.push(data[22]);
			wartosci.push(data[23]);
			wartosci.push(data[24]);
			wartosci2.push(data[25]);
			wartosci2.push(data[26]);
			wartosci2.push(data[27]);
			wartosci2.push(data[28]);
			wartosci2.push(data[29]);
			wartosci2.push(data[30]);
			wartosci2.push(data[31]);
			wartosci2.push(data[32]);
			wartosci2.push(data[33]);
			wartosci2.push(data[34]);
			wartosci2.push(data[35]);
			wartosci2.push(data[36]);
			wartosci2.push(data[37]);
			wartosci2.push(data[38]);
			wartosci2.push(data[39]);
			wartosci2.push(data[40]);
			wartosci2.push(data[41]);
			wartosci2.push(data[42]);
			wartosci2.push(data[43]);
			wartosci2.push(data[44]);
			wartosci2.push(data[45]);
			wartosci2.push(data[46]);
			wartosci2.push(data[47]);
			wartosci2.push(data[48]);
			wartosci2.push(data[49]);

			

			var chartdata = {
				labels: ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "24:00"],
				datasets : [
					{
						label: "Temperatura [°C] z czujnika BMP180",
						borderColor : 'rgba(250,196,110, 0.7)',
						pointBorderColor : 'rgba(250,196,110, 1)',
						borderWidth : 4,
						//kolor tla i legendy
						fill: true, //czy wypelnic zbior
						backgroundColor : 'rgba(250,196,110, 0.2)', //wplywa tez na kolor w legendzie
						//ustawienia punktu
						pointRadius : 5,
						pointBorderWidth : 3,
						pointBackgroundColor : 'rgba(255,255,255,1)',
						//ustawienia punktu hover
						pointHoverRadius: 4,
						pointHoverBorderWidth: 3,
						pointHoverBackgroundColor : 'rgba(90,255,255,1)',
						pointHoverBorderColor : 'rgba(70,115,87, 1)',
						data: wartosci
					},
					
					{
					label: "Temperatura [°C] z czujnika DHT21",
						borderColor : 'rgba(0,0,0, 0.7)',
						pointBorderColor : 'rgba(0,0,0, 1)',
						borderWidth : 4,
						fill: true,
						backgroundColor : 'rgba(0,0,0, 0.2)',
						pointRadius : 5,
						pointBorderWidth : 3,
						pointBackgroundColor : 'rgba(255,255,255,1)',
						pointHoverRadius: 4,
						pointHoverBorderWidth: 3,
						pointHoverBackgroundColor : 'rgba(90,255,255,1)',
						pointHoverBorderColor : 'rgba(70,115,87, 1)',
						data: wartosci2
					}

				]
			};

			var ctx = $("#mycanvas3x");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
//setTimeout("wczoraj2()",5000);
}