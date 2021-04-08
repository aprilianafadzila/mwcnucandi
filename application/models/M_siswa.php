<?php
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT siswa_id,siswa_nis,siswa_nama,siswa_jenkel,siswa_photo,ttl,jabatan,pendidikan,agama,mulai_bekerja,mulai_diangkat,pangkat,alamat FROM tbl_siswa");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jenkel,$photo,$ttl,$jabatan,$pendidikan,$agama,$mulai_bekerja,$mulai_diangkat,$pangkat,$alamat){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_photo,ttl,jabatan,pendidikan,agama,mulai_bekerja,mulai_diangkat,pangkat,alamat) VALUES ('$nis','$nama','$jenkel','$photo','$ttl','$jabatan','$pendidikan','$agama','$mulai_bekerja','$mulai_diangkat','$pangkat','$alamat')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$ttl,$jabatan,$pendidikan,$agama,$mulai_bekerja,$mulai_diangkat,$pangkat,$alamat){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,ttl,jabatan,pendidikan,agama,mulai_bekerja,mulai_diangkat,pangkat,alamat) VALUES ('$nis','$nama','$jenkel','$ttl','$jabatan','$pendidikan','$agama','$mulai_bekerja','$mulai_diangkat','$pangkat','$alamat')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$photo,$ttl,$jabatan,$pendidikan,$agama,$mulai_bekerja,$mulai_diangkat,$pangkat,$alamat){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel', siswa_photo='$photo', ttl='$ttl', jabatan='$jabatan', pendidikan='$pendidikan', agama='$agama', mulai_bekerja='$mulai_bekerja', mulai_diangkat='$mulai_diangkat', pangkat='$pangkat', alamat='$alamat' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$ttl,$jabatan,$pendidikan,$agama,$mulai_bekerja,$mulai_diangkat,$pangkat,$alamat){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel', ttl='$ttl', jabatan='$jabatan', pendidikan='$pendidikan', agama='$agama', mulai_bekerja='$mulai_bekerja', mulai_diangkat='$mulai_diangkat', pangkat='$pangkat', alamat='$alamat' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT siswa_id,siswa_nis,siswa_nama,siswa_jenkel,siswa_photo,ttl,jabatan,pendidikan,agama,mulai_bekerja,mulai_diangkat,pangkat,alamat FROM tbl_siswa");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT siswa_id,siswa_nis,siswa_nama,siswa_jenkel,siswa_photo FROM tbl_siswa limit $offset,$limit");
		return $hsl;
	}

}
