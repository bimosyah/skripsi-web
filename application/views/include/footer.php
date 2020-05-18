</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<!-- page script -->
<script>
	$(function () {
		$("#table_kategori").DataTable();
		$("#table_data_deteksi").DataTable();
		$('#table_peramalan_detail').dataTable( {
			"lengthChange": false,
			"searching": false,
			"info": false,
			"bPaginate": false,
			"ordering": false
		});

	});

	var config = {
		type: 'line',
		data: {
			labels: <?php echo (!isset($label) ? "[]" : json_encode($label)) ?>,
			datasets: [{
				label: 'Orang',
				backgroundColor: 'rgb(255, 102, 102)',
				borderColor: 'rgb(255, 102, 102)',
				data: <?php echo (!isset($jumlah_manusia) ? "[]" : json_encode($jumlah_manusia)) ?>,
				fill: false,
			},
			{
				label: 'Sepeda',
				backgroundColor: 'rgb(255, 178, 102)',
				borderColor: 'rgb(255, 178, 102)',
				data: <?php echo (!isset($jumlah_sepeda) ? "[]" : json_encode($jumlah_sepeda)) ?>,
				fill: false,
			},
			{
				label: 'Mobil',
				backgroundColor: 'rgb(255, 255, 102)',
				borderColor: 'rgb(255, 255, 102)',
				data: <?php echo (!isset($jumlah_mobil) ? "[]" : json_encode($jumlah_mobil)) ?>,
				fill: false,
			},
			{
				label: 'Motor',
				backgroundColor: 'rgb(178, 255, 102)',
				borderColor: 'rgb(178, 255, 102)',
				data: <?php echo (!isset($jumlah_motor) ? "[]" : json_encode($jumlah_motor)) ?>,
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

	//menit10
	var config1 = {
		type: 'bar',
		data: {
			labels: <?php echo (!isset($label_menit10) ? "[]" : json_encode($label_menit10)) ?>,
			datasets: [{
				label: 'Orang',
				backgroundColor: 'rgb(255, 102, 102)',
				borderColor: 'rgb(255, 102, 102)',
				data: <?php echo (!isset($jumlah_manusia_menit10) ? "[]" : json_encode($jumlah_manusia_menit10)) ?>,
				fill: false,
			},
			{
				label: 'Sepeda',
				backgroundColor: 'rgb(255, 178, 102)',
				borderColor: 'rgb(255, 178, 102)',
				data: <?php echo (!isset($jumlah_sepeda_menit10) ? "[]" : json_encode($jumlah_sepeda_menit10)) ?>,
				fill: false,
			},
			{
				label: 'Mobil',
				backgroundColor: 'rgb(255, 255, 102)',
				borderColor: 'rgb(255, 255, 102)',
				data: <?php echo (!isset($jumlah_mobil_menit10) ? "[]" : json_encode($jumlah_mobil_menit10)) ?>,
				fill: false,
			},
			{
				label: 'Motor',
				backgroundColor: 'rgb(178, 255, 102)',
				borderColor: 'rgb(178, 255, 102)',
				data: <?php echo (!isset($jumlah_motor_menit10) ? "[]" : json_encode($jumlah_motor_menit10)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Volume Data Jam 08.10'
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

	//menit20
	var config2 = {
		type: 'bar',
		data: {
			labels: <?php echo (!isset($label_menit20) ? "[]" : json_encode($label_menit20)) ?>,
			datasets: [{
				label: 'Orang',
				backgroundColor: 'rgb(255, 102, 102)',
				borderColor: 'rgb(255, 102, 102)',
				data: <?php echo (!isset($jumlah_manusia_menit20) ? "[]" : json_encode($jumlah_manusia_menit20)) ?>,
				fill: false,
			},
			{
				label: 'Sepeda',
				backgroundColor: 'rgb(255, 178, 102)',
				borderColor: 'rgb(255, 178, 102)',
				data: <?php echo (!isset($jumlah_sepeda_menit20) ? "[]" : json_encode($jumlah_sepeda_menit20)) ?>,
				fill: false,
			},
			{
				label: 'Mobil',
				backgroundColor: 'rgb(255, 255, 102)',
				borderColor: 'rgb(255, 255, 102)',
				data: <?php echo (!isset($jumlah_mobil_menit20) ? "[]" : json_encode($jumlah_mobil_menit20)) ?>,
				fill: false,
			},
			{
				label: 'Motor',
				backgroundColor: 'rgb(178, 255, 102)',
				borderColor: 'rgb(178, 255, 102)',
				data: <?php echo (!isset($jumlah_motor_menit20) ? "[]" : json_encode($jumlah_motor_menit20)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Volume Data Jam 08.20'
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

	//menit30
	var config3 = {
		type: 'bar',
		data: {
			labels: <?php echo (!isset($label_menit30) ? "[]" : json_encode($label_menit30)) ?>,
			datasets: [{
				label: 'Orang',
				backgroundColor: 'rgb(255, 102, 102)',
				borderColor: 'rgb(255, 102, 102)',
				data: <?php echo (!isset($jumlah_manusia_menit30) ? "[]" : json_encode($jumlah_manusia_menit30)) ?>,
				fill: false,
			},
			{
				label: 'Sepeda',
				backgroundColor: 'rgb(255, 178, 102)',
				borderColor: 'rgb(255, 178, 102)',
				data: <?php echo (!isset($jumlah_sepeda_menit30) ? "[]" : json_encode($jumlah_sepeda_menit30)) ?>,
				fill: false,
			},
			{
				label: 'Mobil',
				backgroundColor: 'rgb(255, 255, 102)',
				borderColor: 'rgb(255, 255, 102)',
				data: <?php echo (!isset($jumlah_mobil_menit30) ? "[]" : json_encode($jumlah_mobil_menit30)) ?>,
				fill: false,
			},
			{
				label: 'Motor',
				backgroundColor: 'rgb(178, 255, 102)',
				borderColor: 'rgb(178, 255, 102)',
				data: <?php echo (!isset($jumlah_motor_menit30) ? "[]" : json_encode($jumlah_motor_menit30)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Volume Data Jam 08.30'
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
		var ctx1 = document.getElementById('canvas1').getContext('2d');
		window.myLine1 = new Chart(ctx1, config1);
		var ctx2 = document.getElementById('canvas2').getContext('2d');
		window.myLine2 = new Chart(ctx2, config2);
		var ctx3 = document.getElementById('canvas3').getContext('2d');
		window.myLine3 = new Chart(ctx3, config3);

	};

</script>

</body>
</html>
