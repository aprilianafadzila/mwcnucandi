<link rel="shortcut icon" href="images/logo.png" <link rel="stylesheet" href="css/style.css">
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

<body>
<div class="padding-page">
<?php
 $this->load->view('depan/v_header');
?>
</div>

<div class="padding-page">
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786" style="background:#00702d;">
<?php
 $this->load->view('depan/v_headermenu');
?>
</div>
</div>


<div class="padding-page">
<div class="" style="background:#ffffff;">

    <div class="mx-0" style="display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
        <div class="slider col-md-8 col-16 paddding animate-box" data-animate-effect="fadeIn" style="padding-left: 0px !important; padding-right: 5px !important;">
            <?php $banner = get_data_banner();?>
            <?php foreach ($banner as $row) : ?>
                <?php $depan = strtolower($row->kategori_nama) ?>
                <?php $ranting = strtolower($row->nama_ranting) ?>
                <?php $slug = generate_slug($row->tulisan_slug); ?>
            <div  class="slide">
            <div class="fh5co_suceefh5co_height">
              <div class="course-content">
                <div class="slider-wrapper theme-default">
                <div class="ribbons"></div>


                    <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" class="col-12" widht="200px;" title="" />


                </div>
              </div>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""> <i class=" "></i><?php echo $row->tulisan_tanggal;?>
                  </div><br>
                  <div class=""><a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>" class="color_fff"> <?php echo $row->tulisan_judul;?></a>
                  </div>
                    <div class=""><a href="#" class="fh5co_good_font">  </a></div>
                </div>
            </div>
            </div>
        <?php endforeach;?>

        </div>

        <div ID="hiddenslider">
        <div class="col-md-6">

            <div class="row">
                <div class="mx-0" style="display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                    <div class="col-md-8 col-3 paddding animate-box" data-animate-effect="fadeIn" style="padding-bottom: 5px !important;">
                    <div style=" height: 180px; overflow: hidden; width: 100%; position: relative;"><img src="images/2.png" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div style="position: absolute; width: 100%; height: 100%; color: #fff; z-index: 7; top: 50%; left: 5%; padding: 0 10px;">
                            <div class=""><a href="#" class="color_fff"> <i class=" "></i> </a></div>
                            <div class=""><a href="#" style="font-size: 14px; color:#ffffff;"></a></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mx-0" style="display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                    <div class="col-md-8 col-3 paddding animate-box" data-animate-effect="fadeIn" style="padding-bottom: 5px !important;">
                    <div style=" height: 180px; overflow: hidden; width: 100%; position: relative;"><img src="images/2.png" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div style="position: absolute; width: 100%; height: 100%; color: #fff; z-index: 7; top: 50%; left: 5%; padding: 0 10px;">
                            <div class=""><a href="#" class="color_fff"> <i class=" "></i>  </a></div>
                            <div class=""><a href="#" style="font-size: 14px; color:#ffffff;"></a></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mx-0" style="display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                    <div class="col-md-8 col-3 paddding animate-box" data-animate-effect="fadeIn" style="padding-bottom: 5px !important;">
                    <div style=" height: 180px; overflow: hidden; width: 100%; position: relative;"><img src="images/2.png" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div style="position: absolute; width: 100%; height: 100%; color: #fff; z-index: 7; top: 50%; left: 5%; padding: 0 10px;">
                            <div class=""><a href="#" class="color_fff"> <i class=" "></i> </a></div>
                            <div class=""><a href="#" style="font-size: 14px; color:#ffffff;"></a></div>
                        </div>
                    </div>
                </div>
                </div>


            </div>
        </div>
        </div>
    </div>
</div>
</div>

<div class="padding-page">
<div class="container-fluid pb-4 pt-5" style="background:#ffffff; ">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><b>BERITA TERKINI</b></div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php $blog_all = get_blog_all();?>
              <?php foreach ($blog_all as $row) : ?>
                <?php $depan = strtolower($row->kategori_nama) ?>
                <?php $ranting = strtolower($row->nama_ranting) ?>
                <?php $slug = generate_slug($row->tulisan_slug); ?>
            <div class="item px-2">

                <div class="fh5co_hover_news_img">
                    <div class="col-20 align-self-center"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-featured-img"/></div>
                    <br>
                    <div>
                        <a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>" class="d-block fh5co_small_post_heading"><span class=""><b>"<?php echo $row->tulisan_judul;?>"</b></span></a>
                        <div class="c_g"><i class=" "></i> <?php echo $row->tulisan_tanggal;?></div>
                    </div>
                </div>
            </div>
          <?php endforeach;?>
        </div>
    </div>
</div>
</div>

<div class="padding-page">
<div class="container-fluid pb-4 pt-5 paddding" style="background:#ffffff;">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><b>ARTIKEL TERBARU</b></div>
                </div>

                <div class="row pb-4">

                 <?php echo $this->session->flashdata('msg');?>
                  <?php foreach ($post as $row) : ?>
                    <?php $depan = strtolower($row->kategori_nama) ?>
                    <?php $ranting = strtolower($row->nama_ranting) ?>
                    <?php $slug = generate_slug($row->tulisan_slug); ?>
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">

                      <h6 class="text-white" style=" padding: 10px 15px; -moz-transition: all .5s ease;-o-transition: all .5s ease;-webkit-transition: all .5s ease; -ms-transition: all .5s ease; transition: all .5s ease; display: inline-block; height: 30px; "><center><i> Redaksi </i></center></h6>
                            <div class="col-20 align-self-center">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="blog-featured-img" class="img-fluid"/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box"><br><br>
                        <a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>" class="fh5co_magna py-2"> <?php echo $row->tulisan_judul;?> </a>
                        <br>
                        <a class="fh5co_mini_time py-3"> <i class="fa fa-user" aria-hidden="true"></i> <span> <?php echo $row->tulisan_author;?> |
                        <?php echo $row->tulisan_tanggal;?> | </span></a>
                        <div class="fh5co_consectetur"> <?php echo limit_words($row->tulisan_isi,30).'...';?>
                        </div>
                        <a href="<?php echo generate_url_detail($depan, $ranting, $slug)?>" class="">Read More</a>

                    </div>
                    <nav>
                        <?php error_reporting(0); echo $page;?>
                    </nav>
                  <?php endforeach;?>
                </div>

            </div>

            <?php
                $this->load->view('depan/v_side_right');
             ?>
        </div>
        </div>
      </div>

<div class="padding-page">
<div class="container-fluid fh5co_video_news_bg pb-4" style="background:#ffffff; ">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-black"><b>VIDEO TERBARU</b></div>
        </div>
        <?php
         $this->load->view('depan/v_youtube');
        ?>
    </div>
</div>
</div>

<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
        <a href="home" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>

        <a href="berita" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
     </div>
</div>
</div>
</div>

<?php
 $this->load->view('depan/v_footer');
?>


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
    $(".slider").not('.slick-initialized').slick({
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
</body>
</html>
