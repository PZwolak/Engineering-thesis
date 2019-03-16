function wykres5()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []

			coto.push(data[4]);
			wartosci.push(data[4]);

			var chartdata = {
				labels: coto,
				datasets : [
					{
						label: 'Temperatura(DHT21)',
						backgroundColor: 'rgba(90, 120, 170, 0.9)',
						borderColor: 'rgba(0, 0, 0, 1)',
						hoverBackgroundColor: 'rgba(0, 0, 0, 1)',
						hoverBorderColor: 'rgba(0, 0, 0, 1)',
						data: wartosci
					}
				]
			};

			var ctx = $("#mycanvas5");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
setTimeout("wykres5()",5000);
}