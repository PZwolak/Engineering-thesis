function tydzien3()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/tydzien3.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
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
			wartosci.push(data[25]);
			wartosci.push(data[26]);
			wartosci.push(data[27]);
			wartosci.push(data[28]);
			wartosci.push(data[29]);
			wartosci.push(data[30]);
			wartosci.push(data[31]);
			wartosci.push(data[32]);
			wartosci.push(data[33]);
			wartosci.push(data[34]);
			wartosci.push(data[35]);
			wartosci.push(data[36]);
			wartosci.push(data[37]);
			wartosci.push(data[38]);
			wartosci.push(data[39]);
			wartosci.push(data[40]);
			wartosci.push(data[41]);
			wartosci.push(data[42]);
			wartosci.push(data[43]);
			wartosci.push(data[44]);
			wartosci.push(data[45]);
			wartosci.push(data[46]);
			wartosci.push(data[47]);
			wartosci.push(data[48]);
			wartosci.push(data[49]);
			wartosci.push(data[50]);
			wartosci.push(data[51]);
			wartosci.push(data[52]);
			wartosci.push(data[53]);
			wartosci.push(data[54]);
			wartosci.push(data[55]);
			wartosci2.push(data[56]);
			wartosci2.push(data[57]);
			wartosci2.push(data[58]);
			wartosci2.push(data[59]);
			wartosci2.push(data[60]);
			wartosci2.push(data[61]);
			wartosci2.push(data[62]);
			wartosci2.push(data[63]);
			wartosci2.push(data[64]);
			wartosci2.push(data[65]);
			wartosci2.push(data[66]);
			wartosci2.push(data[67]);
			wartosci2.push(data[68]);
			wartosci2.push(data[69]);
			wartosci2.push(data[70]);
			wartosci2.push(data[71]);
			wartosci2.push(data[72]);
			wartosci2.push(data[73]);
			wartosci2.push(data[74]);
			wartosci2.push(data[75]);
			wartosci2.push(data[76]);
			wartosci2.push(data[77]);
			wartosci2.push(data[78]);
			wartosci2.push(data[79]);
			wartosci2.push(data[80]);
			wartosci2.push(data[81]);
			wartosci2.push(data[82]);
			wartosci2.push(data[83]);
			wartosci2.push(data[84]);
			wartosci2.push(data[85]);
			wartosci2.push(data[86]);
			wartosci2.push(data[87]);
			wartosci2.push(data[88]);
			wartosci2.push(data[89]);
			wartosci2.push(data[90]);
			wartosci2.push(data[91]);
			wartosci2.push(data[92]);
			wartosci2.push(data[93]);
			wartosci2.push(data[94]);
			wartosci2.push(data[95]);
			wartosci2.push(data[96]);
			wartosci2.push(data[97]);
			wartosci2.push(data[98]);
			wartosci2.push(data[99]);
			wartosci2.push(data[100]);
			wartosci2.push(data[101]);
			wartosci2.push(data[102]);
			wartosci2.push(data[103]);
			wartosci2.push(data[104]);
			wartosci2.push(data[105]);
			wartosci2.push(data[106]);
			wartosci2.push(data[107]);
			wartosci2.push(data[108]);
			wartosci2.push(data[109]);
			wartosci2.push(data[110]);
			wartosci2.push(data[111]);

		
			

			var chartdata = {
				labels: ["DZIEŃ  1", " ", "06:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 2", " ", "6:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 3", " ", "6:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 4", " ", "06:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 5", " ", "06:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 6", " ", "06:00", " ", "12:00", " ", "18:00", " ","DZIEŃ 7", " ", "6:00", " ", "12:00", "18:00", "", " "],
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

			var ctx = $("#tydzien3");

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