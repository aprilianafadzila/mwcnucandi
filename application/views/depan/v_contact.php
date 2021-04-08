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
            <h2>Contact</h2>
        </div>
    </div>

    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->


    <!-- ##### Contact Area Start ##### -->
    <div>
    </div>
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span></span>
                                        <h3>Contact Us</h3>
                                        <p class="mt-30"></p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="https://www.instagram.com/yayasan.aba/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <?php foreach ($contact->result() as $row) : ?>
                                        <p><?php echo $row->alamat;?></p>
                                      <?php endforeach;?>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <?php foreach ($contact->result() as $row) : ?>
                                        <p>Office: <?php echo $row->no_telp;?></p>
                                      <?php endforeach;?>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <?php foreach ($contact->result() as $row) : ?>
                                        <p><?php echo $row->email;?></p>
                                      <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                  <div><?php echo $this->session->flashdata('msg');?></div>
                                    <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                                        <input type="text" name="xnama" class="form-control" placeholder="Name">
                                        <input type="email" name="xemail" class="form-control" id="email" placeholder="E-mail">
                                        <textarea name="xmessage" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        <button type="submit" class="btn academy-btn mt-30" >Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                              <?php foreach ($all_galeri->result() as $row) : ?>
                          <a href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="gallery-img" title="Gallery Image 1"><img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt=""></a>
                          <?php endforeach;?>
                            </div>
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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>
