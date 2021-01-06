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
          <li class="nav-header">EJEMPLOS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Ejemplo 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Ejemplo 2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Ejemplo 3</p>
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

        // D/M/Y

        $TotD1 = getD_M_Y( $conexion, 1 , 1 , 8 , 2020 );$TotD2 = getD_M_Y( $conexion, 1 , 2 , 8 , 2020 );$TotD3 = getD_M_Y( $conexion, 1 , 3 , 8 , 2020 );
        $TotD4 = getD_M_Y( $conexion, 1 , 4 , 8 , 2020 );$TotD5 = getD_M_Y( $conexion, 1 , 5 , 8 , 2020 );$TotD6 = getD_M_Y( $conexion, 1 , 6 , 8 , 2020 );
        $TotD7 = getD_M_Y( $conexion, 1 , 7 , 8 , 2020 );$TotD8 = getD_M_Y( $conexion, 1 , 8 , 8 , 2020 );$TotD9 = getD_M_Y( $conexion, 1 , 9 , 8 , 2020 );
        $TotD10 = getD_M_Y( $conexion, 1 , 10 , 8 , 2020 );$TotD11 = getD_M_Y( $conexion, 1 , 11 , 8 , 2020 );$TotD12 = getD_M_Y( $conexion, 1 , 12 , 8 , 2020 );
        $TotD13 = getD_M_Y( $conexion, 1 , 13 , 8 , 2020 );$TotD14 = getD_M_Y( $conexion, 1 , 14 , 8 , 2020 );$TotD15 = getD_M_Y( $conexion, 1 , 15 , 8 , 2020 );
        $TotD16 = getD_M_Y( $conexion, 1 , 16 , 8 , 2020 );$TotD17 = getD_M_Y( $conexion, 1 , 17 , 8 , 2020 );$TotD18 = getD_M_Y( $conexion, 1 , 18 , 8 , 2020 );
        $TotD19 = getD_M_Y( $conexion, 1 , 19 , 8 , 2020 );$TotD20 = getD_M_Y( $conexion, 1 , 20 , 8 , 2020 );$TotD21 = getD_M_Y( $conexion, 1 , 21 , 8 , 2020 );
        $TotD22 = getD_M_Y( $conexion, 1 , 22 , 8 , 2020 );$TotD23 = getD_M_Y( $conexion, 1 , 23 , 8 , 2020 );$TotD24 = getD_M_Y( $conexion, 1 , 24 , 8 , 2020 );
        $TotD25 = getD_M_Y( $conexion, 1 , 25 , 8 , 2020 );$TotD26 = getD_M_Y( $conexion, 1 , 26 , 8 , 2020 );$TotD27 = getD_M_Y( $conexion, 1 , 27 , 8 , 2020 );
        $TotD28 = getD_M_Y( $conexion, 1 , 28 , 8 , 2020 );$TotD29 = getD_M_Y( $conexion, 1 , 29 , 8 , 2020 );$TotD30 = getD_M_Y( $conexion, 1 , 30 , 8 , 2020 );
        $TotD31 = getD_M_Y( $conexion, 1 , 31 , 8 , 2020 );

        // M/Y
        $EneTot = getM_Y( $conexion , 1 , 1 , 2020 );$FebTot = getM_Y( $conexion , 1 , 2 , 2020 );$MarTot = getM_Y( $conexion , 1 , 3 , 2020 );$AbrTot = getM_Y( $conexion , 1 , 4 , 2020 );
        $MayTot = getM_Y( $conexion , 1 , 5 , 2020 );$JunTot = getM_Y( $conexion , 1 , 6 , 2020 );$JulTot = getM_Y( $conexion , 1 , 7 , 2020 );$AgoTot = getM_Y( $conexion , 1 , 8 , 2020 );
        $SepTot = getM_Y( $conexion , 1 , 9 , 2020 );$OctTot = getM_Y( $conexion , 1 , 10 , 2020 );$NovTot = getM_Y( $conexion , 1 , 11 , 2020 );$DicTot = getM_Y( $conexion , 1 , 12 , 2020 );

        // Y
        $Tot2012 = getY( $conexion, 1, 2012);$Tot2013 = getY( $conexion, 1, 2013);$Tot2014 = getY( $conexion, 1, 2014);$Tot2015 = getY( $conexion, 1, 2015);$Tot2016 = getY( $conexion, 1, 2016);
        $Tot2017 = getY( $conexion, 1, 2017);$Tot2018 = getY( $conexion, 1, 2018);$Tot2019 = getY( $conexion, 1, 2019);$Tot2020 = getY( $conexion, 1, 2020);$Tot2021 = getY( $conexion, 1, 2021);


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
                <h4><?php echo $EneTot["cantidad"] ?> ventas</h4>
                <br><?php $avg= $EneTot["total"] / $EneTot["cantidad"] ?>
                <h6>$<?php echo number_format( $avg , 0 , "," , "." )?>/venta</h6>

              </div>
            </div>
          </div>
          <!-- DATA A END -->
          <!-- Graph A START -->
          <div class="col-lg-9 col-12">
            <div class="card card-info card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title"><i class="far fa-chart-bar"></i> Ventas</h3></li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Máx.</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Año</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Mes</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <div class="graph">
                      <canvas id="all_time" height="170"></canvas>
                      <script>
                        var ctx = document.getElementById('all_time');
                        var myChart = new Chart(ctx, {
                          type: 'line',
                          data: {
                              labels: ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
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
                                  data: [<?php echo $Tot2012["total"]?>,
                                  <?php echo $Tot2013["total"]?>,
                                  <?php echo $Tot2014["total"]?>,
                                  <?php echo $Tot2015["total"]?>,
                                  <?php echo $Tot2016["total"]?>,
                                  <?php echo $Tot2017["total"]?>,
                                  <?php echo $Tot2018["total"]?>,
                                  <?php echo $Tot2019["total"]?>,
                                  <?php echo $Tot2020["total"]?>,
                                  <?php echo $Tot2021["total"]?>]
                              }]
                            },

                            options: {
                              scales: {
                                yAxes: [{
                                  ticks: {
                                    beginAtZero: true
                                  }
                                }]
                              },
                              title: {
                                display: true,
                                text: 'Histórico de ventas (inflación acumulada aprox. 300%)',
                                padding: 4
                              },
                              legend: {
                                display: true,
                                position: 'bottom'
                              },
                              tooltips: {
                                callbacks: {
                                  label: function(tooltipItem, data) {
                                    return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                                  }
                                }
                              }
                            }
                        });
                      </script>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                    <div class="graph">
                      <!-- Graph A START -->
                      <div id="Graph_A">
                      <canvas id="Year" height="170"></canvas>
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
                              },
                              title: {
                                display: true,
                                text: 'Histórico último año (2020)',
                                padding: 4
                              },
                              legend: {
                                display: true,
                                position: 'bottom'
                              },
                              tooltips: {
                                callbacks: {
                                  label: function(tooltipItem, data) {
                                    return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                                  }
                                }
                              }
                            }
                        });
                      </script>
                    </div>
                      <!-- Graph A END -->
                  </div>
                  </div>
                  <div class="tab-pane fade show active" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                    <div class="graph">
                      <canvas id="month" height="170"></canvas>
                      <script>
                        var ctx = document.getElementById('month');
                        var myChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
                              '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
                              '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
                              datasets: [{
                                  label: 'Total recaudado',
                                  backgroundColor: [
                                      'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                      , 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                      , 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)' , 'rgba(0, 145, 171, 1)'
                                  ],
                                  borderColor: [
                                      'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                      , 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                      , 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                  ],
                                  borderWidth: 2,
                                  pointRadius: 3.5,
                                  data: [<?php echo $TotD1["total"]?>, <?php echo $TotD2["total"]?>, <?php echo $TotD3["total"]?>, <?php echo $TotD4["total"]?>, <?php echo $TotD5["total"]?>
                                  , <?php echo $TotD6["total"]?>, <?php echo $TotD7["total"]?>, <?php echo $TotD8["total"]?>, <?php echo $TotD9["total"]?>, <?php echo $TotD10["total"]?>
                                  , <?php echo $TotD11["total"]?>, <?php echo $TotD12["total"]?>, <?php echo $TotD13["total"]?>, <?php echo $TotD14["total"]?>, <?php echo $TotD15["total"]?>
                                  , <?php echo $TotD16["total"]?>, <?php echo $TotD17["total"]?>, <?php echo $TotD18["total"]?>, <?php echo $TotD19["total"]?>, <?php echo $TotD20["total"]?>
                                  , <?php echo $TotD21["total"]?>, <?php echo $TotD22["total"]?>, <?php echo $TotD23["total"]?>, <?php echo $TotD24["total"]?>, <?php echo $TotD25["total"]?>
                                  , <?php echo $TotD26["total"]?>, <?php echo $TotD27["total"]?>, <?php echo $TotD28["total"]?>, <?php echo $TotD29["total"]?>, <?php echo $TotD30["total"]?>, <?php echo $TotD31["total"]?>]
                                }]
                            },

                            options: {
                              scales: {
                                yAxes: [{
                                  ticks: {
                                    beginAtZero: true
                                  }
                                }]
                              },
                              title: {
                                display: true,
                                text: 'Ventas último mes (Agosto)',
                                padding: 4
                              },
                              legend: {
                                display: true,
                                position: 'bottom'
                              },
                              tooltips: {
                                callbacks: {
                                  label: function(tooltipItem, data) {
                                    return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                                  }
                                }
                              }

                            }
                        });
                      </script>
                  </div>
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
                      Ventas
                    </h3>
                    <div class="card-tools">
                      <div class="form-group">
                          <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                              <h4>1:</h4>
                              <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                              <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                              <h4>2:</h4>
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
                      <div class="graph">
                        <canvas id="CompareGraph" height="100"></canvas>
                        <script>
                          var ctx = document.getElementById('CompareGraph');
                          var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                              labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
                              '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
                              '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
                                datasets: [{
                                    label: 'Fecha 1',
                                    backgroundColor: [
                                        'rgba(0, 0, 0, 0)'
                                    ],
                                    borderColor: [
                                        'rgba(0, 145, 171, 1)'
                                    ],
                                    pointBackgroundColor: [
                                      'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)',
                                      'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)',
                                      'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)', 'rgba(0, 145, 171, 1)'
                                    ],
                                    borderWidth: 2,
                                    pointRadius: 3.5,
                                    data: [54923,90234,170394,256000,276830,256041,245041,239411,179344,123459,98529,78943,110920,130489,160394,170821,175911,168191,110292,80128,50482,40598,64179,67912,69811,71629,60912,58190,56921,53841,51908]
                                }, {
                                  label: 'Fecha 2',
                                  backgroundColor: [
                                      'rgba(0, 0, 0, 0)'
                                  ],
                                  borderColor: [
                                      'rgba(224, 31, 9, 1)'
                                  ],
                                  pointBackgroundColor: [
                                    'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)',
                                    'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)',
                                    'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)', 'rgba(224, 31, 9, 1)'
                                  ],
                                  borderWidth: 2,
                                  pointRadius: 3.5,
                                  data: [254671,124535,94243,82354,87345,78432,63123,86512,126313,150453,183120,123456,78654,65453,54234,32145,12465,34542,54786,65472,75421,64532,54632,44564,35432,32476,31434,32531,25453,18343,11321]
                                }]
                              },

                              options: {
                                scales: {
                                  yAxes: [{
                                    ticks: {
                                      beginAtZero: true
                                    }
                                  }]
                                },
                                title: {
                                  display: true,
                                  text: 'Gráfico comparativo',
                                  padding: 4
                                },
                                legend: {
                                  display: true,
                                  position: 'bottom'
                                },
                                tooltips: {
                                  callbacks: {
                                    label: function(tooltipItem, data) {
                                      return tooltipItem.yLabel.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                                    }
                                  }
                                }
                              }
                          });
                        </script>
                        </div>
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
                    <span class="info-box-icon bg-info"><i class="far">1</i></span>
                    <div class="info-box-content">
                      <span class="info-box-number">
                        <h4 style="display: inline">$7,365,921 </h4>
                        <h5 style="display: inline">| 61 ventas</h5>
                        <br>
                        <h6>$120,725.80/venta</h6>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- end Data B -->
                <!-- start Data C -->
                <div class="col-lg-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far">2</i></span>
                    <div class="info-box-content">
                      <span class="info-box-number">
                        <h4 style="display: inline">$4,593,321 </h4>
                        <h5 style="display: inline">| 45 ventas</h5>
                        <br>
                        <h6>$102,073.80/venta</h6>
                      </span>
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
  <!-- /.content-wrapper -->
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
