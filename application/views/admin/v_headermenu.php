<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
    $jenis_kategori = get_jenis_kategori();
?>
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

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
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
  <li class="active">
    <a href="<?php echo base_url().'admin/redaksi/add_tulisan'?>">
      <i class="fa fa-pencil"></i> <span>POST ARTIKEL</span>
      <span class="pull-right-container">
        <small class="label pull-right"></small>
      </span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-list"></i>
      <span>LIST ARTIKEL</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <?php foreach ($jenis_kategori as $row) : ?>
        <?php 
            $jenis = strtolower(str_replace(" ", "", $row->id));
            $jeniss = strtoupper($row->nama);
         ?>

      <li><a href="<?php echo base_url().'admin/tulisan?jenis='.$jenis?>"><i class="fa fa-"></i>LIST <?php echo $jeniss; ?></a></li>
      <?php endforeach;?>
    </ul>
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
