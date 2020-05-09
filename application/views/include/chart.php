var config = {
		type: 'line',
		data: {
			labels: <?php echo (isset($label) ? "" : json_encode($label)) ?>,
			datasets: [{
				label: 'Orang',
				backgroundColor: 'rgb(255, 102, 102)',
				borderColor: 'rgb(255, 102, 102)',
				data: <?php echo ($jumlah_manusia == null ? "" : json_encode($jumlah_manusia)) ?>,
				fill: false,
			},
			{
				label: 'Sepeda',
				backgroundColor: 'rgb(255, 178, 102)',
				borderColor: 'rgb(255, 178, 102)',
				data: <?php echo ($jumlah_sepeda == null ? "" : json_encode($jumlah_sepeda)) ?>,
				fill: false,
			},
			{
				label: 'Mobil',
				backgroundColor: 'rgb(255, 255, 102)',
				borderColor: 'rgb(255, 255, 102)',
				data: <?php echo ($jumlah_mobil == null ? "" : json_encode($jumlah_mobil)) ?>,
				fill: false,
			},
			{
				label: 'Motor',
				backgroundColor: 'rgb(178, 255, 102)',
				borderColor: 'rgb(178, 255, 102)',
				data: <?php echo ($jumlah_motor == null ? "" : json_encode($jumlah_motor)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Volume Data'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Tanggal'
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Value'
					}
				}]
			}
		}
	};

	window.onload = function() {
		var ctx = document.getElementById('canvas').getContext('2d');
		window.myLine = new Chart(ctx, config);
	};