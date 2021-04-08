<?php
class M_datayayasan extends CI_Model{

	function get_all_datatk(){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp, email FROM tbl_yayasan ");
		return $hsl;
	}
	function simpan_pengumuman($nama, $alamat, $no_telp, $npsn, $nama_yayasan, $akta, $ketua_yayasan, $bentuk, $kegiatan, $awal_berdiri, $status, $npwp, $email){
		$hsl=$this->db->query("INSERT INTO tbl_yayasan(nama,alamat,no_telp,npsn,nama_yayasan,akta,ketua_yayasan,bentuk,kegiatan,awal_berdiri,status,npwp,email ) VALUES ('$nama', '$alamat', '$no_telp', '$npsn', '$nama_yayasan', '$akta', '$ketua_yayasan', '$bentuk', '$kegiatan', '$awal_berdiri', '$status', '$npwp', 'email')");
		return $hsl;
	}
	function update_pengumuman($kode,$nama,$alamat,$no_telp,$npsn,$nama_yayasan,$akta,$ketua_yayasan,$bentuk,$kegiatan,$awal_berdiri,$status,$npwp,$email){
		$hsl=$this->db->query("UPDATE tbl_yayasan SET nama='$nama',alamat='$alamat',no_telp='$no_telp',npsn='$npsn',nama_yayasan='$nama_yayasan',akta='$akta',ketua_yayasan='$ketua_yayasan',bentuk='$bentuk',kegiatan='$kegiatan',awal_berdiri='$awal_berdiri',status='$status',npwp='$npwp', email='$email' where id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_yayasan WHERE id='$kode'");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp, email FROM tbl_yayasan ");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp, email FROM tbl_yayasan  ");
		return $hsl;
	}


}
