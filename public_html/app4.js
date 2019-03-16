function wykres4()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []

			coto.push(data[3]);
			wartosci.push(data[3]);

			var chartdata = {
				labels: coto,
				datasets : [
					{
						label: 'Temperatura(BPH180)',
						backgroundColor: 'rgba(50, 150, 250, 0.9)',
						borderColor: 'rgba(0, 0, 0, 1)',
						hoverBackgroundColor: 'rgba(0, 0, 0, 1)',
						hoverBorderColor: 'rgba(0, 0, 0, 1)',
						data: wartosci
					}
				]
			};

			var ctx = $("#mycanvas4");

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
setTimeout("wykres4()",5000);
}