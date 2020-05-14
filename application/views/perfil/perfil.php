  <!-- Begin Page Content -->
  <div class="container-fluid">

  	<div id='pc_carregando' class='col-lg-12 text-center' style="display:none"><i class='fa fa-cog fa-5x fa-spin'></i></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo ?></h1>

    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4 py-5 shadow">
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
      <div class="col-md-6" style="display: flex">
        <div class="col-md-6">
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
        <div class="col-md-6">
          <div class="card shadow">
            <div class="card-body">
              <div class="chart-pie pt-4 pb-2">
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
      <div class="col-md-6">
        <div class="card mb-4 py-4 shadow">
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->