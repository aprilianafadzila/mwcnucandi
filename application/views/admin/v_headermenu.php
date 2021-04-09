<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
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
      <li><a href="<?php echo base_url().'admin/jatmannu'?>"><i class="fa fa-"></i> JATMAN NU</a></li>
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
