<?php 
class M_anggota extends CI_Model{

	function anggota(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE guru_status = 'Aktif'");
		return $hsl;
	}

	function get_all_prodi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prodi");
		return $hsl;
	}

	function simpan_anggota($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel,guru_email,guru_nohp,guru_photo,guru_status) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$email','$nohp','$photo','Tidak Aktif')");
		return $hsl;
	}
	function simpan_anggota_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel,guru_email,guru_nohp,guru_status) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$email','$nohp','Tidak Aktif')");
		return $hsl;
	}

	function update_anggota($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp,$status,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel',guru_email='$email',guru_nohp='$nohp',guru_photo='$photo',guru_status='$status' WHERE guru_id='$kode'");
		return $hsl;
	}
	function update_anggota_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$email,$nohp,$status){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel',guru_email='$email',guru_nohp='$nohp',guru_status='$status' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_anggota($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	//front-end
	
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

}