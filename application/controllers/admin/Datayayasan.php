<?php
class Datayayasan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_datayayasan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_datayayasan->get_all_datatk();
		$this->load->view('admin/v_datayayasan',$x);
	}

	function simpan_pengumuman(){
		$nama=strip_tags($this->input->post('xnama'));
		$alamat=$this->input->post('xalamat');
		$no_telp=$this->input->post('xno_telp');
		$npsn=$this->input->post('xnpsn');
		$nama_yayasan=$this->input->post('xnama_yayasan');
		$akta=$this->input->post('xakta');
		$ketua_yayasan=$this->input->post('xketua');
		$bentuk=$this->input->post('xbentuk');
		$kegiatan=$this->input->post('xkegiatan');
		$awal_berdiri=$this->input->post('xawal');
		$status=$this->input->post('xstatus');
		$npwp=$this->input->post('xnpwp');
		$email=$this->input->post('xemail');

		$this->m_datayayasan->simpan_pengumuman($nama, $alamat, $no_telp, $npsn, $nama_yayasan, $akta, $ketua_yayasan, $bentuk, $kegiatan, $awal_berdiri, $status, $npwp,$email );
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/datayayasan');
	}

	function update_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$alamat=$this->input->post('xalamat');
		$no_telp=$this->input->post('xno_telp');
		$npsn=$this->input->post('xnpsn');
		$nama_yayasan=$this->input->post('xnama_yayasan');
		$akta=$this->input->post('xakta');
		$ketua_yayasan=$this->input->post('xketua');
		$bentuk=$this->input->post('xbentuk');
		$kegiatan=$this->input->post('xkegiatan');
		$awal_berdiri=$this->input->post('xawal');
		$status=$this->input->post('xstatus');
		$npwp=$this->input->post('xnpwp');
		$email=$this->input->post('xemail');
		$this->m_datayayasan->update_pengumuman($kode,$nama, $alamat, $no_telp, $npsn, $nama_yayasan, $akta, $ketua_yayasan, $bentuk, $kegiatan, $awal_berdiri, $status, $npwp, $email);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/datayayasan');
	}
	function hapus_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_datayayasan->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/datayayasan');
	}

}
