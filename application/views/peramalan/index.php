<?php $this->load->view('include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Hasil Peramalan</h3>
            </div>
            <div class="card-body">
              <?php //$this->load->view('peramalan/mape'); ?>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Detail Peramalan</h3>
            </div>
            <div class="card-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="a1-tab" data-toggle="tab" href="#a1" role="tab" aria-controls="a1" aria-selected="true">Alpha 0.1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a2-tab" data-toggle="tab" href="#a2" role="tab" aria-controls="a2" aria-selected="false">Alpha 0.2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a3-tab" data-toggle="tab" href="#a3" role="tab" aria-controls="a3" aria-selected="false">Alpha 0.3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a4-tab" data-toggle="tab" href="#a4" role="tab" aria-controls="a4" aria-selected="false">Alpha 0.4</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a5-tab" data-toggle="tab" href="#a5" role="tab" aria-controls="a5" aria-selected="false">Alpha 0.5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a6-tab" data-toggle="tab" href="#a6" role="tab" aria-controls="a6" aria-selected="false">Alpha 0.6</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a7-tab" data-toggle="tab" href="#a7" role="tab" aria-controls="a7" aria-selected="false">Alpha 0.7</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a8-tab" data-toggle="tab" href="#a8" role="tab" aria-controls="a8" aria-selected="false">Alpha 0.8</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a9-tab" data-toggle="tab" href="#a9" role="tab" aria-controls="a9" aria-selected="false">Alpha 0.9</a>
                </li>

              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="a1" role="tabpanel" aria-labelledby="a1-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha1'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a2" role="tabpanel" aria-labelledby="a2-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha2'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a3" role="tabpanel" aria-labelledby="a3-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha3'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a4" role="tabpanel" aria-labelledby="a4-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha4'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a5" role="tabpanel" aria-labelledby="a5-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha5'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a6" role="tabpanel" aria-labelledby="a6-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha6'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a7" role="tabpanel" aria-labelledby="a7-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha7'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a8" role="tabpanel" aria-labelledby="a8-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha8'); ?>
                  </div>
                </div>
                <div class="tab-pane" id="a9" role="tabpanel" aria-labelledby="a9-tab">
                  <br>
                  <div class="col-lg-8">
                    <?php $this->load->view('peramalan/alpha9'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $this->load->view('include/footer'); ?>