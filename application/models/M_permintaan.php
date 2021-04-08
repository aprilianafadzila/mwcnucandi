<?php 
class M_permintaan extends CI_Model{

	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE guru_status = 'Tidak Aktif'");
		return $hsl;
	}

	function ubah($kode){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_status = 'Aktif' WHERE guru_id= '$kode'");
		return $hsl;
		
		}

	function hapus_anggota($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	}