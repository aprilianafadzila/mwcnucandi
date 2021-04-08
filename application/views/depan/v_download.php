<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MWCNU Candi Sidoarjo</title>
    <link rel="icon" href="images/logo1.png">
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="assets/plugins/Nivo-Slider/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="assets/plugins/Nivo-Slider/themes/default/default.css" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <?php
    		function limit_words($string, $word_limit){
    				$words = explode(" ",$string);
    				return implode(" ",array_splice($words,0,$word_limit));
    		}
    ?>
</head>
<style>
@media only screen and (min-width:700px) {
  /* For tablets: */
  .padding-page{
    width: 1068px;
    margin-right: auto;
    margin-left: auto;

  }
}

@media only screen and (max-width: 767px){
  /* For tablets: */
  #hiddenslider{
  display:none;
    }
}
</style>
<body style="background:#4dab73;">

<div class="padding-page">
<div class="container-fluid fh5co_header_bg" style="background: #006127;">

        <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center" ><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i><span id="tanggalwaktu"></span></a>

                </div>
                  </div>
        </div>
        </div>

</div>
</div>

<div class="padding-page">
<div class="container-fluid" style=" background:#ffffff; ">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="images/logo1.png" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-youtube"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="padding-page">
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786" style="background:#00702d;">

    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="hpme"><img src="images/logo1.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="home" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle"><b>KANAL</b></h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                          <a class="dropdown-item" href="blog">Berita</a>
                          <a class="dropdown-item" href="galeri">Galeri</a>
                          <a class="dropdown-item" href="aswaja">Keaswajan</a>
                          <a class="dropdown-item" href="pesantren">Pesantren</a>
                          <a class="dropdown-item" href="#">Lain-lain</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">TENTANG NU CANDI</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                          <a class="dropdown-item" href="sejarah">Sejarah NU Candi</a>
                          <a class="dropdown-item" href="kantor">Kantor</a>
                          <a class="dropdown-item" href="pengurus">Pengurus</a>
                          <a class="dropdown-item" href="tokoh">Tokoh</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">LEMBAGA NU</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                          <a class="dropdown-item" href="aswajanucenter">Aswaja NU Center</a>
                          <a class="dropdown-item" href="laziznu">LAZISNU</a>
                          <a class="dropdown-item" href="ldnu">LDNU</a>
                          <a class="dropdown-item" href="lknu">LKNU</a>
                          <a class="dropdown-item" href="lakpesdam">LAKPESDAM</a>
                          <a class="dropdown-item" href="lbmnu">LBMNU</a>
                          <a class="dropdown-item" href="lesbumi">LESBUMI NU</a>
                          <a class="dropdown-item" href="lfnu">LFNU</a>
                          <a class="dropdown-item" href="lkknu">LKKNU</a>
                          <a class="dropdown-item" href="lpmaarifnu">LP MA'ARIF NU</a>
                          <a class="dropdown-item" href="lpbhnu">LPBHNU</a>
                          <a class="dropdown-item" href="lpbinu">LPBI NU</a>
                          <a class="dropdown-item" href="lpnu">LPNU</a>
                          <a class="dropdown-item" href="lppnu">LPPNU</a>
                          <a class="dropdown-item" href="lptnu">LPTNU</a>
                          <a class="dropdown-item" href="ltmnu">LTMNU</a>
                          <a class="dropdown-item" href="ltnnu">LTNNU</a>
                          <a class="dropdown-item" href="lwpnu">LWPNU</a>
                          <a class="dropdown-item" href="rminu">RMI NU</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">BADAN OTONOM</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                          <a class="dropdown-item" href="ansor">GP ANSOR</a>
                          <a class="dropdown-item" href="fatayat">FATAYAT</a>
                          <a class="dropdown-item" href="muslimat">MUSLIMAT</a>
                          <a class="dropdown-item" href="ipnu">IPNU-IPPNU</a>
                          <a class="dropdown-item" href="pagarnusa">Pagar Nusa</a>
                          <a class="dropdown-item" href="ishari">ISHARI</a>
                      </div>
                  </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">RANTING</h7><span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="rantingsepande">Ranting Sepande</a>
                            <a class="dropdown-item" href="rantingsumokali">Ranting Sumokali</a>
                            <a class="dropdown-item" href="rantingtenggulunan">Ranting Tenggulunan</a>
                            <a class="dropdown-item" href="rantingsugihwaras">Ranting Sugihwaras</a>
                            <a class="dropdown-item" href="rantingkedungkendo">Ranting Kedungkendo</a>
                            <a class="dropdown-item" href="rantinglarangan">Ranting Larangan</a>
                            <a class="dropdown-item" href="rantingsidodadi">Ranting Sidodadi</a>
                            <a class="dropdown-item" href="rantingcandi">Ranting Candi</a>
                            <a class="dropdown-item" href="rantingjambangan">Ranting Jambangan</a>
                            <a class="dropdown-item" href="rantinggelam">Ranting Gelam</a>
                            <a class="dropdown-item" href="rantingbligo">Ranting Bligo</a>
                            <a class="dropdown-item" href="rantingkarangtanjung">Ranting Kerangtanjung</a>
                            <a class="dropdown-item" href="rantingsumorame">Ranting Sumorame</a>
                            <a class="dropdown-item" href="rantingbalongdowo">Ranting Balongdowo</a>
                            <a class="dropdown-item" href="rantingbalonggabus">Ranting Balonggabus</a>
                            <a class="dropdown-item" href="rantingwedoroklurak">Ranting Wedoroklurak</a>
                            <a class="dropdown-item" href="rantingklurak">Ranting Klurak</a>
                            <a class="dropdown-item" href="rantingkebonsari">Ranting Kebonsari</a>
                            <a class="dropdown-item" href="rantingdurungbedug">Ranting Durung Bedug</a>
                            <a class="dropdown-item" href="rantingdurungbanjar">Ranting Durung Banjar</a>
                            <a class="dropdown-item" href="rantingngampelsari">Ranting Ngampelsari</a>
                            <a class="dropdown-item" href="rantingkalipecabean">Ranting Kalipecabean</a>
                            <a class="dropdown-item" href="rantingkendalpecabean">Ranting Kendalpecabean</a>
                            <a class="dropdown-item" href="rantingkedungpeluk">Ranting Kedungpeluk</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="download" aria-labelledby="dropdownMenuLink_1"><h7 style="color:#ffffff;" class="" >DOWNLOAD</h7><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="redaksi" aria-labelledby="dropdownMenuLink_1"><h7 style="color:#ffffff;" class="">REDAKSI</h7><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
