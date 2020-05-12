<div class="row">
	<div class="col-lg-6">
		<h3 style="font-size: 17px">Orang</h3>
		<table id="table_peramalan_detail" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Alpha</th>
					<th>Peramalan</th>
					<th>APE</th>
					<th>MAPE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result_forecast as $value): ?>
					<tr>
						<td><?php echo $value['alpha'] ?></td>
						<td><?php echo $value['forecast'][0]['person'] ?></td>
						<td>X</td>
						<td>X</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6">
		<h3 style="font-size: 17px">Sepeda</h3>
		<table id="table_peramalan_detail" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Alpha</th>
					<th>Peramalan</th>
					<th>APE</th>
					<th>MAPE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result_forecast as $value): ?>
					<tr>
						<td><?php echo $value['alpha'] ?></td>
						<td><?php echo $value['forecast'][0]['bicycle'] ?></td>
						<td>X</td>
						<td>X</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-6">
		<h3 style="font-size: 17px">Mobil</h3>
		<table id="table_peramalan_detail" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Alpha</th>
					<th>Peramalan</th>
					<th>APE</th>
					<th>MAPE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result_forecast as $value): ?>
					<tr>
						<td><?php echo $value['alpha'] ?></td>
						<td><?php echo $value['forecast'][0]['car'] ?></td>
						<td>X</td>
						<td>X</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<div class="col-lg-6">
		<h3 style="font-size: 17px">Motor</h3>
		<table id="table_peramalan_detail" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Alpha</th>
					<th>Peramalan</th>
					<th>APE</th>
					<th>MAPE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result_forecast as $value): ?>
					<tr>
						<td><?php echo $value['alpha'] ?></td>
						<td><?php echo $value['forecast'][0]['motorbike'] ?></td>
						<td>X</td>
						<td>X</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>