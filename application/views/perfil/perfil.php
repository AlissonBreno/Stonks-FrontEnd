  <!-- Begin Page Content -->
  <div class="container-fluid">

  	<div id='pc_carregando' class='col-lg-12 text-center' style="display:none"><i class='fa fa-cog fa-5x fa-spin'></i></div>

    <!-- Page Heading -->
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo; ?></h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-cog fa-sm text-white-50"></i> Editar Perfil</a>
    </div>

    <div class="row">
      <div class="col-md-6 pr-1">
        <div class="card mb-4 py-5 shadow" style="min-height: 355px;">
          <div class="card-body" style="display: flex">
            <div class="col-md-4">
              <img src="<?=base_url()?>assets/img/user.png" style="border-radius: 50%" alt="perfil">
            </div>
            <div class="col-md-8">
              <h5>ALISSON GOULART</h5>
              <hr style="margin-top: -2%">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="display: flex;">
        <div class="col-md-6 p-0">
          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase">ECONOMIZADO</div>
                    <div class="h4 mb-0 font-weight-bold text-success">
                      <sup class="text-xs">R$</sup>350,00
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase">TOTAL GASTO</div>
                    <div class="h4 mb-0 font-weight-bold text-danger">
                      <sup class="text-xs">R$</sup>350,00
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase">Balanço - Maio</div>
                    <div class="h4 mb-0 font-weight-bold text-primary">
                      <sup class="text-xs">R$</sup>350,00
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-0">
          <div class="card shadow">
            <div class="card-body">
              <div class="chart-pie pt-4">
                <div id='pc_carregando' class='col-lg-12 text-center' style="display: none;"><i class='fa fa-cog fa-5x fa-spin'></i></div>
                <canvas id="myPieChart"></canvas>
              </div>
              <div class="mt-3 text-center small">
                <span class="mr-2">
                  <i class="fas fa-circle text-primary"></i> Tipo 1
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-success"></i> Tipo 2
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-info"></i> Tipo 3
                </span>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="card mb-4 py-4 shadow" style="min-height: 410px;">
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <!-- Project Card Example -->
        <div class="card shadow mb-4 py-4" style="min-height: 410px;">
          <div class="card-body">
            <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->