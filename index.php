<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blackjack Personal Vaporizer | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>PV</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Blackjack </b>PV</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGASI UTAMA</li>
            <li>
              <a href="beli-barang.php">
                <i class="fa fa-shopping-basket"></i> <span>Beli Barang</span>
              </a>
            </li>
            <li>
              <a href="jual-barang.php">
                <i class="fa fa-tag"></i> <span>Jual Barang</span>
              </a>
            </li>
            <li>
              <a href="migrasi-alokasi.php">
                <i class="fa fa-share-alt"></i> <span>Migrasi Alokasi</span>
              </a>
            </li>
            <li>
              <a href="migrasi-kas.php">
                <i class="fa fa-money"></i> <span>Migrasi Kas</span>
              </a>
            </li>
            <li>
              <a href="penyesuaian-kas.php">
                <i class="fa fa-balance-scale"></i> <span>Penyesuaian Kas</span>
              </a>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-plus-circle"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pemasukkan</span>
                  <span class="info-box-number"><small>Rp </small>1,000,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-minus-circle"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pengeluaran</span>
                  <span class="info-box-number"><small>Rp </small>1,000,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">

              <!-- TABLE: PEMBELIAN TERAKHIR -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pembelian Terakhir</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>ID Pembelian</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Tanggal Pembelian</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>OR9842</td>
                          <td>Call of Duty IV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR1848</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR1848</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR9842</td>
                          <td>Call of Duty IV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="beli-barang.php" class="btn btn-sm btn-info btn-flat pull-left">Tambah Pembelian Baru</a>
                  <a href="pembelian.php" class="btn btn-sm btn-default btn-flat pull-right">Tampilkan Seluruh Pembelian</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">

              <!-- TABLE: PENJUALAN TERAKHIR -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Penjualan Terakhir</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>ID Penjualan</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Tanggal Penjualan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>OR9842</td>
                          <td>Call of Duty IV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR1848</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR1848</td>
                          <td>Samsung Smart TV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR7429</td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                        <tr>
                          <td>OR9842</td>
                          <td>Call of Duty IV</td>
                          <td><span class="info-box-number"><small>Rp </small>1,000,000</span></td>
                          <td>8 April 2015</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="jual-barang.php" class="btn btn-sm btn-info btn-flat pull-left">Tambah Penjualan Baru</a>
                  <a href="penjualan.php" class="btn btn-sm btn-default btn-flat pull-right">Tampilkan Seluruh Penjualan</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
