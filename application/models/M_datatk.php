<?php
class M_datatk extends CI_Model{

	function get_all_datatk(){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp FROM tbl_datatk ");
		return $hsl;
	}
	function simpan_pengumuman($nama, $alamat, $no_telp, $npsn, $nama_yayasan, $akta, $ketua_yayasan, $bentuk, $kegiatan, $awal_berdiri, $status, $npwp){
		$hsl=$this->db->query("INSERT INTO tbl_datatk(nama,alamat,no_telp,npsn,nama_yayasan,akta,ketua_yayasan,bentuk,kegiatan,awal_berdiri,status,npwp ) VALUES ('$nama', '$alamat', '$no_telp', '$npsn', '$nama_yayasan', '$akta', '$ketua_yayasan', '$bentuk', '$kegiatan', '$awal_berdiri', '$status', '$npwp')");
		return $hsl;
	}
	function update_pengumuman($kode,$nama,$alamat,$no_telp,$npsn,$nama_yayasan,$akta,$ketua_yayasan,$bentuk,$kegiatan,$awal_berdiri,$status,$npwp){
		$hsl=$this->db->query("UPDATE tbl_datatk SET nama='$nama',alamat='$alamat',no_telp='$no_telp',npsn='$npsn',nama_yayasan='$nama_yayasan',akta='$akta',ketua_yayasan='$ketua_yayasan',bentuk='$bentuk',kegiatan='$kegiatan',awal_berdiri='$awal_berdiri',status='$status',npwp='$npwp' where id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_datatk WHERE id='$kode'");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp FROM tbl_datatk ");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp FROM tbl_datatk  ");
		return $hsl;
	}
	function siswa(){
		$hsl=$this->db->query("SELECT siswa_id,siswa_nis,siswa_nama,siswa_jenkel,siswa_photo,ttl,jabatan,pendidikan,agama,mulai_bekerja,mulai_diangkat,pangkat,alamat FROM tbl_siswa");
		return $hsl;
	}
	function kepalatk(){
		$hsl=$this->db->query("SELECT id, nama, nip, ttl, jk, agama,pendidikan, mulai_bekerja, mulai_diangkat, masa_kerja, pangkat, golongan, jurusan, alamat, photo FROM tbl_kepalatk ");
		return $hsl;
	}

}
