<?php
class Download extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_files');
		$this->load->helper('download');
		$this->load->model('m_profiltk');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['data']=$this->m_files->get_all_files();
		$x['profil']=$this->m_profiltk->get_all_tulisan();
		$x['title'] = 'mwcnucandi';
		$x['description'] = 'Ini adalah Website MWCNU Candi, Kabupaten Sidoarjo, Provinsi Jawa Timur. Isinya Informasi dari situs-situs NU lainnya serta bagaimana MWC  NU Candi beraktivitas. Tujuannya untuk lebih memasyarakatkan dan memudahkan akses informasi kepada warga nahdliyin khususnya di Candi.';
		$x['keywords'] = 'download, download berkas, download dokumen mwcnucandi, download SK mwcnucandi';
		$this->load->view('depan/v_download',$x);
	}

	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}

}
