<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TK Muslimat NU 02 Nurul Huda Miji | Daftar</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/css.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <!-- Pesan -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  footer {
    background: #253617;
    padding: 1px 0 50px;
    height:200px;
  }
  </style>
  </head>

<body>
    <!--============================= HEADER =============================-->

    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="80px;" src="<?php echo base_url().'theme/images/logo-tk.jpeg'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('donasi');?>">Donasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-form pull-right"></i>
                                    <span>Profil</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url('datatk') ?>">TK Muslimat NU 02 Nurul Huda Miji</a>
                                    <a class="dropdown-item" href="<?php echo site_url('') ?>">MI Nurul Huda</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pe') ?>">Koperasi Tanaka</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('blog');?>">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-form pull-right"></i>
                                    <span>Pendaftaran</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url('daftar') ?>">TK Muslimat NU 02 Nurul Huda Miji</a>
                                    <a class="dropdown-item" href="<?php echo site_url('download') ?>">MI Nurul Huda</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pe') ?>">Koperasi Tanaka</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                            </li>
                           </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
      <section>
</section>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->



<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h2>Pendaftaran TK Muslimat NU 02 Nurul Huda Miji</h2></center>
            </div>
        </div>
    </div>
</section>

<ul class="listing">
    <div class="container">
        <form class="" action="<?php echo base_url().'daftar/simpan_anggota'?>" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">NIA</label>
                <div class="col-sm-7">
                    <input type="text" name="xnip" class="form-control" id="inputUserName" placeholder="NIA" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-5 control-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                <label for="inlineRadio2"> Perempuan </label>
                        </div>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                    <div class="col-sm-7">
                        <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Surabaya" required>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                    <div class="col-sm-7">
                        <input type="date" name="xtgl_lahir" class="form-control" id="inputUserName" placeholder="11 Februari 1998" required>
                            <script type="text/javascript">
                                $(document).ready(function(){$('.form-control').datepicker();});
                            </script>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Program Studi</label>
                    <div class="col-sm-7">
                        <select class="form-control select2" name="xmapel" style="width: 100%;" required>
                            <option value="">-Pilih-</option>
                                <?php
                                $no=0;
                                foreach ($pro->result_array() as $i) :
                                $no++;
                                $prodi_id=$i['prodi_id'];
                                $prodi_nama=$i['prodi_nama'];
                                ?>
                            <option value="<?php echo $prodi_id;?>"><?php echo $prodi_nama;?></option>
                                <?php endforeach;?>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">E-Mail</label>
                    <div class="col-sm-7">
                        <input type="Email" name="xemail" class="form-control" id="inputUserName" placeholder="contoh@example.com" required>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nomor Telepon</label>
                    <div class="col-sm-7">
                        <input type="text" name="xkontak" class="form-control" id="inputUserName" placeholder="085855633858" required>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                    <div class="col-sm-7">
                        <input type="file" name="filefoto"/>
                        <input type="submit" value="Simpan">
                    </div>
            </div>

            </div>
        </form>
    </div>
</ul>
    <!--============================= DETAILED CHART =============================-->
    <footer>
      <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="foot-logo">
                  <a href="<?php echo site_url();?>">
                      </a>
                      <br>
                      <p align="center">Copyright © Apr <?php echo date('Y');?> </p>
              </div>
            </div>
        </div>
        </div>
    </footer>
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
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
    <?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Anggota Berhasil disimpan ke database.",
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
