<script>
	var table_forecast = null;
	var chart_label = [];
	var chart_real = [];
	var chart_forecast = [];

	$(function () {
		$('#table_forecast').dataTable( {});
		$('#table_error').dataTable( {});

	});

	//forecast
	var forecast = {
		type: 'line',
		data: {
			labels: [],
			datasets: [{
				label: 'Forecast',
				backgroundColor: 'rgb(168, 78, 50)',
				borderColor: 'rgb(168, 78, 50)',
				data: [],
				fill: false,
			}, 
			{
				label: 'Real Data',
				data: [],
				backgroundColor: 'rgb(50, 78, 168)',
				borderColor: 'rgb(50, 78, 168)',
				fill: false,
			}
			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	};

	var ctx4 = document.getElementById('canvas_forecast').getContext('2d');
	chart = new Chart(ctx4, forecast);

	function getForecast(){
		var alpha = document.getElementById("alpha").value;
		if (alpha != 0) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('peramalan/calculation') ?>",
				data: { waktu: "<?php echo $this->uri->segment(2) ?>", alpha: alpha }
			}).done(function( msg ) {		
				var json = $.parseJSON(msg);
				$('#table_forecast').DataTable().destroy();
				$('#table_forecast').DataTable({
					"paging": false,
					"data": json.data,
					"dataSrc": "data",
					"columns": [
					{ data: "no" },
					{ data: "volume" },
					{ data: "smoothing1" },
					{ data: "smoothing2" },
					{ data: "at" },
					{ data: "bt" },
					{ data: "forecast" }
					]
				});

				document.getElementById("forecast_result").innerHTML = json.forecast;

				$('#table_error').DataTable().destroy();
				$('#table_error').dataTable({
					"paging": false,
					"data": json.error['error'],
					"dataSrc": "error",
					"columns": [
					{ data: "no" },
					{ data: "error" },
					{ data: "abs" },
					{ data: "pe" },
					]
				});
				document.getElementById("pe").innerHTML = json.error['pe'];
				document.getElementById("mape").innerHTML = json.error['mape'];


				chart_label = json.chart['label'];
				chart_real = json.chart['chart_real'];
				chart_forecast = json.chart['chart_forecast'];
				chart_forecast.shift()
				
				chart.data.labels = chart_label;
				chart.data.datasets[0].data = chart_forecast;
				chart.data.datasets[1].data = chart_real;
				chart.update();
			});
}
}


</script>