<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>YAYASAN BUSYRI AL-ALY</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/demo/logoyayasan.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/plugins/Nivo-Slider/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="assets/plugins/Nivo-Slider/themes/default/default.css" type="text/css" />

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="#"><img src="assets/images/demo/logo3.png" alt="">    YAYASAN BUSYRI AL-ALY</a>
                            </div>
                            <div class="login-content">
                                <a href="#">LOGIN as Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                              <ul>
                                  <li><a href="home">Home</a></li>
                                  <li><a href="#">Profil</a>
                                      <ul class="dropdown">
                                          <li><a href="datatk">TK</a></li>
                                          <li><a href="http://minuhasa.sch.id/main">MI</a></li>
                                          <li><a href="#">Koperasi</a></li>
                                        </ul>
                                  </li>
                                  <li><a href="galeri">Galeri</a></li>
                                  <li><a href="blog">Artikel</a></li>
                                  <li><a href="donasi">Donasi</a></li>
                                  <li><a href="#">Daftar</a>
                                      <ul class="dropdown">
                                          <li><a href="http://gg.gg/TKMUSLIMATNU02NHMIJI">TK</a></li>
                                          <li><a href="https://m.facebook.com/story.php?story_fbid=1048638885519129&id=100011190829021&sfnsn=wiwspwa&extid=5acNyl0ZAgloBhPm">MI</a></li>

                                        </ul>
                                  </li>
                                  <li><a href="contact">Contact</a></li>
                              </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                              <?php foreach ($contact->result() as $row) : ?>
                                <a href="tel:<?php echo $row->no_telp;?>"><i class="icon-telephone-2"></i> <span><?php echo $row->no_telp;?></span></a>
                              <?php endforeach;?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Profile</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                      <?php foreach ($profil->result() as $row) : ?>
                        <?php if(empty($row->tulisan_gambar)):?>
                          <p align="center"><img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-fluid" alt="#"></p>
                        <?php else:?>
                         <p align="center"> <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img img-responsive" width="150px;" alt="#"></p>
                        <?php endif;?>

                    <?php endforeach;?>
                       <?php foreach ($data->result() as $row) : ?>
                        <span>-</span>
                        <h3><?php echo $row->nama;?></h3>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-8 wow fadeInUp" data-wow-delay="400ms">
                  <?php foreach ($profil->result() as $row) : ?>
                    <p><?php echo $row->tulisan_isi;?></p>
                  <?php endforeach;?>
                    <h5>Kepala Sekolah</h5>
                    <hr>
                    <br>
                    <?php foreach ($data2->result() as $row) : ?>
                      <?php if(empty($row->photo)):?>
                        <p align="center"><img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-fluid" alt="#"></p>
                      <?php else:?>
                       <p align="center"> <img src="<?php echo base_url().'assets/images/'.$row->photo;?>" class="img img-responsive" width="200px;" alt="#"></p>
                      <?php endif;?>
                        <span><p align="center"><a href="kepalatk"><?php echo $row->nama;?></a></p></span>

                  <?php endforeach;?>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp ">
                  <div class="slider-wrapper theme-default">
                  <div class="ribbon"></div>
                  <div id="slider1" class="nivoSlider">
                    <?php foreach ($galeri->result() as $row) : ?>
                      <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" class="center" title="<?php echo $row->galeri_judul;?>" />
                      <?php endforeach;?>
                  </div>
                  </div>
                </div>

            </div>
            <br>
            <h5>Tabel Lembaga</h5>
            <hr>

            <div class="col-12 col-md-12 wow fadeInUp">
              <table>
                <thead>
                  <tr>
                    <th style="width:200px;">Nama</th>
                    <th style="width:250px;">Alamat</th>
                    <th style="width:200px;">No_Telp</th>
                    <th style="width:200px;">No Statistik / NPSN</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      foreach ($data->result_array() as $i) :
                         $nama=$i['nama'];
                         $alamat=$i['alamat'];
                         $no_telp=$i['no_telp'];
                         $npsn=$i['npsn'];
                         $status=$i['status'];

                              ?>
                          <tr>
                            <td><?php echo $nama;?></td>
                            <td><?php echo $alamat;?></td>
                            <td><?php echo $no_telp;?></td>
                            <td><?php echo $npsn;?></td>
                            <td><?php echo $status;?></td>

                          </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>


        </div>
    </section>
    <section>
      <div class="container">
      <div class="row">

      </div>
    </div>

    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="teachers-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Our</span>
                        <h3>Teachers</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Teachers -->

                <?php foreach ($all_galeri->result() as $row) : ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <a href="<?php echo base_url().'assets/images/'.$row->siswa_photo;?>" class="gallery-img" title="Gallery Image"><img src="<?php echo base_url().'assets/images/'.$row->siswa_photo;?>" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5><?php echo $row->siswa_nama;?></h5>
                            <span><?php echo $row->jabatan;?></span>
                        </div>
                    </div>
                </div>
                  <?php endforeach;?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="galeritk" class="btn academy-btn">View All Galery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="" alt=""><h6>Yayasan Busyri Al-Aly</h6></a>
                            </div>
                            <p>Temukan kami di berbagai platform sosial media</p>
                            <div class="footer-social-info">
                            <a href="https://www.instagram.com/yayasan.aba/"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                              <ul class="useful-links">
                                  <li><a href="home">H o m e</a></li>
                                  <li><a href="contact">C o n t a c t</a></li>
                                  <li><a href="donasi">D o n a s i</a></li>
                                  <li><a href="blog">A r t i k e l</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <nav>
                            <ul class="useful-links">
                              <li><a href="#">No Galeri</a></li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                    <?php foreach ($contact->result() as $row) : ?>
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p><?php echo $row->alamat;?></p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Office: <?php echo $row->no_telp;?></p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p><?php echo $row->email;?></p>
                            </div>
                        </div>
                      <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy; <script>document.write(new Date().getFullYear());</script> Yayasan Busyri Al-Aly All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="assets/plugins/Nivo-Slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script>
    $(window).on('load', function() {
            $('#slider1').nivoSlider();
        });
    </script>
</body>

</html>
