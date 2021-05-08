<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MWCNU Candi Sidoarjo</title>
    <link rel="shorcut icon" href="<?php echo base_url().'images/logo1.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">

    <!--Social Share-->
    <link href="<?php echo base_url().'theme/css/jssocials.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/jssocials-theme-flat.css'?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url();?>images/logo1.png">
    <link href="<?php echo base_url();?>css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="<?php echo base_url();?>css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/owl.theme.default.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Nivo-Slider/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Nivo-Slider/themes/default/default.css" type="text/css" />
    <!-- Main CSS -->
    <!--Social Share-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.3/social-share.min.css">
<script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.3/social-share.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>css/style_1.css" rel="stylesheet" type="text/css"/>
      <!-- <link href="<?php echo base_url();?>theme/css/style.css" rel="stylesheet" type="text/css"/> -->
    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>js/modernizr-3.5.0.min.js"></script>
    <style>
    .sharePopup{
      font-size: 11px;
    }
    .sharePopup a{
      font-size: 11px;
      color: #fff;
      text-decoration: none;
    }

    footer {
      background: #253617;
      padding: 1px 0 50px;
      height:200px;
    }
    .blog-wrap {
      padding: 98px 0; }

    .blog-img_block {
      position: relative; }
      .blog-img_block img {
        padding-left: 40px; }

    .blog-date {
      background: #2d2d2d;
      padding: 12px 16px;
      border-radius: 2px;
      display: inline-block;
      position: absolute;
      top: 50%;
      left: 0;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%); }
      .blog-date span {
        color: #fff;
        font-size: 18px;
        font-weight: 700; }

      .blog-tiltle_block {
        padding: 30px 0 0 100px; }
        .blog-tiltle_block h4 {
          font-weight: 700; }
          .blog-tiltle_block h4 a {
            font-size: 20px;
            text-decoration: none; }
          .blog-tiltle_block h6 a {
            padding-right: 15px;
            padding-left: 15px;
            font-weight: 300;
            font-size: 14px;
            text-decoration: none; }
            .blog-tiltle_block h6 a span {
              padding-left: 5px; }
            .blog-tiltle_block h6 a:first-child {
              padding-left: 0; }
          .blog-tiltle_block p {
            line-height: 1.8;
            padding: 22px 16px 0 0; }
          .blog-tiltle_block a {
            color: #2d2d2d;
            font-size: 13px;
            text-decoration: underline;
            font-weight: 700; }

            .blogpost-tab-wrap {
              float: left !important;
              width: 100%; }

              .nav-tabs .nav-item.show .nav-link,
              .nav-tabs .nav-link.active {
                border-bottom: 2px solid #cbb58b;
                border-right: 1px solid #fff;
                border-left: 1px solid #fff;
                border-top: 1px solid #fff;
                color: #cbb58b; }

    .blog-featured_post h3 {
      font-weight: 700;
      margin: 0 0 24px; }

      .blog-featured_post hr {
        margin: 24px 0; }

        .blog-featured-img_block img {
          float: left;
          margin: 0 28px 0 0; }

          .blog-featured-img_block h5 {
            font-weight: 700;
            font-size: 17px;
            margin-left: 150px; }

            .blog-featured-img_block p {
              font-size: 15px;
              margin-left: 150px; }

            .blog-featured-img_block a {
              color: #292b2c; }

              @media (max-width: 1200px) {
                .blog-search {
                  width: 100%; }
                .btn-blogsearch {
                  width: 100%;
                  margin-top: 10px; }
                .blog-featured-img_block img {
                  margin: 0 12px 0 0; }
                .blog-tags {
                  padding: 5px 20px; } }

              @media (max-width: 992px) {
                .blog-date span {
                  font-size: 15px; }
                .pagination {
                  margin: 0; }
                .blog-tiltle_block,
                .blog-img_block img {
                  padding-left: 0; }
                .blog-icons {
                  margin-top: 12px; }
                .blog-featured-img_block img {
                  width: 100%;
                  margin: 0 0 10px 0; }
                .blog-featured-img_block p,
                .blog-featured-img_block h5 {
                  margin-left: 0; } }
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

</head>

<body>
  <div class="padding-page">
  <div class="container-fluid fh5co_header_bg" style="background: #006127;">

          <div class="container">
          <div class="row">
              <div class="col-12 fh5co_mediya_center" ><a href="#" class="color_fff fh5co_mediya_setting"><i
                      class=""></i><span id="tanggalwaktu"></span></a>

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
                  <img src="<?php echo base_url();?>images/logo1.png" alt="img" class="fh5co_logo_width"/>
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
                      <a href="" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                  </div>
                  <div class="text-center d-inline-block">
                      <a href="" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
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

<?php $kanal = get_kanal();?>
<?php $tentang = get_tentang();?>
<?php $lembaga = get_lembaga();?>
<?php $badanotonom = get_badanotonom();?>
<?php $ranting = get_ranting();?>
<?php $redaksi = get_redaksi();?>

    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="hpme"><img src="images/logo1.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle"><b>KANAL</b></h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                        <?php foreach ($kanal as $row) : ?>
                            <?php $depan = strtolower($row->subcategori) ?>
                            <?php $slug = generate_slug($row->nama); ?>
                          <a class="dropdown-item" href="<?php echo generate_url($depan, $slug)?>"><?php echo $row->nama;?></a>
                        <?php endforeach;?>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">TENTANG NU CANDI</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                        <?php foreach ($tentang as $row) : ?>
                            <?php $depan = strtolower($row->subcategori) ?>
                            <?php $slug = generate_slug($row->nama); ?>
                          <a class="dropdown-item" href="<?php echo generate_url($depan, $slug)?>"><?php echo $row->nama;?></a>
                        <?php endforeach;?>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">LEMBAGA NU</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                        <?php foreach ($lembaga as $row) : ?>
                            <?php $depan = strtolower($row->subcategori) ?>
                            <?php $slug = generate_slug($row->nama); ?>
                          <a class="dropdown-item" href="<?php echo generate_url($depan, $slug)?>"><?php echo $row->nama;?></a>
                        <?php endforeach;?>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">BADAN OTONOM</h7><span class="sr-only">(current)</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                        <?php foreach ($badanotonom as $row) : ?>
                            <?php $depan = strtolower($row->subcategori) ?>
                            <?php $slug = generate_slug($row->nama); ?>
                          <a class="dropdown-item" href="<?php echo generate_url($depan, $slug)?>"><?php echo $row->nama;?></a>
                        <?php endforeach;?>
                      </div>
                  </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false"><h7 style="color:#ffffff;" class="dropdown-toggle">RANTING</h7><span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                          <?php foreach ($ranting as $row) : ?>
                              <?php $depan = strtolower($row->subcategori) ?>
                              <?php $slug = generate_slug($row->nama); ?>
                            <a class="dropdown-item" href="<?php echo generate_url($depan, $slug)?>"><?php echo $row->nama;?></a>
                          <?php endforeach;?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="download" aria-labelledby="dropdownMenuLink_1"><h7 style="color:#ffffff;" class="" >DOWNLOAD</h7><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="kantor" aria-labelledby="dropdownMenuLink_1"><h7 style="color:#ffffff;" class="">KANTOR</h7><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>

  <!--============================= HEADER =============================-->

    <section>
</section>
<!--//END HEADER -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
  <?php foreach ($post as $row) : ?>
    <?php
      $id_tulisan = $row->tulisan_id;
      $depan = $row->kategori_nama;
      $tengah = $row->nama_ranting;
      $belakang = $row->tulisan_slug;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-img_block">
                    <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar?>" class="img-fluid" alt="">
                    <div class="blog-date">
                        <span><?php echo $row->tulisan_tanggal;?></span>
                    </div>
                </div>
                <div class="blog-tiltle_block">
                    <h4><a href="<?php echo site_url('berita/'.$slug);?>"><?php echo $row->tulisan_judul;?></a></h4>
                    <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->tulisan_author;?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->kategori_nama;?></span></a>  |  <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->nama_ranting;?></span></a></h6>
                 <?php echo $row->tulisan_isi;?>
                </div>
  <?php endforeach;?>

                <div class="blog-tiltle_block">
                  <h6>Bagikan ke:</h6>
                    <div class="">
                        <div class="">
                          <div class="ss-box" data-ss-social="facebook, whatsapp, linkedin, pinterest, twitter"></div>
                        </div>
                    </div>
              </div>


                    <!-- Nav tabs -->
                    <br>
                    <div class="blog-tiltle_block">

                    <div class="tab-pane" id="write-comment" role="tabpanel">
                    <a class="" data-toggle="" role=""><h5><b>| KOMENTAR |</b></h5></a>

                    <br>
                    <div class="clearfix"></div>
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="blogpost-tabs">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments" role="tabpanel">
                              <?php
                                  $colors = array(
                                      '#ff9e67',
                                      '#10bdff',
                                      '#14b5c7',
                                      '#f98182',
                                      '#8f9ce2',
                                      '#ee2b33',
                                      '#d4ec15',
                                      '#613021',
                                  );
                                  foreach ($show_komentar as $row) :
                                  shuffle($colors);
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <br>
                                            <div class="col-md-10">
                                                <div class="blogpost-tab-description">
                                                    <h6><?php echo $row->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></em></small>
                                                    <p><?php echo $row->komentar_isi;?></p>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <?php
                					            $komentar_id=$row->komentar_id;
                					            $query=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");
                					            foreach ($query->result() as $res) :
                                        shuffle($colors);
                					        ?>
                                  <div class="row">
                                      <div class="col-md-12 offset-md-1">
                                          <div class="row">

                                              <div class="col-md-11">
                                                  <div class="blogpost-tab-description">
                                                    <h6><?php echo $res->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></em></small>
                                                   <p><?php echo $res->komentar_isi;?></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php endforeach;?>
                                <?php endforeach;?>
                            </div>
                          </div>
                          <br>
                          <br>
                          <br>
                            <div class="tab-pane" id="write-comment" role="tabpanel">
                              <a class="nav-link active" data-toggle="" role=""><center><h5><b>TINGGALKAN KOMENTAR</b></h5></a>
                              <form action="<?php echo site_url('blog/komentar');?>" method="post" class="row" id="fh5co_contact_form">
                                <input type="hidden" name="depan" value="<?php echo $depan;?>">
                                <input type="hidden" name="tengah" value="<?php echo $tengah;?>">
                                <input type="hidden" name="belakang" value="<?php echo $belakang;?>">
                                  <div class="col-12 py-3">
                                      <input type="text" name="nama" class="form-control fh5co_contact_text_box" placeholder="Enter Your Name" />
                                  </div>
                                  <div class="col-12 py-3">
                                      <input type="email" name="email" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                                  </div>

                                  <div class="col-12 py-3">
                                    <textarea name="komentar"  id="message" rows="6"  class="form-control fh5co_contacts_message" placeholder="Message"></textarea>

                                  </div>

                                  <div class="col-12 py-3 text-center">
                                    <input type="hidden" name="id" value="<?php echo $id_tulisan;?>" required>
                                    <button type="submit" class="btn contact_btn" >Send</button>
                                        </div>
                              </form>

                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
          </div>

            <div class="col-md-4">
              
              <div class="blog-featured_post" >
                  <h3>TAGS</h3>
              <?php $tag = get_tag();?>
              <?php foreach ($tag as $row) : ?>
             <?php $slug = generate_slug($row->kategori_nama); ?>
              <a href="<?php echo generate_tag_url($slug)?>" class="fh5co_tagg"><?php echo $row->kategori_nama;?></a>
            <?php endforeach;?>

              <hr>
                <div class="blog-featured_post" >
                    <h3>Populer</h3>
                    <?php $b_populer = get_berita_populer();?>
                   <?php foreach ($b_populer as $row) :?>
                       <?php $depan = strtolower($row->kategori_nama) ?>
                       <?php $ranting = strtolower($row->nama_ranting) ?>
                       <?php $slug = generate_slug($row->tulisan_slug); ?>
                   <div class="row pb-3">
                       <div class="col-5 align-self-center">
                           <img width="100%" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="blog-featured-img" class="img-fluid">
                       </div>
                       <div class="col-7 paddding">
                           <div class="most_fh5co_treding_font"><a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></div>
                           <div class="most_fh5co_treding_font_123"> <?php echo $row->tulisan_author;?> | <?php echo $row->tulisan_tanggal;?></div>
                           <div class="most_fh5co_treding_font_123"> Views : <?php echo $row->tulisan_views;?></div>
                       </div>
                   </div>
                 <?php endforeach;?>
                </div>
                <hr>
                <div class="blog-featured_post" >
                  <h4><B>SPACE IKLAN</B></h4>
                  <br>
                    <div  class="user blog-featured-img_block">
                        <img width="100%" src="<?php echo base_url().'assets/images/demo/2.jpeg';?>" class="img-fluid" alt="blog-featured-img">
                        <br>
                    </div>
                    <div>

                    <hr>
                </div>
                  <h6><b>More info: 00827329 </b></h6>
            </div>
        </div>
    </div>

</section>
<div class="container-fluid fh5co_footer_bg pb-3">

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> <center> Copyright &copy; <script>document.write(new Date().getFullYear());</script> MWCNU CANDI All rights reserved. </div>

        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<!--//END BLOG -->
<!--============================= FOOTER =============================-->
      <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </script>
        <script src="<?php echo base_url().'theme/js/jssocials.js'?>"></script>
        <script>

        $(document).ready(function(){
          $(".sharePopup").jsSocials({
                showCount: true,
          			showLabel: true,
          			shareIn: "popup",
          			shares: [
          			{ share: "whatsapp", label: "WhatsApp" },
          			{ share: "facebook", label: "Facebook" },
          			{ share: "twitter", label: "Twitter" },
          			{ share: "linkedin", label: "Linkedin" },
          			]
              });
        });
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


        var searchUsers = document.querySelector('#search-users'),
          users = document.querySelectorAll('.user'),
          usersData = document.querySelectorAll('.user-data'),
          searchVal;

        searchUsers.addEventListener('keydown', function() {
        searchVal = this.value.toLowerCase();

        for (var i = 0; i < users.length; i++) {
          if (!searchVal || usersData[i].textContent.toLowerCase().indexOf(searchVal) > -1) {
            users[i].style['display'] = 'contents';
          }
          else {
            users[i].style['display'] = 'none';
          }
        }
        });

        </script>
    </body>

    </html>
