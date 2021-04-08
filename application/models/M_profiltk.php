<?php
class M_profiltk extends CI_Model{

	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT tulisan_id, tulisan_isi, tulisan_gambar, tulisan_author  FROM tbl_profiltk ");
		return $hsl;
	}
	function simpan_tulisan($tulisan_isi,$user_nama,$gambar){
		$hsl=$this->db->query("insert into tbl_profiltk(tulisan_isi,tulisan_author,tulisan_gambar) values ('$tulisan_isi','$user_nama','$gambar')");
		return $hsl;
	}

	function update_tulisan($tulisan_id,$tulisan_isi,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_profiltk set tulisan_isi='$tulisan_isi',tulisan_author='$user_nama',tulisan_gambar='$gambar' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function update_tulisan_tanpa_img($tulisan_id,$tulisan_isi,$user_nama){
		$hsl=$this->db->query("update tbl_profiltk set tulisan_isi='$tulisan_isi',tulisan_author='$user_nama' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tulisan_id, tulisan_isi, tulisan_gambar, tulisan_author FROM tbl_profiltk where tulisan_id='$kode'");
		return $hsl;
	}
	function hapus_tulisan($kode){
		$hsl=$this->db->query("delete from tbl_profiltk where tulisan_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_img_slider='1' ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function get_berita_home(){
		$hsl=$this->db->query("SELECT tbl_profiltk.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit 4");
		return $hsl;
	}

	function berita_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}

	function cari_berita($keyword){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_tulisan_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
