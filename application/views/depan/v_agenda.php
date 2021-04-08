<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YAYASAN NURUL HUDA | Agenda</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/css.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/fullcalendar.min.css'?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
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
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="80px;" src="<?php echo base_url().'theme/images/logo-1.png'?>"></a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('blog');?>">Donasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-form pull-right"></i>
                                    <span>Profil</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url('daftar') ?>">TK Nurul Huda</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pe') ?>">MI Nurul Huda</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-form pull-right"></i>
                                    <span>Pendaftaran</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url('daftar') ?>">TK Nurul Huda</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pe') ?>">MI Nurul Huda</a>
                                </div>
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
<!--============================= EVENTS =============================-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Agenda</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Agenda Terbaru </a>
                    </li>

                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                  <?php foreach($data->result() as $row):?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="event-date">
                                    <h4><?php echo date("d", strtotime($row->agenda_mulai));?></h4>
                                    <span><?php echo date("M Y", strtotime($row->agenda_mulai));?>
                                    </span>
                                    <!-- Tab panes <br><h4><p> Sampai </p></h4>
                                    <h4><?php echo date("d", strtotime($row->agenda_selesai));?></h4>
                                    <span><?php echo date("M Y", strtotime($row->agenda_selesai));?></span> -->
                                </div>
                                <span class="event-time"><?php echo $row->agenda_waktu;?></span>
                            </div>
                            <div class="col-md-7">
                                <div class="event-heading">
                                    <h3><?php echo $row->agenda_nama;?></h3>
                                    <p><?php echo $row->agenda_deskripsi;?></p>
                                </div>
                          </div>
                      </div>
                      <hr class="event-underline">
                  </div>
                <?php endforeach;?>

      <div class="col-md-12 text-center">
        <?php echo $page;?>
    </div>
</div>

</div>
</div>
</div>
</section>
<!--//END EVENTS -->
<!--============================= FOOTER =============================-->
 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="foot-logo">
                            <a href="<?php echo site_url();?>">
                                <img src="<?php echo base_url().'theme/images/logo-bawah.png'?>" class="img-fluid" alt="footer_logo">
                            </a>
                            <p>copyright © <?php echo date('Y');?> by <br> <a href="https://instagram.com/rayon.sainsdanteknologi_ss" target="_blank">Rayon Sains & Teknologi</a>. <br>All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sitemap">
                                <h3>Menu Utama</h3>
                                <ul>
                                    <li><a href="<?php echo site_url();?>">Home</a></li>
                                    <li><a href="<?php echo site_url('about');?>">Donasi</a></li>
                                    <li><a href="<?php echo site_url('contact');?>">Live Chatt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="sitemap">
                              <h3></h3>
                              <ul><br>
                                <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                                <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                              </ul>
                          </div>
                        </div>

                        <div class="col-md-4">
                            <div class="address">
                                <h3>Hubungi Kami</h3>
                        <p>Alamat  : Surabaya Selatan, Jawa Timur, Indonesia. 60237
                        <br>Email  : sainsdanteknologi@pmiiss.com
                        <br>Phone  : +6285-855-633-858</p>
                            <ul class="footer-social-icons">
                                <li><a href="https://instagram.com/rayon.sainsdanteknologi_ss"><i class="fa fa-instagram fa-fb" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                                    </ul>
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
            </body>

            </html>
