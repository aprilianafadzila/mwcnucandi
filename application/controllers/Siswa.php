<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['all_galeri']=$this->m_siswa->get_all_siswa();
		$this->load->view('depan/v_siswa',$x);
	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('depan/v_galeri_per_album',$x);
	}
}
