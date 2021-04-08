<?php
class Contact extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_kepalayayasan');
      $this->load->model('m_tulisan');
  		$this->load->model('m_datayayasan');
  		$this->load->model('m_galeri');
      $this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
      $x['data']=$this->m_kepalayayasan->get_pengumuman_home();
  		$x['berita']=$this->m_tulisan->get_berita_home();
      $x['contact']=$this->m_datayayasan->get_all_datatk();
      $x['all_galeri']=$this->m_galeri->get_all_galeri();
      $this->load->view('depan/v_contact',$x);

	}

  function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','<p><em>" TERIMA KASIH TELAH MENGHUBUNGI KAMI "</em></p>');
      redirect('contact');
  }
}
