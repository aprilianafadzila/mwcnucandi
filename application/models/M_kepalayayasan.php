<?php
class M_kepalayayasan extends CI_Model{

	function get_all_datatk(){
		$hsl=$this->db->query("SELECT id, nama, ttl, jk, agama,pendidikan,alamat,photo FROM tbl_kepalayayasan ");
		return $hsl;
	}
	function simpan_pengumuman($nama, $ttl, $jk, $agama, $pendidikan, $alamat, $photo){
		$hsl=$this->db->query("INSERT INTO tbl_kepalayayasan(nama, ttl, jk, agama,pendidikan, alamat, photo ) VALUES ('$nama', '$ttl', '$jk', '$agama', '$pendidikan', '$alamat', '$photo')");
		return $hsl;
	}
	function simpan_pengumuman_tanpa_img($nama, $ttl, $jk, $agama, $pendidikan, $alamat){
		$hsl=$this->db->query("INSERT INTO tbl_kepalayayasan (nama, ttl, jk, agama,pendidikan, alamat) VALUES ('$nama', '$ttl', '$jk', '$agama', '$pendidikan', '$alamat')");
		return $hsl;
	}
	function update_pengumuman($kode,$nama, $ttl, $jk, $agama, $pendidikan,  $alamat,$photo){
		$hsl=$this->db->query("UPDATE tbl_kepalayayasan SET nama='$nama',ttl='$ttl',jk='$jk',agama='$agama',pendidikan='$pendidikan',alamat='$alamat',photo='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_pengumuman_tanpa_img($kode,$nama, $ttl, $jk, $agama, $pendidikan, $alamat){
		$hsl=$this->db->query("UPDATE tbl_kepalayayasan SET nama='$nama', ttl='$ttl', jk='$jk', agama='$agama', pendidikan='$pendidikan', alamat='$alamat' WHERE id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kepalayayasan WHERE id='$kode'");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT id, nama, ttl, jk, agama,pendidikan, alamat, photo FROM tbl_kepalayayasan ");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT id, nama, ttl, jk, agama,pendidikan, alamat, photo) FROM tbl_kepalayayasan  ");
		return $hsl;
	}
	function get_pengumuman_home(){
		$hsl=$this->db->query("SELECT id, nama, ttl, jk, agama, pendidikan, alamat, photo FROM tbl_kepalayayasan");
		return $hsl;
	}



}
