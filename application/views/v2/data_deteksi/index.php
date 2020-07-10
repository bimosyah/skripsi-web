<?php $this->load->view('v2/include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Detection Data</h3>
            </div>
            <div class="card-body">
              <table id="table_peramalan_detail" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Time 8:10</th>
                    <th>Time 8:20</th>
                    <th>Time 8:30</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_deteksi as $value): ?>
                    <tr>
                      <td><?php echo $value->id ?></td>
                      <td><?php echo $value->waktu1 ?></td>
                      <td><?php echo $value->waktu2 ?></td>
                      <td><?php echo $value->waktu3 ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $this->load->view('v2/include/footer'); ?>