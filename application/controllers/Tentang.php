<?php
class Tentang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
			$this->load->model('m_galeri');
			$this->load->model('m_profiltk');
			$this->load->model('m_datayayasan');

		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_tulisan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;

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
						$x['data']=$this->m_tulisan->berita_perpage($offset,$limit);
						$x['category']=$this->db->get('tbl_kategori');
						$x['profil']=$this->m_profiltk->get_all_tulisan();
						$x['contact']=$this->m_datayayasan->get_all_datatk();
						$x['all_galeri']=$this->m_galeri->get_all_galeri();
						$x['title'] = 'mwcnucandi';
		        $x['description'] = 'Ini adalah Website MWCNU Candi, Kabupaten Sidoarjo, Provinsi Jawa Timur. Isinya Informasi dari situs-situs NU lainnya serta bagaimana MWC  NU Candi beraktivitas. Tujuannya untuk lebih memasyarakatkan dan memudahkan akses informasi kepada warga nahdliyin khususnya di Candi.';
		        $x['keywords'] = 'beritamwcnu, beritanu, berita terkini, berita terbaru Sidoarjo';
						$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
						$slug = $this->m_tulisan->get_all_tag();

						$data = array(

	            'menu' => str_replace("-", " ", $this->input->get('menu',true)),

	            'slug' => $this->input->get('slug', true),

        		);

						$x['menu'] = $data['menu'];
						$x['slug'] = $data['slug'];

						if (!empty($x['menu'])) {

						$this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
	        	$this->db->from('tbl_blog');
	        	$this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
	        	$this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');


	        	$this->db->where('tbl_blog.id_jenis_kategori', 5);
	        	$this->db->where('tbl_ranting.nama', $x['menu']);
	        	$x['post'] = $this->db->get()->result(); //print_r($x['post']); die();

	        	$view = 'depan/v_blog';

			}

			if (!empty($x['menu']) AND !empty($x['slug'])) {

				$this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
	        	$this->db->from('tbl_blog');
	        	$this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
	        	$this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
	        	$this->db->where('tbl_jenis_kategori.id', 5);
	        	$this->db->where('tbl_ranting.nama', $x['menu']);
	        	$this->db->where('tbl_blog.tulisan_slug', $x['slug']);
	        	$x['post'] = $this->db->get()->result();

	        	$query = $this->db->get_where('tbl_blog', array('tulisan_slug' => $x['slug']));
	        	$b=$query->row_array(); //print_r($b); die();

	        	if (!empty($b)) {
	        		$id=$b['tulisan_id']; 
	        	} else {
	        		$id=0;
	        	}
				//print_r($id); die();

				$this->db->query("UPDATE tbl_blog SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$id'");

	        	$x['show_komentar']=$this->m_tulisan->get_all_tulisan_by_slug($id);

	        	$view = 'depan/v_blog_detail';

			}

			$this->load->view($view, $x);


	}
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_tulisan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$this->load->view('depan/v_blog_detail',$x);
		}else{
			redirect('berita');
		}
	}

	function berita($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_tulisan', array('tulisan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['tulisan_id'];
			$this->db->query("UPDATE tbl_tulisan SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_tulisan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['tulisan_id'];
			$x['title']=$row['tulisan_judul'];
			$x['image']=$row['tulisan_gambar'];
			$x['blog'] =$row['tulisan_isi'];
			$x['tanggal']=$row['tanggal'];
			$x['author']=$row['tulisan_author'];
			$x['kategori']=$row['tulisan_kategori_nama'];
			$x['slug']=$row['tulisan_slug'];
			$x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$this->load->view('depan/v_blog_detail',$x);
		}else{
			redirect('berita');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori');
 			 $x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			 $this->load->view('depan/v_blog',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('berita');
		 }
	}

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_tulisan->cari_berita($keyword);
				if($query->num_rows() > 0){
					$x['contact']=$this->m_datayayasan->get_all_datatk();
					$x['all_galeri']=$this->m_galeri->get_all_galeri();
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
          $this->load->view('depan/v_blog',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('berita');
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_tulisan->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['tulisan_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('artikel/'.$slug);
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
					redirect('berita/'.$slug);
				}
		}

}
