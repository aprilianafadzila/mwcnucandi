<?php
class Isnu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_isnu');
			$this->load->model('m_galeri');
			$this->load->model('m_datayayasan');

		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_isnu->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'blog/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_isnu->berita_perpage($offset,$limit);
						$x['category']=$this->db->get('tbl_kategori');
						$x['contact']=$this->m_datayayasan->get_all_datatk();
						$x['all_galeri']=$this->m_galeri->get_all_galeri();
						$x['populer']=$this->db->query("SELECT * FROM tbl_isnu ORDER BY tulisan_views DESC LIMIT 5");
						$this->load->view('depan/v_blog',$x);
	}
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_isnu', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tbl_isnu SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_isnu->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->m_isnu->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT * FROM tbl_isnu ORDER BY tulisan_views DESC LIMIT 5");
			$this->load->view('depan/v_blog_detail',$x);
		}else{
			redirect('isnu');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_isnu.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_isnu WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori');
 			 $x['populer']=$this->db->query("SELECT * FROM tbl_isnu ORDER BY tulisan_views DESC LIMIT 5");
			 $this->load->view('depan/v_blog',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('isnu');
		 }
	}

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_isnu->cari_berita($keyword);
				if($query->num_rows() > 0){
					$x['contact']=$this->m_datayayasan->get_all_datatk();
					$x['all_galeri']=$this->m_galeri->get_all_galeri();
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_isnu ORDER BY tulisan_views DESC LIMIT 5");
          $this->load->view('depan/v_blog',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('isnu');
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_isnu->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['tulisan_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('isnu/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_tulisan_id' => $kode
					);

					$this->db->insert('tbl_komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Anda akan tampil setelah moderasi.</div>');
					redirect('isnu/'.$slug);
				}
		}

}
