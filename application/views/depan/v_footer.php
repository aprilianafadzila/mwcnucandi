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
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="images/logo1.png" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="footer_main_title py-3"> TENTANG KAMI</div>
                <?php foreach ($profil->result() as $row) : ?>
                <div class="footer_sub_about pb-3"><?php echo $row->tulisan_isi;?></div>
              <?php endforeach;?>
                <div class="footer_mediya_icon">
                  <div class="text-center d-inline-block"><a href="#" class="fh5co_display_table_footer">
                      <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                  </a></div>
                    <div class="text-center d-inline-block"><a href="#" class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a href="#" class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-whatsapp"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a href="#" class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a href="#" class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>

                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                <?php echo $this->session->flashdata('msg');?>
                <?php foreach ($post as $row) : ?>

                    <?php $depan = strtolower($row->kategori_nama) ?>
                    <?php $ranting = strtolower($row->nama_ranting) ?>
                    <?php $slug = generate_slug($row->tulisan_slug); ?>
                <div class="footer_makes_sub_font"><?php echo $row->tulisan_tanggal;?></div>
                <a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>" class="footer_post pb-4"> <?php echo limit_words($row->tulisan_judul,3).'...';?> </a>
      <?php endforeach;?>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> PENGURUS</div>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> Copyright &copy; <script>document.write(new Date().getFullYear());</script> MWCNU CANDI All rights reserved. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <a href="home" class="footer_last_part_menu">Home</a>
                <a href="kantor" class="footer_last_part_menu">About</a>
                <a href="kantor" class="footer_last_part_menu">Contact</a>
                <a href="home" class="footer_last_part_menu">Latest News</a></div>
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
