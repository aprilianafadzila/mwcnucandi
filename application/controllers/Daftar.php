<?php
class Daftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_anggota');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['tot_guru']=$this->db->query("SELECT * FROM tbl_guru WHERE guru_status = 'Aktif'")->num_rows();
		$x['tot_artikel']=$this->db->get('tbl_tulisan')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$x['pro']=$this->m_anggota->get_all_prodi();

		$this->load->view('depan/v_daftar',$x);
	}
	function simpan_anggota(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->load->library('upload', $config);
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
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$mapel=strip_tags($this->input->post('xmapel'));
							$email=$this->input->post('xemail');
                            $nohp=$this->input->post('xkontak');

							$this->m_anggota->simpan_anggota($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('daftar');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('daftar');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$mapel=strip_tags($this->input->post('xmapel'));
					$email=$this->input->post('xemail');
					$nohp=$this->input->post('xkontak');

					$this->m_anggota->simpan_anggota_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp);
					echo $this->session->set_flashdata('msg','success');
					redirect('daftar');
				}
				
	}

}
