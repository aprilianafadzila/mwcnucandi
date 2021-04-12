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
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['all_galeri']=$this->m_galeri->get_all_galeri();
			$x['data']=$this->m_kepalayayasan->get_pengumuman_home();
			$x['redaksi']=$this->m_redaksi->get_all_redaksi();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['ansor']=$this->m_ansor->get_all_ansor();
			$x['profil']=$this->m_profiltk->get_all_tulisan();
			$x['contact']=$this->m_datayayasan->get_all_datatk();
			$x['tot_guru']=$this->db->query("SELECT * FROM tbl_guru WHERE guru_status = 'Aktif'")->num_rows();
			$x['tot_artikel']=$this->db->get('tbl_tulisan')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$x['populer2']=$this->db->query("SELECT * FROM tbl_ansor ORDER BY tulisan_views DESC LIMIT 5");
			$x['category']=$this->db->get('tbl_kategori');
			$slug = $this->m_lknu->get_all_tag();
			$this->load->view('depan/v_home',$x);
	}

}
