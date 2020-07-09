<div id="accordion2">
  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapse1">
        08:10
      </a>
    </div>
    <div id="collapse1" class="collapse" data-parent="#accordion2">
      <div class="card-body">

        <!-- orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Person</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1['person']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1['person']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1['person']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1['person']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1['person']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error sepeda-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Bicycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1['bicycle']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1['bicycle']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1['bicycle']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1['bicycle']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1['bicycle']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error mobil-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Car</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1['car']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1['car']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1['car']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1['car']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1['car']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!-- Error MOTOR -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Motorcycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1['motorbike']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1['motorbike']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1['motorbike']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1['motorbike']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1['motorbike']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapse2">
        08:20
      </a>
    </div>
    <div id="collapse2" class="collapse" data-parent="#accordion2">
      <div class="card-body">

        <!-- orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Person</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_2['person']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_2['person']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_2['person']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_2['person']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_2['person']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error sepeda-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Bicycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_2['bicycle']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_2['bicycle']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_2['bicycle']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_2['bicycle']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_2['bicycle']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error mobil-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Car</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_2['car']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_2['car']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_2['car']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_2['car']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_2['car']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!-- Error MOTOR -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Motorcycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_2['motorbike']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_2['motorbike']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_2['motorbike']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_2['motorbike']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_2['motorbike']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapse3">
        08:30
      </a>
    </div>
    <div id="collapse3" class="collapse" data-parent="#accordion2">
      <div class="card-body">

        <!-- orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Person</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_3['person']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_3['person']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_3['person']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_3['person']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_3['person']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error sepeda-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Bicycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_3['bicycle']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_3['bicycle']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_3['bicycle']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_3['bicycle']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_3['bicycle']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!--error mobil-->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Car</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_3['car']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_3['car']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_3['car']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_3['car']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_3['car']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>
        <br><br>
        
        <!-- Error MOTOR -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2" style="text-align: center;">Date</th>
              <th colspan="3" style="text-align: center;">ERROR Motorcycle</th>
            </tr>
            <tr>
              <th>ERROR</th>
              <th>ABS(ERROR)</th>
              <th>PE</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 7; $i++) :?>
              <tr>
                <td><?php echo $data_menit_10[$i]->tanggal ?></td>
                <td><?php echo $error_alpha1_3['motorbike']['data'][$i]['error'] ?></td>
                <td><?php echo $error_alpha1_3['motorbike']['data'][$i]['abs'] ?></td>
                <td><?php echo $error_alpha1_3['motorbike']['data'][$i]['pe'] ?>%</td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" style="text-align: right;">&Sigma; PE</th>
              <th><?php echo $error_alpha1_3['motorbike']['jumlah_pe'] ?>%</th>
            </tr>
            <tr>
              <th colspan="3" style="text-align: right;">MAPE</th>
              <th><?php echo $error_alpha1_3['motorbike']['mape'] ?>%</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>
</div>