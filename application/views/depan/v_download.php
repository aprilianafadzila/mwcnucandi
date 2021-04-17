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
