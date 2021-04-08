<?php
class Profiltk extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_profiltk');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_profiltk->get_all_tulisan();
		$this->load->view('admin/v_listprofiltk',$x);
	}
	function add_tulisan(){
		$this->load->view('admin/v_profiltk');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_profiltk->get_tulisan_by_kode($kode);
		$this->load->view('admin/v_edit_profil',$x);
	}
	function simpan_tulisan(){
							$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
													$isi=$this->input->post('xisi');
													$data=$this->m_profiltk->get_tulisan_by_kode($kode);

													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();

													$user_nama=$p['pengguna_nama'];
													$this->m_profiltk->simpan_tulisan($isi,$user_nama,$gambar);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/profiltk');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/profiltk');
	                }

	            }else{
					redirect('admin/profiltk');
				}

	}

	function update_tulisan(){

	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $tulisan_id=$this->input->post('kode');
	                        $isi=$this->input->post('xisi');
													$kode=$this->session->userdata('idadmin');
													$data=$this->m_profiltk->get_tulisan_by_kode($kode);
													$user=$this->m_pengguna->get_pengguna_login($kode);

													$user_nama=$p['pengguna_nama'];
													$this->m_profiltk->update_tulisan($tulisan_id,$isi,$user_nama,$gambar);
													echo $this->session->set_flashdata('msg','info');
													redirect('admin/profiltk');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/profiltk');
	                }

	            }else{
									$tulisan_id=$this->input->post('kode');
									$isi=$this->input->post('xisi');
									$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
									$trim     = trim($string);
									$data=$this->m_profiltk->get_tulisan_by_kode($kode);
									$q=$data->row_array();
									//$imgslider=$this->input->post('ximgslider');
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_pengguna->get_pengguna_login($kode);
									$p=$user->row_array();
									$user_nama=$p['pengguna_nama'];
									$this->m_profiltk->update_tulisan_tanpa_img($tulisan_id,$isi,$user_nama);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/profiltk');
	            }

	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_profiltk->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/profiltk');
	}

}
