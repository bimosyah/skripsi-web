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
			datasets: [
			{
				label: 'Car',
				backgroundColor: 'rgb(50, 78, 168)',
				borderColor: 'rgb(50, 78, 168)',
				data: <?php echo (!isset($jumlah_mobil) ? "[]" : json_encode($jumlah_mobil)) ?>,
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
						labelString: 'Data'
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
			datasets: [
			{
				label: 'Car',
				backgroundColor: 'rgb(50, 78, 168)',
				borderColor: 'rgb(50, 78, 168)',
				data: <?php echo (!isset($jumlah_mobil_menit10) ? "[]" : json_encode($jumlah_mobil_menit10)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Data in 08.10'
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
						labelString: 'Date'
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
			datasets: [
			{
				label: 'Car',
				backgroundColor: 'rgb(50, 78, 168)',
				borderColor: 'rgb(50, 78, 168)',
				data: <?php echo (!isset($jumlah_mobil_menit20) ? "[]" : json_encode($jumlah_mobil_menit20)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Data in 08.20'
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
						labelString: 'Date'
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
			datasets: [
			{
				label: 'Car',
				backgroundColor: 'rgb(50, 78, 168)',
				borderColor: 'rgb(50, 78, 168)',
				data: <?php echo (!isset($jumlah_mobil_menit30) ? "[]" : json_encode($jumlah_mobil_menit30)) ?>,
				fill: false,
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Data in 08.30'
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
						labelString: 'Date'
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
<?php ($this->uri->segment(1) == "peramalan" ? $this->load->view('v2/include/chart_forecast') : ""); ?>
</body>
</html>
