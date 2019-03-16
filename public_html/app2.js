function wykres2()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []

			coto.push(data[1]);
			wartosci.push(data[1]);

			var chartdata = {
				labels: coto,
				datasets : [
					{
						label: 'Ciśnienie',
						backgroundColor: 'rgba(0, 0, 0, 0.9)',
						borderColor: 'rgba(0, 0, 0, 1)',
						hoverBackgroundColor: 'rgba(0, 0, 0, 1)',
						hoverBorderColor: 'rgba(0, 0, 0, 1)',
						data: wartosci
					}
				]
			};

			var ctx = $("#mycanvas2");

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
setTimeout("wykres2()",5000);
}