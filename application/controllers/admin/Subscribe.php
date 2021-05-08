<?php
class Subscribe extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_subscribe');
	}

	function index(){
		$x['data']=$this->m_subscribe->get_all_inbox();
		$this->load->view('admin/v_subscribe',$x);
	}

	function hapus_inbox(){
		$kode=$this->input->post('kode');
		$this->m_subscribe->hapus_kontak($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/subscribe');
	}
}