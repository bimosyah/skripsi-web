<h3 style="font-size: 17px">Table Volume Data</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Tanggal</th>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($raw_data as $value): ?>
      <tr>
        <td><?php echo $value->tanggal ?></td>
        <td><?php echo $value->jumlah_person ?></td>
        <td><?php echo $value->jumlah_bicycle ?></td>
        <td><?php echo $value->jumlah_car ?></td>
        <td><?php echo $value->jumlah_motorbike ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br>
<h3 style="font-size: 17px">Smoothing 1</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>X</th>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($alpha4['smoothing1'] as $key => $value): ?>
      <tr>
        <td>s't <?php echo $i; ?></td>
        <td><?php echo $value['person'] ?></td>
        <td><?php echo $value['bicycle'] ?></td>
        <td><?php echo $value['car'] ?></td>
        <td><?php echo $value['motorbike'] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>

  </tbody>
</table>

<br>
<h3 style="font-size: 17px">Smoothing 2</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>X</th>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($alpha4['smoothing2'] as $key => $value): ?>
      <tr>
        <td>s''t <?php echo $i; ?></td>
        <td><?php echo $value['person'] ?></td>
        <td><?php echo $value['bicycle'] ?></td>
        <td><?php echo $value['car'] ?></td>
        <td><?php echo $value['motorbike'] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>

  </tbody>
</table>

<br>
<h3 style="font-size: 17px">Konstanta a</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>X</th>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($alpha4['konstantaA'] as $key => $value): ?>
      <tr>
        <td>a <?php echo $i; ?></td>
        <td><?php echo $value['person'] ?></td>
        <td><?php echo $value['bicycle'] ?></td>
        <td><?php echo $value['car'] ?></td>
        <td><?php echo $value['motorbike'] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>

  </tbody>
</table>

<br>
<h3 style="font-size: 17px">Konstanta b</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>X</th>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($alpha4['konstantaB'] as $key => $value): ?>
      <tr>
        <td>b <?php echo $i; ?></td>
        <td><?php echo $value['person'] ?></td>
        <td><?php echo $value['bicycle'] ?></td>
        <td><?php echo $value['car'] ?></td>
        <td><?php echo $value['motorbike'] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>

  </tbody>
</table>

<br>
<h3 style="font-size: 17px">Forecast</h3>
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Orang</th>
      <th>Sepeda</th>
      <th>Mobil</th>
      <th>Motor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($alpha4['forecast'] as $key => $value): ?>
      <tr>
        <td><?php echo $value['person'] ?></td>
        <td><?php echo $value['bicycle'] ?></td>
        <td><?php echo $value['car'] ?></td>
        <td><?php echo $value['motorbike'] ?></td>
      </tr>
    <?php endforeach ?>

  </tbody>
</table>