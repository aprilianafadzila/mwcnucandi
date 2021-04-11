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
  <title>ADMIN | Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'images/logo1.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

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
      <?php
        $this->load->view('admin/v_headermenu');
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data MWCNU
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data MWCNU</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel-data" class="table table-striped" cellspacing="0" width="150%" style="font-size:12px;">
                <thead>
                <tr>
					          <th style="width:50px;">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No_Telp</th>
                    <th>Nomor Statistik/NPSN</th>
                    <th>Nama Organisasi</th>
                    <th>Akta Notaris</th>
                    <th>Nama Ketua</th>
                    <th>Bentuk Organisasi</th>
                    <th>Kegiatan Belajar</th>
                    <th>Awal Berdiri</th>
                    <th>Status</th>
                    <th>NPWP Lembaga</th>
                    <th>Email</th>

                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
               $id=$i['id'];
               $nama=$i['nama'];
               $alamat=$i['alamat'];
               $no_telp=$i['no_telp'];
               $npsn=$i['npsn'];
               $nama_yayasan=$i['nama_yayasan'];
               $akta=$i['akta'];
               $ketua_yayasan=$i['ketua_yayasan'];
               $bentuk=$i['bentuk'];
               $kegiatan=$i['kegiatan'];
               $awal_berdiri=$i['awal_berdiri'];
               $status=$i['status'];
               $npwp=$i['npwp'];
               $email=$i['email'];
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $alamat;?></td>
                  <td><?php echo $no_telp;?></td>
                  <td><?php echo $npsn;?></td>
                  <td><?php echo $nama_yayasan;?></td>
                  <td><?php echo $akta;?></td>
                  <td><?php echo $ketua_yayasan;?></td>
                  <td><?php echo $bentuk;?></td>
                  <td><?php echo $kegiatan;?></td>
                  <td><?php echo $awal_berdiri;?></td>
                  <td><?php echo $status;?></td>
                  <td><?php echo $npwp;?></td>
                  <td><?php echo $email;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
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

<!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Data</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/datayayasan/simpan_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No_telp</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xno_telp" class="form-control" id="inputUserName" placeholder="No_telp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nomor Statistik/NPSN</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnpsn" class="form-control" id="inputUserName" placeholder="Nomor Statistik/NPSN" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Organisasi</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama_yayasan" class="form-control" id="inputUserName" placeholder="Nama Organisasi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Akta Notaris</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xakta" class="form-control" id="inputUserName" placeholder="Akta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ketua </label>
                                <div class="col-sm-7">
                                  <input type="text" name="xketua" class="form-control" id="inputUserName" placeholder="Nama Ketua " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Bentuk Organisasi</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xbentuk" class="form-control" id="inputUserName" placeholder="Bentuk Organisasi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kegiatan Belajar</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xkegiatan" class="form-control" id="inputUserName" placeholder="Kegiatan Belajar" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Awal Berdiri</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xawal" class="form-control" id="inputUserName" placeholder="Awal Berdiri" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xstatus" class="form-control" id="inputUserName" placeholder="Status" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">NPWP Lembaga</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnpwp" class="form-control" id="inputUserName" placeholder="NPWP" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xemail" class="form-control" id="inputUserName" placeholder="Email" required>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


		      <?php foreach ($data->result_array() as $i) :
                $id=$i['id'];
                $nama=$i['nama'];
                $alamat=$i['alamat'];
                $no_telp=$i['no_telp'];
                $npsn=$i['npsn'];
                $nama_yayasan=$i['nama_yayasan'];
                $akta=$i['akta'];
                $ketua_yayasan=$i['ketua_yayasan'];
                $bentuk=$i['bentuk'];
                $kegiatan=$i['kegiatan'];
                $awal_berdiri=$i['awal_berdiri'];
                $status=$i['status'];
                $npwp=$i['npwp'];
                $email=$i['email'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/datayayasan/update_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $id;?>">
                                  <input type="text" name="xnama" class="form-control" value="<?php echo $nama;?>" id="inputUserName" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xalamat" class="form-control" value="<?php echo $alamat;?>" id="inputUserName" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No_telp</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xno_telp" class="form-control" value="<?php echo $no_telp;?>" id="inputUserName" placeholder="No_telp" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nomor Statistik/NPSN</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnpsn" class="form-control" value="<?php echo $npsn;?>" id="inputUserName" placeholder="Nomor Statistik/NPSN" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Organisasi</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama_yayasan" class="form-control" value="<?php echo $nama_yayasan;?>" id="inputUserName" placeholder="Nama Organisasi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Akta Notaris</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xakta" class="form-control" value="<?php echo $akta;?>" id="inputUserName" placeholder="Akta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ketua</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xketua" class="form-control" value="<?php echo $ketua_yayasan;?>" id="inputUserName" placeholder="Nama Ketua" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Bentuk</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xbentuk" class="form-control" value="<?php echo $bentuk;?>" id="inputUserName" placeholder="Bentuk" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kegiatan Belajar</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xkegiatan" class="form-control" value="<?php echo $kegiatan;?>" id="inputUserName" placeholder="Kegiatan Belajar" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Awal Berdiri</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xawal" class="form-control" value="<?php echo $awal_berdiri;?>" id="inputUserName" placeholder="Awal Berdiri" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xstatus" class="form-control" value="<?php echo $status;?>" id="inputUserName" placeholder="Status" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">NPWP Lembaga</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnpwp" class="form-control" value="<?php echo $npwp;?>" id="inputUserName" placeholder="NPWP" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xemail" class="form-control" value="<?php echo $email;?>" id="inputUserName" placeholder="Email" required>
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

	<?php foreach ($data->result_array() as $i) :
    $id=$i['id'];
    $nama=$i['nama'];
    $alamat=$i['alamat'];
    $no_telp=$i['no_telp'];
    $npsn=$i['npsn'];
    $nama_yayasan=$i['nama_yayasan'];
    $akta=$i['akta'];
    $ketua_yayasan=$i['ketua_yayasan'];
    $bentuk=$i['bentuk'];
    $kegiatan=$i['kegiatan'];
    $awal_berdiri=$i['awal_berdiri'];
    $status=$i['status'];
    $npwp=$i['npwp'];
  ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/datayayasan/hapus_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							               <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin akan menghapus data <b><?php echo $nama;?></b> ?</p>

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
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
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
    $(document).ready(function() {
      var table = $('#tabel-data').DataTable( {
        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true

      } );
    } );
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
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
                    text: "Data Berhasil disimpan ke database.",
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
                    text: "Data berhasil di update",
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
                    text: "Data Berhasil dihapus.",
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
