<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Jumlah Data Deteksi</h3>
            </div>
            <div class="card-body">
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
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Data Deteksi</h3>
            </div>
            <div class="card-body">
              <table id="table_data_deteksi" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>jumlah_person</th>
                    <th>jumlah_bicycle</th>
                    <th>jumlah_car</th>
                    <th>jumlah_motorbike</th>
                    <th>timestamp</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($data_deteksi as $value): ?>
                    <tr>
                      <th><?php echo $no ?></th>
                      <th><?php echo $value->jumlah_person ?></th>
                      <th><?php echo $value->jumlah_bicycle ?></th>
                      <th><?php echo $value->jumlah_car ?></th>
                      <th><?php echo $value->jumlah_motorbike ?></th>
                      <th><?php echo $value->timestamp ?></th>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $this->load->view('include/footer'); ?>