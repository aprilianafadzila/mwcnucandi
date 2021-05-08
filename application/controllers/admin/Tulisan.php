<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		//$x['data']=$this->m_tulisan->get_all_tulisan();

		$data = array(

				'jenis' => str_replace("-", " ", $this->input->get('jenis',true)),

	            'menu' => str_replace("-", " ", $this->input->get('menu',true))

        		);

		if (!empty($data['jenis']) AND !empty($data['menu'])) {

			$where = array(
				'tbl_ranting.nama' => $data['menu'],
				'tbl_jenis_kategori.id' => $data['jenis']
			);

		} elseif (!empty($data['jenis'])) {
			
			$where = array('tbl_jenis_kategori.id' => $data['jenis']);

		}

		$x['jenis'] = ($this->input->get('jenis',true));

		$this->db->select('tbl_blog.*, tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting, tbl_kategori.kategori_nama as kategori_nama_tag, tbl_jenis_kategori.nama as nama_menu, tbl_ranting.nama as sub_menu');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
		$this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
		$this->db->join('tbl_kategori','tbl_blog.tulisan_kategori_id = tbl_kategori.kategori_id','left');
		if (!empty($data['jenis'])) {
			$this->db->where($where);
		}
		

		$x['data'] = $this->db->get()->result();
		$this->load->view('admin/v_tulisan',$x);
	}
	function add_tulisan(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_tulisan',$x);
	}
	function get_edit($id){
		$kode=$this->uri->segment(4);
		$query = $this->m_tulisan->get($id);
		if ($query->num_rows() > 0) {
			$item = $query->row(); 

			$x['product_id'] = $item->tulisan_id;
			$x['data'] = $this->m_tulisan->get_tulisan_by_kode($kode);
			$x['kat']=$this->m_kategori->get_all_kategori();
			$x['category'] = $this->m_kategori->get_kategori()->result();
			$x['sub_category_id'] = $item->id_ranting; //print_r($x['sub_category_id']); die();
			
		$this->load->view('admin/v_edit_tulisan',$x);
		} else {
			echo "<script>alert('Data Tidak Ditemukan !!');";
			echo "window.location='".site_url('admin/tulisan')."';</script>";
		}

		
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
													$judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_kategori->get_kategori_byid($kategori_id);
													$q=$data->row_array();
													$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_tulisan->simpan_tulisan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/tulisan');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/tulisan');
	                }

	            }else{
					redirect('admin/tulisan');
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
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');
							$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
							$trim     = trim($string);
							$slug     = strtolower(str_replace(" ", "-", $trim));
							$kategori_id=strip_tags($this->input->post('xkategori'));
							$data=$this->m_kategori->get_kategori_byid($kategori_id);
							$q=$data->row_array();
							$kategori_nama=$q['kategori_nama'];
							//$imgslider=$this->input->post('ximgslider');
							$imgslider='0';
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$kategorii = $this->input->post('category');
							$menu = $this->input->post('sub_category');

							$data = array(
								'tulisan_id' => $this->input->post('kode'),
								'id_ranting' => $this->input->post('sub_category'),
								'id_jenis_kategori' => $this->input->post('category'),
								'tulisan_judul' => strip_tags($this->input->post('xjudul')),
								'tulisan_isi' => $this->input->post('xisi'),
								'tulisan_kategori_id' => strip_tags($this->input->post('xkategori')),
								'tulisan_kategori_nama' => $q['kategori_nama'],
								'tulisan_gambar' => $gambar,
								'tulisan_img_slider' => $imgslider,
								'tulisan_pengguna_id' => $p['pengguna_id'],
								'tulisan_author' => $p['pengguna_nama'],
								'tulisan_slug' => strtolower(str_replace(" ", "-", $trim))
							);

							$where = array('tulisan_id' => $this->input->post('kode'));

							$this->m_tulisan->update_data($where,$data,'tbl_blog');
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/tulisan');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/tulisan');
	                }

	            }else{
					$tulisan_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');
							$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
							$trim     = trim($string);
							$slug     = strtolower(str_replace(" ", "-", $trim));
							$kategori_id=strip_tags($this->input->post('xkategori'));
							$data=$this->m_kategori->get_kategori_byid($kategori_id);
							$q=$data->row_array();
							$kategori_nama=$q['kategori_nama'];
							//$imgslider=$this->input->post('ximgslider');
							$imgslider='0';
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$kategorii = $this->input->post('category');
							$menu = $this->input->post('sub_category');

							$data = array(
								'tulisan_id' => $this->input->post('kode'),
								'id_ranting' => $this->input->post('sub_category'),
								'id_jenis_kategori' => $this->input->post('category'),
								'tulisan_judul' => strip_tags($this->input->post('xjudul')),
								'tulisan_isi' => $this->input->post('xisi'),
								'tulisan_kategori_id' => strip_tags($this->input->post('xkategori')),
								'tulisan_kategori_nama' => $q['kategori_nama'],
								'tulisan_pengguna_id' => $p['pengguna_id'],
								'tulisan_author' => $p['pengguna_nama'],
								'tulisan_slug' => strtolower(str_replace(" ", "-", $trim))
							); 

							$where = array('tulisan_id' => $this->input->post('kode'));

							$this->m_tulisan->update_data($where,$data,'tbl_blog');

							
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/tulisan');
	            }

	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tulisan');
	}

	// get sub category by category_id
	function get_sub_category(){
		$category_id = $this->input->post('id',TRUE);
		$data = $this->m_kategori->get_sub_category($category_id)->result();
		echo json_encode($data);
	}

	function get_data_edit(){
		$product_id = $this->input->post('product_id',TRUE);
		$data = $this->m_kategori->get_product_by_id($product_id)->result();
		echo json_encode($data);
	}

}
