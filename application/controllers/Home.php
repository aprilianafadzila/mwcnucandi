<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_ansor');
		$this->load->model('m_profiltk');
		$this->load->model('m_kepalayayasan');
		$this->load->model('m_datayayasan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_redaksi');
		$this->load->model('m_aswaja');
		$this->load->model('m_lknu');
		$this->m_pengunjung->count_visitor();
	}
	function index(){

			$x['title'] = 'mwcnucandi';
      $x['description'] = 'Ini adalah Website MWCNU Candi, Kabupaten Sidoarjo, Provinsi Jawa Timur. Isinya Informasi dari situs-situs NU lainnya serta bagaimana MWC  NU Candi beraktivitas. Tujuannya untuk lebih memasyarakatkan dan memudahkan akses informasi kepada warga nahdliyin khususnya di Candi.';
      $x['keywords'] = 'mwcnucandi, informasi mwcnucandi, artikel terbaru mwcnucandi, berita terbaru mwcnucandi, mwcnucandi Sidoarjo';

			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['all_galeri']=$this->m_galeri->get_all_galeri();
			$x['data']=$this->m_tulisan->get_all_tulisan();
			$x['redaksi']=$this->m_redaksi->get_all_redaksi();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['banom']=$this->m_tulisan->get_all_banom();
			$x['profil']=$this->m_profiltk->get_all_tulisan();
			$x['contact']=$this->m_datayayasan->get_all_datatk();
			$x['tot_guru']=$this->db->query("SELECT * FROM tbl_guru WHERE guru_status = 'Aktif'")->num_rows();
			$x['tot_artikel']=$this->db->get('tbl_tulisan')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$x['populer']=$this->db->query("SELECT * FROM tbl_blog	 ORDER BY tulisan_views DESC LIMIT 5");
			$x['populer2']=$this->db->query("SELECT * FROM tbl_ansor ORDER BY tulisan_views DESC LIMIT 5");
			$x['category']=$this->db->get('tbl_kategori');

		$this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
	    $this->db->from('tbl_blog');
	    $this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
	    $this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
	    $this->db->where('tbl_blog.id_jenis_kategori', 3);
	    $x['post'] = $this->db->get()->result();
		$slug = $this->m_tulisan->get_all_tag();
			$this->load->view('depan/v_home',$x);
	}

}
