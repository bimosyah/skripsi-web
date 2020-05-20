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