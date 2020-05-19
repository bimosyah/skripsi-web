<!-- Orang -->
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Alpha</th>
      <th>0.1</th>
      <th colspan="5" style="text-align: center;">Orang</th>
    </tr>
    <tr>
      <th>Tanggal</th>
      <th>Volume Y(t)</th>
      <th>S1 (S't)</th>
      <th>S2 (S''t)</th>
      <th>Nilai At</th>
      <th>Nilai Bt</th>
      <th>Peramalan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for ($i = 0; $i < 7; $i++): ?>
      <tr>
        <td><?php echo $data_menit_10[$i]->tanggal ?></td>
        <td><?php echo $data_menit_10[$i]->jumlah_person ?></td>
        <td><?php echo $alpha1['smoothing1'][$i]['person']; ?></td>
        <td><?php echo $alpha1['smoothing2'][$i]['person']; ?></td>
        <td><?php echo $alpha1['konstantaA'][$i]['person']; ?></td>
        <td><?php echo $alpha1['konstantaB'][$i]['person']; ?></td>
        <td><?php echo $alpha1['forecast'][$i]['person']; ?></td>
      </tr>
    <?php endfor; ?>
  </tbody>
  <tfoot>
    <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,1 = </th>
    <th><?php echo $alpha1['forecast'][7]['person']; ?></th>
  </tfoot>
</table>  
<br><br>

<!-- Sepeda -->
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Alpha</th>
      <th>0.1</th>
      <th colspan="5" style="text-align: center;">Sepedah</th>
    </tr>
    <tr>
      <th>Tanggal</th>
      <th>Volume Y(t)</th>
      <th>S1 (S't)</th>
      <th>S2 (S''t)</th>
      <th>Nilai At</th>
      <th>Nilai Bt</th>
      <th>Peramalan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for ($i = 0; $i < 7; $i++): ?>
      <tr>
        <td><?php echo $data_menit_10[$i]->tanggal ?></td>
        <td><?php echo $data_menit_10[$i]->jumlah_bicycle ?></td>
        <td><?php echo $alpha1['smoothing1'][$i]['bicycle']; ?></td>
        <td><?php echo $alpha1['smoothing2'][$i]['bicycle']; ?></td>
        <td><?php echo $alpha1['konstantaA'][$i]['bicycle']; ?></td>
        <td><?php echo $alpha1['konstantaB'][$i]['bicycle']; ?></td>
        <td><?php echo $alpha1['forecast'][$i]['bicycle']; ?></td>
      </tr>
    <?php endfor; ?>
  </tbody>
  <tfoot>
    <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,1 = </th>
    <th><?php echo $alpha1['forecast'][7]['bicycle']; ?></th>
  </tfoot>
</table>
<br><br>

<!-- Mobil -->
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Alpha</th>
      <th>0.1</th>
      <th colspan="5" style="text-align: center;">Mobil</th>
    </tr>
    <tr>
      <th>Tanggal</th>
      <th>Volume Y(t)</th>
      <th>S1 (S't)</th>
      <th>S2 (S''t)</th>
      <th>Nilai At</th>
      <th>Nilai Bt</th>
      <th>Peramalan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for ($i = 0; $i < 7; $i++): ?>
      <tr>
        <td><?php echo $data_menit_10[$i]->tanggal ?></td>
        <td><?php echo $data_menit_10[$i]->jumlah_car ?></td>
        <td><?php echo $alpha1['smoothing1'][$i]['car']; ?></td>
        <td><?php echo $alpha1['smoothing2'][$i]['car']; ?></td>
        <td><?php echo $alpha1['konstantaA'][$i]['car']; ?></td>
        <td><?php echo $alpha1['konstantaB'][$i]['car']; ?></td>
        <td><?php echo $alpha1['forecast'][$i]['car']; ?></td>
      </tr>
    <?php endfor; ?>
  </tbody>
  <tfoot>
    <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,1 = </th>
    <th><?php echo $alpha1['forecast'][7]['car']; ?></th>
  </tfoot>
</table>

<br><br>

<!-- motor -->
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Alpha</th>
      <th>0.1</th>
      <th colspan="5" style="text-align: center;">Motor</th>
    </tr>
    <tr>
      <th>Tanggal</th>
      <th>Volume Y(t)</th>
      <th>S1 (S't)</th>
      <th>S2 (S''t)</th>
      <th>Nilai At</th>
      <th>Nilai Bt</th>
      <th>Peramalan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for ($i = 0; $i < 7; $i++): ?>
      <tr>
        <td><?php echo $data_menit_10[$i]->tanggal ?></td>
        <td><?php echo $data_menit_10[$i]->jumlah_motorbike ?></td>
        <td><?php echo $alpha1['smoothing1'][$i]['motorbike']; ?></td>
        <td><?php echo $alpha1['smoothing2'][$i]['motorbike']; ?></td>
        <td><?php echo $alpha1['konstantaA'][$i]['motorbike']; ?></td>
        <td><?php echo $alpha1['konstantaB'][$i]['motorbike']; ?></td>
        <td><?php echo $alpha1['forecast'][$i]['motorbike']; ?></td>
      </tr>
    <?php endfor; ?>
  </tbody>
  <tfoot>
    <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,1 = </th>
    <th><?php echo $alpha1['forecast'][7]['motorbike']; ?></th>
  </tfoot>
</table>

<hr><hr><hr>
<!-- motor -->
<table id="table_peramalan_detail" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th rowspan="2" style="text-align: center;">Tanggal</th>
      <th colspan="3" style="text-align: center;">ERROR Orang</th>
    </tr>
    <tr>
      <th>ERROR</th>
      <th>ABS(ERROR)</th>
      <th>PE</th>
    </tr>
  </thead>
  <tbody>
    <?php $total_pe = 0 ?>
    <?php for ($i = 0; $i < 7; $i++):?>
      <?php 
      $error = $data_menit_10[$i]->jumlah_person - $alpha1_error[$i]['person'];
      $abs_error = abs($error);
        $pe = ($abs_error/$data_menit_10[$i]->jumlah_person)*100;
        $total_pe += $pe ;
        $mape = $total_pe/7;
        ?>
        <tr>
          <td><?php echo $data_menit_10[$i]->tanggal ?>%</td>
          <td><?php echo $error?>%</td>
          <td><?php echo $abs_error?>%</td>
          <td><?php echo $pe?>%</td>
        </tr>
      <?php endfor; ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3" style="text-align: right;">JUMLAH PE</th>
        <th><?php echo $total_pe ?></th>
      </tr>
      <tr>
        <th colspan="3" style="text-align: right;">MAPE</th>
        <th><?php echo $mape ?></th>
      </tr>
    </tfoot>
  </table>