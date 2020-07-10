<?php $this->load->view('v2/include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Object Detection</h3>
            </div>
            <div class="card-body">
              <table id="table_kategori" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Object Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <th>Car</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $this->load->view('v2/include/footer'); ?>