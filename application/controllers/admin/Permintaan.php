<?php
class Permintaan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_permintaan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_permintaan->guru();
		$this->load->view('admin/v_add_anggota',$x);
	}

	function ubah(){
		$kode=$this->input->post('kode');
				
		$this->m_permintaan->ubah($kode);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/permintaan');
	}
	function hapus_anggota(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_permintaan->hapus_anggota($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/permintaan');
	}
}