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
</div>

<div class="padding-page">
<div class="container-fluid pb-4 pt-4 paddding" style="background:#ffffff;">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><b>TAGS (<?php echo $tag; ?>)</b></div>
                </div>

                <?php echo $this->session->flashdata('msg');?>
                <?php foreach ($post as $row) : ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box"><br><br>
                        <a href="<?php echo generate_tag_url_redaksi($row->tulisan_slug)?>" class="fh5co_magna py-2"> <?php echo $row->tulisan_judul;?> </a> <a href="#" class="fh5co_mini_time py-3"> </a>
                        <br>

                        <a class="fh5co_mini_time py-3"> <i class="fa fa-user" aria-hidden="true"></i> <span> <?php echo $row->tulisan_author;?> |
                        <?php echo $row->tulisan_tanggal;?> | </span></a>
                          <br>
                        <div class="fh5co_consectetur"> <?php echo $row->tulisan_isi;?>
                        </div>
                          <a href="#" class="">Read More</a>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"></b>TAGS</b></div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                  <?php foreach ($category->result() as $row) : ?>
                     <?php $slug = generate_slug($row->kategori_nama); ?>
                    <a href="<?php echo generate_tag_url($slug)?>" class="fh5co_tagg"><?php echo $row->kategori_nama;?></a>
                  <?php endforeach;?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4"><b>BERITA POPULER</b></div>
                </div>
                  <?php foreach ($populer->result() as $row) :?>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                      <div class="most_fh5co_treding_font"><a href="<?php echo site_url('berita/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></div>
                      <div class="most_fh5co_treding_font_123"> <?php echo $row->tulisan_author;?> | <?php echo $row->tulisan_tanggal;?></div>
                    </div>
                </div>
              <?php endforeach;?>
            </div>
        </div>
        </div>

<div class="padding-page">
<div class="container-fluid fh5co_video_news_bg pb-4" style="background:#ffffff; ">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">VIDEO TERBARU</div>
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

        <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
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
</body>
</html>
