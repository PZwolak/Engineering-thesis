function wykres1()
{
$(document).ready(function(){
	$.ajax({
		url: "http://student.agh.edu.pl/~pzwolak/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var coto = [];
			var wartosci = []

			coto.push(data[0]);
			wartosci.push(data[0]);

			var chartdata = {
				labels: coto,
				datasets : [
					{
						label: 'Natężenie światła',
						backgroundColor: 'rgba(63, 21, 90, 0.9)',
						borderColor: 'rgba(0, 0, 0, 1)',
						hoverBackgroundColor: 'rgba(0, 0, 0, 1)',
						hoverBorderColor: 'rgba(0, 0, 0, 1)',
						data: wartosci
					}
				]
			};


			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});

		},
		error: function(data) {
			console.log(data);
		}

	});

}
);
setTimeout("wykres1()",5000);
}