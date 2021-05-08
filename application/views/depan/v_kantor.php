<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MWCNU Candi Sidoarjo</title>
<link rel="shorcut icon" href="<?php echo base_url().'images/logo1.png'?>">
<meta name="description" content="<?php echo ($description); ?>" />

<meta name="keywords" content="<?php echo ($keywords); ?>" />

<meta name="author" content="<?php echo ($title); ?>" />
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

  <div class="container-fluid  fh5co_fh5co_bg_contcat">
      <div class="container">
          <div class="row py-4">
              <div class="col-md-4 py-3">
                  <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                      <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                          <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                      </div>
                      <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                          <span class="c_g d-block">Call Us</span>
                            <?php foreach ($contact->result() as $row) : ?>
                          <span class="d-block c_g fh5co_contact_us_no_text"><?php echo $row->no_telp;?></span>
                        <?php endforeach;?>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="col-md-4 py-3">
                  <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                      <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                          <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                      </div>
                      <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                          <span class="c_g d-block">Have any questions?</span>
                            <?php foreach ($contact->result() as $row) : ?>
                          <span class="d-block c_g fh5co_contact_us_no_text"><?php echo $row->email;?></span>
                        <?php endforeach;?>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="col-md-4 py-3">
                  <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                      <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                          <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                      </div>
                      <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                          <span class="c_g d-block">Address</span>
                            <?php foreach ($contact->result() as $row) : ?>
                          <span class="d-block c_g fh5co_contact_us_no_text"> <?php echo $row->alamat;?></span>
                        <?php endforeach;?>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="clearfix"></div>
          </div>
      </div>
  </div>
  <div class="container-fluid mb-4">
      <div class="container">
          <div class="col-12 text-center contact_margin_svnit ">
              <div class="text-center fh5co_heading py-2"><b>HUBUNGI KAMI</b></div>
          </div>
          <div class="row">
              <div class="col-12 col-md-6">
                <?php echo $this->session->flashdata('msg');?>
                  <form action="<?php echo site_url('kantor/kirim_pesan');?>" method="post" class="row" id="fh5co_contact_form">
                      <div class="col-12 py-3">
                          <input type="text" name="xnama" class="form-control fh5co_contact_text_box" placeholder="Enter Your Name" />
                      </div>
                      <div class="col-12 py-3">
                          <input type="email" name="xemail" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                      </div>

                      <div class="col-12 py-3">
                        <textarea name="xmessage"  id="message"  class="form-control fh5co_contacts_message" placeholder="Message"></textarea>

                      </div>
                      <div class="col-12 py-3 text-center"> <button type="submit" class="btn contact_btn" >Send</button>

                  </form>
              </div>
            </div>
              <div class="col-12 col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8662725561276!2d112.711376214323!3d-7.48001577582812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0d29f1beae1%3A0x8850e78c2c479d30!2sJl.%20Raya%20Candi%20No.16%2C%20Candi%20Sayang%2C%20Bligo%2C%20Kec.%20Candi%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur%2061271!5e0!3m2!1sid!2sid!4v1617155568687!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
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
                
                <div class="footer_makes_sub_font"></div>
                <a href="" class="footer_post pb-4">  </a>

            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> PENGURUS</div>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/2.PNG" alt="img"/></a>
              </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                     <form action="<?php echo site_url('subscribe/kirim_pesan');?>" method="post" class="row" id="fh5co_contact_form">
                    <input type="email" name="xemail" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1"/>
                    <button type="submit" class="btn contact_btn" > <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a> </button>
                  </form>
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
                <a href="kantor" class="footer_last_part_menu">Latest News</a></div>
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
