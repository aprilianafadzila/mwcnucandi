<!--Counter Inbox-->
<?php
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
  <title>ADMIN | List Artikel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'images/logo1.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

	<?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

    ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
            <li><a href="<?php echo base_url().'admin/sarbumusi'?>"><i class="fa fa-"></i> GP ANSOR</a></li>
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
        List Artikel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="active">List Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/lkknu/add_tulisan'?>"><span class="fa fa-plus"></span> Post Tulisan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
      					<th>Gambar</th>
      					<th>Judul</th>
      					<th>Tanggal</th>
      					<th>Author</th>
      					<th>Baca</th>
                    <th>Kategori</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $tulisan_id=$i['tulisan_id'];
          					   $tulisan_judul=$i['tulisan_judul'];
          					   $tulisan_isi=$i['tulisan_isi'];
          					   $tulisan_tanggal=$i['tanggal'];
          					   $tulisan_author=$i['tulisan_author'];
          					   $tulisan_gambar=$i['tulisan_gambar'];
          					   $tulisan_views=$i['tulisan_views'];
                       $kategori_id=$i['tulisan_kategori_id'];
                       $kategori_nama=$i['tulisan_kategori_nama'];

                    ?>
                <tr>
                  <td><img src="<?php echo base_url().'assets/images/'.$tulisan_gambar;?>" style="width:90px;"></td>
                  <td><?php echo $tulisan_judul;?></td>

        				  <td><?php echo $tulisan_tanggal;?></td>
        				  <td><?php echo $tulisan_author;?></td>
        				  <td><?php echo $tulisan_views;?></td>
        				  <td><?php echo $kategori_nama;?></td>
                  <td style="text-align:right;">
                        <a class="btn" href="<?php echo base_url().'admin/lkknu/get_edit/'.$tulisan_id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $tulisan_id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div> <strong><p>Copyright © <?php echo date('Y');?></p></strong>All rights reserved.
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



	<?php foreach ($data->result_array() as $i) :
              $tulisan_id=$i['tulisan_id'];
              $tulisan_judul=$i['tulisan_judul'];
              $tulisan_gambar=$i['tulisan_gambar'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $tulisan_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Artikel</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/lkknu/hapus_tulisan'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $tulisan_id;?>"/>
                     <input type="hidden" value="<?php echo $tulisan_gambar;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $tulisan_judul;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Artikel Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Artikel berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Artikel Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
