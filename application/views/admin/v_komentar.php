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
  <title>ADMIN | Komentar</title>
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
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li>
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
        Komentar
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Komentar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Komentar</th>
                    <th>Tanggapan Untuk</th>
                    <th>Dikirimkan Pada</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
  					foreach ($data->result() as $row) :?>
                <tr>
                  <td><?php echo $row->komentar_nama;?></td>
                  <td><?php echo $row->komentar_isi;?></td>
                  <td><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" target="_blank"><?php echo $row->tulisan_judul;?></a></td>
                  <td><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></td>
                  <td style="text-align:right;">
                    <?php if($row->komentar_status=='1' && $row->komentar_parent=='0'):?>
                      <a class="btn btn-reply" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" data-post_id="<?php echo $row->komentar_tulisan_id;?>" title="Balas"><span class="fa fa-reply"></span></a>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php elseif($row->komentar_status=='1'):?>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php else:?>
                      <a class="btn" href="<?php echo site_url('admin/komentar/publish/'.$row->komentar_id);?>" title="Publish"><span class="fa fa-send"></span></a>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php endif;?>
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
                        <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/simpan_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Mulai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xmulai" class="form-control pull-right" id="datepicker" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- Date range -->
                            <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                              <div class="col-sm-7">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="xselesai" class="form-control pull-right" id="datepicker2" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
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



        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Komentar</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/komentar/hapus'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value=""/>
                            <p>Apakah Anda yakin mau menghapus komentar ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal Relpy-->
        <div class="modal fade" id="ModalReply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Reply</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/komentar/reply'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="komenid" value=""/>
                     <input type="hidden" name="postid" value=""/>
                        <textarea name="komentar" class="form-control" rows="8" cols="80" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Relpy</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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

    $('#example1').on('click','.btn-reply',function(){
      var komentar_id = $(this).data('id');
      var post_id = $(this).data('post_id');
      $('#ModalReply').modal('show');
      $('[name="komenid"]').val(komentar_id);
      $('[name="postid"]').val(post_id);
    });

    $('#example1').on('click','.btn-hapus',function(){
      var komentar_id = $(this).data('id');
      $('#ModalHapus').modal('show');
      $('[name="kode"]').val(komentar_id);
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

    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Komentar berhasil di Balas",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
      <?php elseif($this->session->flashdata('msg')=='success'):?>
          <script type="text/javascript">
                  $.toast({
                      heading: 'Success',
                      text: "Komentar Berhasil Publish.",
                      showHideTransition: 'slide',
                      icon: 'success',
                      hideAfter: false,
                      position: 'bottom-right',
                      bgColor: '#7EC857'
                  });
          </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Komentar Berhasil dihapus.",
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
