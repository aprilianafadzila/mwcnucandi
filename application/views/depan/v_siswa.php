<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>YAYASAN BUSYRI AL-ALY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
<?php
		function limit_words($string, $word_limit){
				$words = explode(" ",$string);
				return implode(" ",array_splice($words,0,$word_limit));
		}
?>
<style type="text/css">
body{
	color:#F9F9F9;
	background: url('assets/images/demo/2.jpg');
	background-size:cover;

}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <div class="rounded">
			<div id="topbar" class="clear">
		    <!-- ################################################################################################ -->
		  </div>
	    <nav id="mainav" class="clear">
	      <!-- ################################################################################################ -->
	      <ul class="clear">
	        <li class=""><a href="home"><strong>Home</strong></a></li>
	        <li class=""><a href="donasi"><strong>Donasi</strong></a></li>
	        <li><a class="drop" href="#"><strong>Profil</strong></a>
	          <ul>
	            <li><a href="datatk">TK Muslimat NU 02 Nurul Huda Miji</a></li>
	            <li><a href="pages/portfolio.html">MI Nurul Huda</a></li>
	          </ul>
	        </li>
	        <li class=""><a href="galeri"><strong>Gallery</strong></a></li>
	        <li class=""><a href="blog"><strong>Artikel</strong></a></li>
	        <li class=""><a href="pengumuman"><strong>PENGUMUMAN</strong></a></li>
	        <li><a class="drop" href="#"><strong>Pendaftaran</strong></a>
	          <ul>
	            <li><a href="download">TK Muslimat NU 02 Nurul Huda Miji</a></li>
	            <li><a href="pages/portfolio.html">MI Nurul Huda</a></li>
	          </ul>
	        </li>
					<li><a href="contact"><strong>Contact</strong></a></li>
					<li><a href="http://localhost/yayasan/administrator"><strong>Login</strong></a></li>
				</ul>

	      <!-- ################################################################################################ -->
	    </nav>
	  </div>
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear">
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="assets/images/demo/slider/1.jpg" alt=""></a>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="assets/images/demo/slider/sl-2.jpg" alt=""></a>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="assets/images/demo/slider/3.png" alt=""></a>

      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="assets/images/demo/slider/4.png" alt=""></a>

      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="assets/images/demo/slider/5.png" alt=""></a>

      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">Profil YAYASAN BUSYRI AL-ALY Miji</a></li>
        <li><a href="#slide-2">Why You Should Study With Us</a></li>
        <li><a href="#slide-3">Education And Student Experience</a></li>
        <li><a href="#slide-4">Alumni And Its Donors</a></li>
        <li><a href="#slide-5">Latest University News &amp; Events</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>

          <header class="heading">Daftar Guru TK</header>

          <ul class="nospace clear">
                <?php foreach ($all_galeri->result() as $row) : ?>
            <li class="one_quarter">
              <a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo base_url().'assets/images/'.$row->siswa_photo;?>" title="Picture">
                <img class="borderedbox" src="<?php echo base_url().'assets/images/'.$row->siswa_photo;?>" alt="">

              </a>
							<p align="center"><?php echo $row->siswa_nama;?></p>
						</li>
              <?php endforeach;?>
              </ul>

        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
 <main class="container clear">
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="/images/demo/worldmap.png" alt="">
          <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        Miji Gang 2 No.8<br>
        Mojokerto<br>
        61233<br>
        <br>
        <i class="fa fa-phone pright-10"></i> 0822-2318-4187<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">yayasannurulhuda@gmail.com</a>
        </address>
          <br>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    <br>
    <br>
     <address>
          Copyright @ 2020-All Rights Reserved
    </address>
        </form>
        </div>

      <!-- ################################################################################################ -->
    </footer>
    <br>
  </div>

</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- JAVASCRIPTS -->
<script src="assets/layout/scripts/jquery.min.js"></script>
<script src="assets/layout/scripts/jquery.fitvids.min.js"></script>
<script src="assets/layout/scripts/jquery.mobilemenu.js"></script>
<script src="assets/layout/scripts/tabslet/jquery.tabslet.min.js"></script>
<script src="assets/layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
</body>
</html>
