function tydzien1()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/tydzien1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []
			
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

		
			

			var chartdata = {
				labels: ["0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21","0", "3", "6", "9", "12", "15", "18", "21"],
				datasets : [
					{
						label: "Natężenie światła [lx]",
						borderColor : 'rgba(70,70,60, 0.7)',
						pointBorderColor : 'rgba(70,70,60, 1)',
						borderWidth : 5,
						//kolor tla i legendy
						fill: true, //czy wypelnic zbior
						backgroundColor : 'rgba(70,70,60, 0.2)', //wplywa tez na kolor w legendzie
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
					}
				]
			};

			var ctx = $("#tydzien1");

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