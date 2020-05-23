<div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Jam 08:10
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        <!-- Orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $alpha9['smoothing1'][$i]['person']; ?></td>
                <td><?php echo $alpha9['smoothing2'][$i]['person']; ?></td>
                <td><?php echo $alpha9['konstantaA'][$i]['person']; ?></td>
                <td><?php echo $alpha9['konstantaB'][$i]['person']; ?></td>
                <td><?php echo $alpha9['forecast'][$i]['person']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9['forecast'][7]['person']; ?></th>
          </tfoot>
        </table>  
        <br><br>

        <!-- Sepeda -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $alpha9['smoothing1'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9['smoothing2'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9['konstantaA'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9['konstantaB'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9['forecast'][$i]['bicycle']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9['forecast'][7]['bicycle']; ?></th>
          </tfoot>
        </table>
        <br><br>

        <!-- Mobil -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $alpha9['smoothing1'][$i]['car']; ?></td>
                <td><?php echo $alpha9['smoothing2'][$i]['car']; ?></td>
                <td><?php echo $alpha9['konstantaA'][$i]['car']; ?></td>
                <td><?php echo $alpha9['konstantaB'][$i]['car']; ?></td>
                <td><?php echo $alpha9['forecast'][$i]['car']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9['forecast'][7]['car']; ?></th>
          </tfoot>
        </table>

        <br><br>

        <!-- motor -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $alpha9['smoothing1'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9['smoothing2'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9['konstantaA'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9['konstantaB'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9['forecast'][$i]['motorbike']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9['forecast'][7]['motorbike']; ?></th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Jam 08:20
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <!-- Orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_20[$i]->tanggal ?></td>
                <td><?php echo $data_menit_20[$i]->jumlah_person ?></td>
                <td><?php echo $alpha9_2['smoothing1'][$i]['person']; ?></td>
                <td><?php echo $alpha9_2['smoothing2'][$i]['person']; ?></td>
                <td><?php echo $alpha9_2['konstantaA'][$i]['person']; ?></td>
                <td><?php echo $alpha9_2['konstantaB'][$i]['person']; ?></td>
                <td><?php echo $alpha9_2['forecast'][$i]['person']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_2['forecast'][7]['person']; ?></th>
          </tfoot>
        </table>  
        <br><br>

        <!-- Sepeda -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_20[$i]->tanggal ?></td>
                <td><?php echo $data_menit_20[$i]->jumlah_bicycle ?></td>
                <td><?php echo $alpha9_2['smoothing1'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_2['smoothing2'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_2['konstantaA'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_2['konstantaB'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_2['forecast'][$i]['bicycle']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_2['forecast'][7]['bicycle']; ?></th>
          </tfoot>
        </table>
        <br><br>

        <!-- Mobil -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_20[$i]->tanggal ?></td>
                <td><?php echo $data_menit_20[$i]->jumlah_car ?></td>
                <td><?php echo $alpha9_2['smoothing1'][$i]['car']; ?></td>
                <td><?php echo $alpha9_2['smoothing2'][$i]['car']; ?></td>
                <td><?php echo $alpha9_2['konstantaA'][$i]['car']; ?></td>
                <td><?php echo $alpha9_2['konstantaB'][$i]['car']; ?></td>
                <td><?php echo $alpha9_2['forecast'][$i]['car']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_2['forecast'][7]['car']; ?></th>
          </tfoot>
        </table>

        <br><br>

        <!-- motor -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_20[$i]->tanggal ?></td>
                <td><?php echo $data_menit_20[$i]->jumlah_motorbike ?></td>
                <td><?php echo $alpha9_2['smoothing1'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_2['smoothing2'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_2['konstantaA'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_2['konstantaB'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_2['forecast'][$i]['motorbike']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_2['forecast'][7]['motorbike']; ?></th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Jam 08:30
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <!-- Orang -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_30[$i]->tanggal ?></td>
                <td><?php echo $data_menit_30[$i]->jumlah_person ?></td>
                <td><?php echo $alpha9_3['smoothing1'][$i]['person']; ?></td>
                <td><?php echo $alpha9_3['smoothing2'][$i]['person']; ?></td>
                <td><?php echo $alpha9_3['konstantaA'][$i]['person']; ?></td>
                <td><?php echo $alpha9_3['konstantaB'][$i]['person']; ?></td>
                <td><?php echo $alpha9_3['forecast'][$i]['person']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_3['forecast'][7]['person']; ?></th>
          </tfoot>
        </table>  
        <br><br>

        <!-- Sepeda -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_30[$i]->tanggal ?></td>
                <td><?php echo $data_menit_30[$i]->jumlah_bicycle ?></td>
                <td><?php echo $alpha9_3['smoothing1'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_3['smoothing2'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_3['konstantaA'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_3['konstantaB'][$i]['bicycle']; ?></td>
                <td><?php echo $alpha9_3['forecast'][$i]['bicycle']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_3['forecast'][7]['bicycle']; ?></th>
          </tfoot>
        </table>
        <br><br>

        <!-- Mobil -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_30[$i]->tanggal ?></td>
                <td><?php echo $data_menit_30[$i]->jumlah_car ?></td>
                <td><?php echo $alpha9_3['smoothing1'][$i]['car']; ?></td>
                <td><?php echo $alpha9_3['smoothing2'][$i]['car']; ?></td>
                <td><?php echo $alpha9_3['konstantaA'][$i]['car']; ?></td>
                <td><?php echo $alpha9_3['konstantaB'][$i]['car']; ?></td>
                <td><?php echo $alpha9_3['forecast'][$i]['car']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_3['forecast'][7]['car']; ?></th>
          </tfoot>
        </table>

        <br><br>

        <!-- motor -->
        <table id="table_peramalan_detail" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Alpha</th>
              <th>0.9</th>
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
                <td><?php echo $data_menit_30[$i]->tanggal ?></td>
                <td><?php echo $data_menit_30[$i]->jumlah_motorbike ?></td>
                <td><?php echo $alpha9_3['smoothing1'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_3['smoothing2'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_3['konstantaA'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_3['konstantaB'][$i]['motorbike']; ?></td>
                <td><?php echo $alpha9_3['forecast'][$i]['motorbike']; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
          <tfoot>
            <th colspan="6" style="text-align: right;">Hasil Peramalan hari berikutnya dengan alpha 0,9 = </th>
            <th><?php echo $alpha9_3['forecast'][7]['motorbike']; ?></th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

</div>