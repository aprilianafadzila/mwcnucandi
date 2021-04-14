<?php
class Kantor extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_tulisan');
  		$this->load->model('m_datayayasan');
  		$this->load->model('m_profiltk');
  		$this->load->model('m_kantor');
      $this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
      $x['berita']=$this->m_tulisan->get_berita_home();
      $x['contact']=$this->m_kantor->get_all_kantor();
			$x['profil']=$this->m_profiltk->get_all_tulisan();
      $x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
      $x['title'] = 'mwcnucandi';
      $x['description'] = 'Ini adalah Website MWCNU Candi, Kabupaten Sidoarjo, Provinsi Jawa Timur. Isinya Informasi dari situs-situs NU lainnya serta bagaimana MWC  NU Candi beraktivitas. Tujuannya untuk lebih memasyarakatkan dan memudahkan akses informasi kepada warga nahdliyin khususnya di Candi.';
      $x['keywords'] = 'tempat mwcnucandi, informasi mwcnucandi, kontak mwcnucandi Sidoarjo, alamat mwcnucandi Sidoarjo, lokasi mwcnucandi Sidoarjo';
      $this->load->view('depan/v_kantor',$x);

	}

  function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','<p><em>" TERIMA KASIH TELAH MENGHUBUNGI KAMI "</em></p>');
      redirect('kantor');
  }
}
