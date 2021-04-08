<?php
class Kepalatk extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepalatk');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kepalatk->get_all_datatk();
		$this->load->view('admin/v_kepalatk',$x);
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
											$nip=$this->input->post('xnip');
											$ttl=$this->input->post('xttl');
											$jk=$this->input->post('xjk');
											$agama=$this->input->post('xagama');
											$pendidikan=$this->input->post('xpendidikan');
											$mulai_bekerja=$this->input->post('xmulai_bekerja');
											$mulai_diangkat=$this->input->post('xmulai_diangkat');
											$masa_kerja=$this->input->post('xmasa_kerja');
											$pangkat=$this->input->post('xpangkat');
											$golongan=$this->input->post('xgolongan');
											$jurusan=$this->input->post('xjurusan');
											$alamat=$this->input->post('xalamat');

		$this->m_kepalatk->simpan_pengumuman($nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat,$photo );
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kepalatk');
	}else{
							echo $this->session->set_flashdata('msg','warning');
							redirect('admin/kepalatk');
					}

			}else{
				$nama=strip_tags($this->input->post('xnama'));
				 $nip=$this->input->post('xnip');
				 $ttl=$this->input->post('xttl');
				 $jk=$this->input->post('xjk');
				 $agama=$this->input->post('xagama');
				 $pendidikan=$this->input->post('xpendidikan');
				 $mulai_bekerja=$this->input->post('xmulai_bekerja');
				 $mulai_diangkat=$this->input->post('xmulai_diangkat');
				 $masa_kerja=$this->input->post('xmasa_kerja');
				 $pangkat=$this->input->post('xpangkat');
				 $golongan=$this->input->post('xgolongan');
				 $jurusan=$this->input->post('xjurusan');
				 $alamat=$this->input->post('xalamat');

				 $this->m_kepalatk->simpan_pengumuman_tanpa_img($nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat);
				 echo $this->session->set_flashdata('msg','success');
				 redirect('admin/kepalatk');
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
		$nip=$this->input->post('xnip');
		$ttl=$this->input->post('xttl');
		$jk=$this->input->post('xjk');
		$agama=$this->input->post('xagama');
		$pendidikan=$this->input->post('xpendidikan');
		$mulai_bekerja=$this->input->post('xmulai_bekerja');
		$mulai_diangkat=$this->input->post('xmulai_diangkat');
		$masa_kerja=$this->input->post('xmasa_kerja');
		$pangkat=$this->input->post('xpangkat');
		$golongan=$this->input->post('xgolongan');
		$jurusan=$this->input->post('xjurusan');
		$alamat=$this->input->post('xalamat');

		$this->m_kepalatk->update_pengumuman($kode,$nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat,$photo);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kepalatk');
	}else{
			echo $this->session->set_flashdata('msg','warning');
			redirect('admin/kepalatk');
	}

}else{
	$kode=strip_tags($this->input->post('kode'));
	$nama=strip_tags($this->input->post('xnama'));
	$nip=$this->input->post('xnip');
	$ttl=$this->input->post('xttl');
	$jk=$this->input->post('xjk');
	$agama=$this->input->post('xagama');
	$pendidikan=$this->input->post('xpendidikan');
	$mulai_bekerja=$this->input->post('xmulai_bekerja');
	$mulai_diangkat=$this->input->post('xmulai_diangkat');
	$masa_kerja=$this->input->post('xmasa_kerja');
	$pangkat=$this->input->post('xpangkat');
	$golongan=$this->input->post('xgolongan');
	$jurusan=$this->input->post('xjurusan');
	$alamat=$this->input->post('xalamat');

	$this->m_kepalatk->update_pengumuman_tanpa_img($kode,$nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat);
	echo $this->session->set_flashdata('msg','info');
	redirect('admin/kepalatk');
}
	}
	function hapus_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_kepalatk->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kepalatk');
	}

}
