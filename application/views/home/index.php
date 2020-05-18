<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Grafik Volume Data</h3>
            </div>
            <div class="card-body">
              <canvas id="canvas"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Grafik Volume Berdasarkan Waktu</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <canvas id="canvas1"></canvas>
                </div>
                <br>
                <div class="col-lg-8">
                  <canvas id="canvas2"></canvas>
                </div>
                <br>
                <div class="col-lg-8">
                  <canvas id="canvas3"></canvas>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('include/footer'); ?>