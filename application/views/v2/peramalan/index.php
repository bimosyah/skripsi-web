<?php $this->load->view('v2/include/header'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Alpha</h3>
            </div>
            <div class="card-body">
              <div class="">
                <div class="form-inline">
                  <label for="">Select Alpha :  </label> 
                  <select name="" id="alpha" class="form-control inline" style="margin-left: 20px" onchange="getForecast()">
                    <option value="">- select alpha-</option>
                    <?php 
                    for ($i = 1; $i <= 9; $i++): ?>
                      <option value="<?php echo "0.".$i ?>"><?php echo "0.".$i ?></option>
                    <?php endfor ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Forecasting</h3>
            </div>
            <div class="card-body">
              <table id="table_forecast" class="table table-bordered text-nowrap">
                <thead>
                  <th>No</th>
                  <th>Volume</th>
                  <th>S1</th>
                  <th>S2</th>
                  <th>At</th>
                  <th>Bt</th>
                  <th>Forecast</th>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <th colspan="6">Forecasting Result</th>
                  <th id="forecast_result"></th>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Mape</h3>
            </div>
            <div class="card-body">
              <table id="table_error" class="table table-bordered text-nowrap">
                <thead>
                  <th>No</th>
                  <th>Error</th>
                  <th>Abs(Error)</th>
                  <th>PE</th>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="3"> &Sigma;  PE</th>
                    <th id="pe"></th>
                  </tr>
                  <tr>
                    <th colspan="3"> MAPE</th>
                    <th id="mape"></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Graph</h3>
            </div>
            <div class="card-body">
              <canvas id="canvas_forecast"></canvas>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<?php $this->load->view('v2/include/footer'); ?>