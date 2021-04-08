<?php
class Kepalayayasan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepalayayasan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kepalayayasan->get_all_datatk();
		$this->load->view('admin/v_kepalayayasan',$x);
	}

	function simpan_pengumuman(){
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
											$config['width']= 300;
											$config['height']= 300;
											$config['new_image']= './assets/images/'.$gbr['file_name'];
											$this->load->library('image_lib', $config);
											$this->image_lib->resize();

											$photo=$gbr['file_name'];

											$nama=strip_tags($this->input->post('xnama'));
											$ttl=$this->input->post('xttl');
											$jk=$this->input->post('xjk');
											$agama=$this->input->post('xagama');
											$pendidikan=$this->input->post('xpendidikan');
											$alamat=$this->input->post('xalamat');

		$this->m_kepalayayasan->simpan_pengumuman($nama, $ttl, $jk, $agama, $pendidikan, $alamat,$photo );
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kepalayayasan');
	}else{
							echo $this->session->set_flashdata('msg','warning');
							redirect('admin/kepalayayasan');
					}

			}else{
				$nama=strip_tags($this->input->post('xnama'));
				 $ttl=$this->input->post('xttl');
				 $jk=$this->input->post('xjk');
				 $agama=$this->input->post('xagama');
				 $pendidikan=$this->input->post('xpendidikan');
				 $alamat=$this->input->post('xalamat');

				 $this->m_kepalayayasan->simpan_pengumuman_tanpa_img($nama, $ttl, $jk, $agama, $pendidikan, $alamat);
				 echo $this->session->set_flashdata('msg','success');
				 redirect('admin/kepalayayasan');
			 }
	}


	function update_pengumuman(){
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
								$config['width']= 300;
								$config['height']= 300;
								$config['new_image']= './assets/images/'.$gbr['file_name'];
								$this->load->library('image_lib', $config);
								$this->image_lib->resize();
								$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);

								$photo=$gbr['file_name'];

		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$ttl=$this->input->post('xttl');
		$jk=$this->input->post('xjk');
		$agama=$this->input->post('xagama');
		$pendidikan=$this->input->post('xpendidikan');
		$alamat=$this->input->post('xalamat');

		$this->m_kepalayayasan->update_pengumuman($kode,$nama, $ttl, $jk, $agama, $pendidikan, $alamat,$photo);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kepalayayasan');
	}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/kepalayayasan');
	}

}else{
	$kode=strip_tags($this->input->post('kode'));
	$nama=strip_tags($this->input->post('xnama'));
		$ttl=$this->input->post('xttl');
	$jk=$this->input->post('xjk');
	$agama=$this->input->post('xagama');
	$pendidikan=$this->input->post('xpendidikan');
	$alamat=$this->input->post('xalamat');

	$this->m_kepalayayasan->update_pengumuman_tanpa_img($kode,$nama, $ttl, $jk, $agama, $pendidikan, $alamat);
	echo $this->session->set_flashdata('msg','info');
	redirect('admin/kepalayayasan');
}
	}
	function hapus_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_kepalayayasan->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kepalayayasan');
	}

}
