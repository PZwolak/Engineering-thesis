function wykres6()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []

			coto.push(data[5]);
			wartosci.push(data[5]);

			var chartdata = {
				labels: coto,
				datasets : [
					{
						label: 'Wilgotność',
						backgroundColor: 'rgba(200, 70, 180, 0.9)',
						borderColor: 'rgba(0, 0, 0, 1)',
						hoverBackgroundColor: 'rgba(0, 0, 0, 1)',
						hoverBorderColor: 'rgba(0, 0, 0, 1)',
						data: wartosci
					}
				]
			};

			var ctx = $("#mycanvas6");

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
setTimeout("wykres6()",5000);
}