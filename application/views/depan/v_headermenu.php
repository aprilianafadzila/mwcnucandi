<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MWCNU Candi Sidoarjo</title>
<link rel="shortcut icon" href="images/1c.png">
<link rel="stylesheet" href="css/style.css">
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
