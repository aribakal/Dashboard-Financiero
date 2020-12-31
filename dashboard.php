<?php
  require 'conn/conexion.php';
  require 'conn/consulta.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<script>

//setInterval(function(){ document.reload(); }, 3000);
</script>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/lastenia.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Lastenia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ariel Bakal</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Example 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Example 2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Example 3</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php

        $EneTot = getDato( $conexion , 1 , 1 , 2020 );
        $FebTot = getDato( $conexion , 1 , 2 , 2020 );
        $MarTot = getDato( $conexion , 1 , 3 , 2020 );
        $AbrTot = getDato( $conexion , 1 , 4 , 2020 );
        $MayTot = getDato( $conexion , 1 , 5 , 2020 );
        $JunTot = getDato( $conexion , 1 , 6 , 2020 );
        $JulTot = getDato( $conexion , 1 , 7 , 2020 );
        $AgoTot = getDato( $conexion , 1 , 8 , 2020 );
        $SepTot = getDato( $conexion , 1 , 9 , 2020 );
        $OctTot = getDato( $conexion , 1 , 10 , 2020 );
        $NovTot = getDato( $conexion , 1 , 11 , 2020 );
        $DicTot = getDato( $conexion , 1 , 12 , 2020 );


    ?>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- DATA A START -->
        <div class="row">
          <div class="col-lg-3 col-12">
            <div class="small-box bg-info">
              <div class="inner">

                <h3>$ <?php echo number_format( $EneTot["total"] , 0 , "," , "." ) ?></h3>
                <h4><?php echo $EneTot["cantidad"] ?> sells</h4>
                <br><?php $avg= $EneTot["total"] / $EneTot["cantidad"] ?>
                <h6>$<?php echo number_format( $avg , 0 , "," , "." )?>/sell</h6>
                <br>

                <div class="btn-group" data-toggle="tab">
                  <button type="button" class="btn btn-default btn-md" data-toggle="tab">All-time</button>
                  <button type="button" class="btn btn-default btn-md" data-toggle="tab">Year</button>
                  <button type="button" class="btn btn-default btn-md" data-toggle="tab">Month</button>
                </div>
              </div>
            </div>
          </div>
          <!-- DATA A END -->
          <!-- Graph A START -->
          <div class="col-lg-9 col-12">
            <div class="card card-info card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title"><i class="far fa-chart-bar"></i> Sales</h3></li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">All-time</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Year</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Month</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    1
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                    <div class="graph">
                      <!-- Graph A START -->
                      <div id="Graph_A">
                      <canvas id="Year" height="100"></canvas>
                      <script>
                        var ctx = document.getElementById('Year');
                        var myChart = new Chart(ctx, {
                          type: 'line',
                          data: {
                              labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                              datasets: [{
                                  label: 'Total recaudado',
                                  backgroundColor: [
                                      'rgba(0, 0, 0, 0)'
                                  ],
                                  borderColor: [
                                      'rgba(0, 145, 171, 1)'
                                  ],
                                  pointBackgroundColor: [
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)',
                                    'rgba(0, 145, 171, 1)'
                                  ],
                                  borderWidth: 2,
                                  pointRadius: 3.5,
                                  data: [<?php echo $EneTot["total"]?>,
                                  <?php echo $EneTot["total"]?>,
                                  <?php echo $FebTot["total"]?>,
                                  <?php echo $MarTot["total"]?>,
                                  <?php echo $AbrTot["total"]?>,
                                  <?php echo $JunTot["total"]?>,
                                  <?php echo $JulTot["total"]?>,
                                  <?php echo $AgoTot["total"]?>,
                                  <?php echo $SepTot["total"]?>,
                                  <?php echo $OctTot["total"]?>,
                                  <?php echo $NovTot["total"]?>,
                                  <?php echo $DicTot["total"]?>]
                              }]
                            },

                            options: {
                              scales: {
                                  yAxes: [{
                                      ticks: {
                                          beginAtZero: true
                                      }
                                  }]
                              }
                            }
                        });
                      </script>
                      </div>
                      <!-- Graph A END -->
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                    3
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
            <!-- Graph A END -->

            </section>
            <!-- Graph B/C START -->
            <section class="content">
            <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-12">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="far fa-chart-bar"></i>
                      Sales
                    </h3>
                    <div class="card-tools">
                      <div class="form-group">
                          <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                              <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                              <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </script>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart"
                           style="position: relative; height: 300px;">
                          <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                       </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
                  <!-- /.card-footer-->
                </div>
              </section>
              <!-- Graph B/C END -->
          <!-- start Data B/C -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- start Data B -->
                <div class="col-lg-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-calendar-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">DATA 1</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                  </div>
                </div>
                <!-- end Data B -->
                <!-- start Data C -->
                <div class="col-lg-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-calendar-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">DATA 2</span>
                      <span class="info-box-number">1,410</span>
                    </div>
                  </div>
                </div>
                <!-- end Data C -->
                </div>
            </div>
          </section>
          <!-- end Data B/C -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->ç
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>

$(function () {
    $('#datetimepicker1').datetimepicker({
        viewMode: 'years',
        format: 'MM/YYYY'
    })
    $('#datetimepicker2').datetimepicker({
        viewMode: 'years',
        format: 'MM/YYYY'
    });

});

</script>

</body>
</html>
