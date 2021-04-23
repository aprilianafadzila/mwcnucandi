<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><b>TAGS</b></div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        <?php $tag = get_tag();?>
        <?php foreach ($tag as $row) : ?>
       <?php $slug = generate_slug($row->kategori_nama); ?>
        <a href="<?php echo generate_tag_url($slug)?>" class="fh5co_tagg"><?php echo $row->kategori_nama;?></a>
      <?php endforeach;?>
    </div>
    <div>


        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4"><b>BERITA POPULER</b></div>
    </div>
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