<!--Counter Inbox-->
<?php
    error_reporting(0);
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'images/logo1.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <?php
        /* Mengambil query report*/
        foreach($visitor as $result){
            $bulan[] = $result->tgl; //ambil bulan
            $value[] = (float) $result->jumlah; //ambil nilai
        }
        /* end mengambil query*/

    ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--Header-->
  <?php
    $this->load->view('admin/v_header');
  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="active">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>KANAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-"></i> BERITA</a></li>
            <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-"></i> GALERI</a></li>
            <li><a href="<?php echo base_url().'admin/aswaja'?>"><i class="fa fa-"></i> KeASWAJAAN</a></li>
            <li><a href="<?php echo base_url().'admin/pesantren'?>"><i class="fa fa-"></i> PESANTREN</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>TENTANG NU CANDI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/sejarah'?>"><i class="fa fa-"></i>SEJARAH NU</a></li>
            <li><a href="<?php echo base_url().'admin/datayayasan'?>"><i class="fa fa-"></i>KANTOR</a></li>
            <li><a href="<?php echo base_url().'admin/pengurus'?>"><i class="fa fa-"></i>PENGURUS</a></li>
            <li><a href="<?php echo base_url().'admin/tokoh'?>"><i class="fa fa-"></i>TOKOH</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>LEMBAGA NU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/aswajanucenter'?>"><i class="fa fa-"></i>ASWAJA NU CENTER</a></li>
            <li><a href="<?php echo base_url().'admin/laziznu'?>"><i class="fa fa-"></i>LAZIZNU</a></li>
            <li><a href="<?php echo base_url().'admin/ldnu'?>"><i class="fa fa-"></i> LDNU</a></li>
            <li><a href="<?php echo base_url().'admin/lknu'?>"><i class="fa fa-"></i> LKNU</a></li>
            <li><a href="<?php echo base_url().'admin/lakpesdam'?>"><i class="fa fa-"></i> LAKPESDAM</a></li>
            <li><a href="<?php echo base_url().'admin/lbmnu'?>"><i class="fa fa-"></i> LBMNU</a></li>
            <li><a href="<?php echo base_url().'admin/lesbumi'?>"><i class="fa fa-"></i> LESBUMI</a></li>
            <li><a href="<?php echo base_url().'admin/ltnu'?>"><i class="fa fa-"></i> LTNU</a></li>
            <li><a href="<?php echo base_url().'admin/lkknu'?>"><i class="fa fa-"></i> LKKNU</a></li>
            <li><a href="<?php echo base_url().'admin/lpmaarifnu'?>"><i class="fa fa-"></i> LP MAARIF NU</a></li>
            <li><a href="<?php echo base_url().'admin/lpbhnu'?>"><i class="fa fa-"></i> LPBHNU</a></li>
            <li><a href="<?php echo base_url().'admin/lpbinu'?>"><i class="fa fa-"></i> LPBINU</a></li>
            <li><a href="<?php echo base_url().'admin/lpnu'?>"><i class="fa fa-"></i> LPNU</a></li>
            <li><a href="<?php echo base_url().'admin/lppnu'?>"><i class="fa fa-"></i> LPPNU</a></li>
            <li><a href="<?php echo base_url().'admin/lptnu'?>"><i class="fa fa-"></i> LPTNU</a></li>
            <li><a href="<?php echo base_url().'admin/ltmnu'?>"><i class="fa fa-"></i> LTMNU</a></li>
            <li><a href="<?php echo base_url().'admin/ltnnu'?>"><i class="fa fa-"></i> LTNNU</a></li>
            <li><a href="<?php echo base_url().'admin/lwpnu'?>"><i class="fa fa-"></i> LWPNU</a></li>
            <li><a href="<?php echo base_url().'admin/rminu'?>"><i class="fa fa-"></i> RMI-NU</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>BADAN OTONOM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/ansor'?>"><i class="fa fa-"></i> GP ANSOR</a></li>
            <li><a href="<?php echo base_url().'admin/fatayat'?>"><i class="fa fa-"></i> FATAYAT</a></li>
            <li><a href="<?php echo base_url().'admin/muslimat'?>"><i class="fa fa-"></i> MUSLIMAT</a></li>
            <li><a href="<?php echo base_url().'admin/ipnu'?>"><i class="fa fa-"></i> IPNU-IPPNU</a></li>
            <li><a href="<?php echo base_url().'admin/pagarnusa'?>"><i class="fa fa-"></i> PAGAR NUSA</a></li>
            <li><a href="<?php echo base_url().'admin/ishari'?>"><i class="fa fa-"></i> ISHARI</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>RANTING</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/rantingsepande'?>"><i class="fa fa-"></i>Ranting Sepande</a></li>
            <li><a href="<?php echo base_url().'admin/rantingsumokali'?>"><i class="fa fa-"></i>Ranting Sumokali</a></li>
            <li><a href="<?php echo base_url().'admin/rantingtenggulunan'?>"><i class="fa fa-"></i> Ranting Tenggulunan</a></li>
            <li><a href="<?php echo base_url().'admin/rantingsugihwaras'?>"><i class="fa fa-"></i> Ranting Sugihwaras</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkedungkendo'?>"><i class="fa fa-"></i> Ranting Kedungkendo</a></li>
            <li><a href="<?php echo base_url().'admin/rantinglarangan'?>"><i class="fa fa-"></i> Ranting Larangan</a></li>
            <li><a href="<?php echo base_url().'admin/rantingsidodadi'?>"><i class="fa fa-"></i> Ranting Sidodadi</a></li>
            <li><a href="<?php echo base_url().'admin/rantingcandi'?>"><i class="fa fa-"></i> Ranting Candi</a></li>
            <li><a href="<?php echo base_url().'admin/rantingjambangan'?>"><i class="fa fa-"></i> Ranting Jambangan</a></li>
            <li><a href="<?php echo base_url().'admin/rantinggelam'?>"><i class="fa fa-"></i> Ranting Gelam</a></li>
            <li><a href="<?php echo base_url().'admin/rantingbligo'?>"><i class="fa fa-"></i> Ranting Bligo</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkarangtanjung'?>"><i class="fa fa-"></i> Ranting Kerangtanjung</a></li>
            <li><a href="<?php echo base_url().'admin/rantingsumorame'?>"><i class="fa fa-"></i> Ranting Sumorame</a></li>
            <li><a href="<?php echo base_url().'admin/rantingbalongdowo'?>"><i class="fa fa-"></i> Ranting Balongdowo</a></li>
            <li><a href="<?php echo base_url().'admin/rantingbalonggabus'?>"><i class="fa fa-"></i> Ranting Balonggabus</a></li>
            <li><a href="<?php echo base_url().'admin/rantingwedoroklurak'?>"><i class="fa fa-"></i> Ranting Wedoroklurak</a></li>
            <li><a href="<?php echo base_url().'admin/rantingklurak'?>"><i class="fa fa-"></i> Ranting Klurak</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkebonsari'?>"><i class="fa fa-"></i> Ranting Kebonsari</a></li>
            <li><a href="<?php echo base_url().'admin/rantingsidodadi'?>"><i class="fa fa-"></i> Ranting Sidodadi</a></li>
            <li><a href="<?php echo base_url().'admin/rantingdurungbedug'?>"><i class="fa fa-"></i> Ranting Durung Bedug</a></li>
            <li><a href="<?php echo base_url().'admin/rantingdurungbanjar'?>"><i class="fa fa-"></i> Ranting Durung Banjar</a></li>
            <li><a href="<?php echo base_url().'admin/rantingngampelsari'?>"><i class="fa fa-"></i> Ranting Ngampelsari</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkalipecabean'?>"><i class="fa fa-"></i> Ranting Ranting Kalipecabean</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkendalpecabean'?>"><i class="fa fa-"></i> Ranting Kendalpecabean</a></li>
            <li><a href="<?php echo base_url().'admin/rantingkedungpeluk'?>"><i class="fa fa-"></i> Ranting Kedungpeluk</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/redaksi'?>">
            <i class="fa fa-pencil"></i> <span>REDAKSI</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/kategori'?>">
            <i class="fa fa-cogs"></i> <span>KATEGORI</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/files'?>">
            <i class="fa fa-book"></i> <span>FILE</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/profiltk'?>">
            <i class="fa fa-database"></i> <span>DATA PROFIL</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>PENGGUNA</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>INBOX</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-comments"></i> <span>KOMENTAR</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-chrome"></i></span>
              <?php
                  $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Chrome'");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Chrome</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
            <?php
                  $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Firefox' OR pengunjung_perangkat='Mozilla'");
                  $jml=$query->num_rows();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">Mozilla Firefox</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-bug"></i></span>
              <?php
                    $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Googlebot'");
                    $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Googlebot</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-opera"></i></span>
            <?php
                    $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Opera'");
                    $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Opera</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengunjung bulan ini</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                  <div class="col-md-12">
                          <canvas id="canvas" width="1000" height="280"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
</div>
      <!-- Main row -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div> <strong><p>Copyright © <?php echo date('Y');?> </p></strong>All rights reserved.
      </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>

<script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [

                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($value);?>
                    }

                ]

            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });

        </script>

</body>
</html>
