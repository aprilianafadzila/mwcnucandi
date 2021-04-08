<?php
class Galeritk extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_galeritk');
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('m_datayayasan');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['all_galeri']=$this->m_galeritk->get_all_galeri();
		$x['all_galeri1']=$this->m_galeri->get_all_galeri();
		$x['contact']=$this->m_datayayasan->get_all_datatk();
		$this->load->view('depan/v_galeritk',$x);
	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('depan/v_galeri_per_album',$x);
	}
}
