<?php
class Datatk extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_datatk');
		$this->load->model('m_siswa');
		$this->load->model('m_galeritk');
		$this->load->model('m_profiltk');
		$this->load->model('m_galeri');
		$this->load->model('m_datayayasan');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){

            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_datatk->pengumuman();
						$x['data1']=$this->m_datatk->siswa();
						$x['data2']=$this->m_datatk->kepalatk();
						$x['contact']=$this->m_datayayasan->get_all_datatk();
						$x['all_galeri1']=$this->m_galeri->get_all_galeri();
						$x['all_galeri']=$this->m_siswa->get_all_siswa();
						$x['galeri']=$this->m_galeritk->get_all_galeri();
						$x['profil']=$this->m_profiltk->get_all_tulisan();
						$this->load->view('depan/v_datatk',$x);
	}

}
