<ul class="nav nav-tabs" id="myTab3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="mape1-tab" data-toggle="tab" href="#mape1" role="tab" aria-controls="mape1" aria-selected="true">8:10</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="mape2-tab" data-toggle="tab" href="#mape2" role="tab" aria-controls="mape2" aria-selected="true">8:20</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="mape3-tab" data-toggle="tab" href="#mape3" role="tab" aria-controls="mape3" aria-selected="true">8:30</a>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="mape1" role="tabpanel" aria-labelledby="mape1-tab">
		<br>
		<div class="col-lg-8">
			<table id="table_peramalan_detail" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ALPHA</th>
						<th>MAPE ORANG</th>
						<th>MAPE SEPEDA</th>
						<th>MAPE MOBIL</th>
						<th>MAPE MOTOR</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i = 0; $i < 9; $i++):?>
						<tr>
							<td>0.<?php echo $i+1; ?></td>
							<td <?php echo ($mape_10[$i]['person']['mape'] == $min_mape_menit_10['min_orang'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_10[$i]['person']['mape']; ?> %
							</td>
							<td <?php echo ($mape_10[$i]['bicycle']['mape'] == $min_mape_menit_10['min_sepeda'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_10[$i]['bicycle']['mape']; ?> %
							</td>
							<td <?php echo ($mape_10[$i]['car']['mape'] == $min_mape_menit_10['min_mobil'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_10[$i]['car']['mape']; ?> %
							</td>
							<td <?php echo ($mape_10[$i]['motorbike']['mape'] == $min_mape_menit_10['min_motor'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_10[$i]['motorbike']['mape']; ?> %
							</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="tab-pane" id="mape2" role="tabpanel" aria-labelledby="mape2-tab">
		<br>
		<div class="col-lg-8">
			<table id="table_peramalan_detail" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ALPHA</th>
						<th>MAPE ORANG</th>
						<th>MAPE SEPEDA</th>
						<th>MAPE MOBIL</th>
						<th>MAPE MOTOR</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i = 0; $i < 9; $i++):?>
						<tr>
							<td>0.<?php echo $i+1; ?></td>
							<td <?php echo ($mape_20[$i]['person']['mape'] == $min_mape_menit_20['min_orang'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_20[$i]['person']['mape']; ?> %
							</td>
							<td <?php echo ($mape_20[$i]['bicycle']['mape'] == $min_mape_menit_20['min_sepeda'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_20[$i]['bicycle']['mape']; ?> %
							</td>
							<td <?php echo ($mape_20[$i]['car']['mape'] == $min_mape_menit_20['min_mobil'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_20[$i]['car']['mape']; ?> %
							</td>
							<td <?php echo ($mape_20[$i]['motorbike']['mape'] == $min_mape_menit_20['min_motor'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_20[$i]['motorbike']['mape']; ?> %
							</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="tab-pane" id="mape3" role="tabpanel" aria-labelledby="mape3-tab">
		<br>
		<div class="col-lg-8">
			<table id="table_peramalan_detail" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ALPHA</th>
						<th>MAPE ORANG</th>
						<th>MAPE SEPEDA</th>
						<th>MAPE MOBIL</th>
						<th>MAPE MOTOR</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i = 0; $i < 9; $i++):?>
						<tr>
							<td>0.<?php echo $i+1; ?></td>
							<td <?php echo ($mape_30[$i]['person']['mape'] == $min_mape_menit_30['min_orang'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_30[$i]['person']['mape']; ?> %
							</td>
							<td <?php echo ($mape_30[$i]['bicycle']['mape'] == $min_mape_menit_30['min_sepeda'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_30[$i]['bicycle']['mape']; ?> %
							</td>
							<td <?php echo ($mape_30[$i]['car']['mape'] == $min_mape_menit_30['min_mobil'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_30[$i]['car']['mape']; ?> %
							</td>
							<td <?php echo ($mape_30[$i]['motorbike']['mape'] == $min_mape_menit_30['min_motor'] ? "style='background-color:#008000'" :"") ?>>
								<?php echo $mape_30[$i]['motorbike']['mape']; ?> %
							</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>