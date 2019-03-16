function wczoraj2()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/dziala.php",
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
			

			var chartdata = {
				labels: ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00", "24:00"],
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

			var ctx = $("#mycanvas8");

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