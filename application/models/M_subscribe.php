<?php
class M_subscribe extends CI_Model{

	function kirim_pesan($email){
		$hsl=$this->db->query("INSERT INTO tbl_subscribe(email) VALUES ('$email')");
		return $hsl;
	}

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT * FROM tbl_subscribe ORDER BY id_subscribe DESC");
		return $hsl;
	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM tbl_subscribe WHERE id_subscribe='$kode'");
		return $hsl;
	}

}