<div class="padding-page">
<div class="" style="background:#ffffff; ">
<br>
</div>
</div>



<!--//END HEADER -->
  <div class="padding-page">
  <div class="container-fluid pb-4 pt-5" style="background:#ffffff; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2><b>DOWNLOAD BERKAS</b></h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Files</th>
                      <th>Tanggal</th>
                      <th>Oleh</th>
                      <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->file_judul;?></td>
                      <td><?php echo $row->tanggal;?></td>
                      <td><?php echo $row->file_oleh;?></td>
                      <td style="text-align:right;"><a href="<?php echo site_url('download/get_file/'.$row->file_id);?>" class="btn btn-info">Download</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    <!--//END  ABOUT IMAGE -->

    <!--============================= FOOTER =============================-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                    </a>
                    <br>
                    <p align="center">Copyright ©  <?php echo date('Y');?> MWCNU CANDI All Right Reserved</p>
                    </div>
                </div>
                </div>
            </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
                integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
                integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
                crossorigin="anonymous"></script>

                <script src="assets/plugins/Nivo-Slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
                <script>
                $(window).on('load', function() {
                        $('#slider1').nivoSlider();
                    });
                </script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        <script src="js/slick.js"></script>
        <script>
            $('.slider').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1008,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
              // settings: "unslick"
            }

          ]
        });
        </script>
            <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
                    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
                    crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
                    integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
                    crossorigin="anonymous"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <!-- Waypoints -->
            <script src="js/jquery.waypoints.min.js"></script>
            <!-- Main -->
            <script src="js/main.js"></script>
            <script src="js/slick.js"></script>
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
            <script>
              $(document).ready(function() {
                $('#display').DataTable();
              });
              var tw = new Date();
              if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
              else (a=tw.getTime());
              tw.setTime(a);
              var tahun= tw.getFullYear ();
              var hari= tw.getDay ();
              var bulan= tw.getMonth ();
              var tanggal= tw.getDate ();
              var hariarray=new Array("Ahad,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
              var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
              document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
            </script>
      </body>

</html>
