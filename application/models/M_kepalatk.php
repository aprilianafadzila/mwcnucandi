<?php
class M_kepalatk extends CI_Model{

	function get_all_datatk(){
		$hsl=$this->db->query("SELECT id, nama, nip, ttl, jk, agama,pendidikan, mulai_bekerja, mulai_diangkat, masa_kerja, pangkat, golongan, jurusan, alamat,photo FROM tbl_kepalatk ");
		return $hsl;
	}
	function simpan_pengumuman($nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat, $photo){
		$hsl=$this->db->query("INSERT INTO tbl_kepalatk(nama, nip, ttl, jk, agama,pendidikan, mulai_bekerja, mulai_diangkat, masa_kerja, pangkat, golongan, jurusan, alamat, photo ) VALUES ('$nama', '$nip', '$ttl', '$jk', '$agama', '$pendidikan', '$mulai_bekerja', '$mulai_diangkat', '$masa_kerja', '$pangkat', '$golongan', '$jurusan', '$alamat', $photo)");
		return $hsl;
	}
	function simpan_pengumuman_tanpa_img($nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat){
		$hsl=$this->db->query("INSERT INTO tbl_kepalatk (nama, nip, ttl, jk, agama,pendidikan, mulai_bekerja, mulai_diangkat, masa_kerja, pangkat, golongan, jurusan, alamat) VALUES ('$nama', '$nip', '$ttl', '$jk', '$agama', '$pendidikan', '$mulai_bekerja', '$mulai_diangkat', '$masa_kerja', '$pangkat', '$golongan', '$jurusan', '$alamat')");
		return $hsl;
	}
	function update_pengumuman($kode,$nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat,$photo){
		$hsl=$this->db->query("UPDATE tbl_kepalatk SET nama='$nama',nip='$nip',ttl='$ttl',jk='$jk',agama='$agama',pendidikan='$pendidikan',mulai_bekerja='$mulai_bekerja',mulai_diangkat='$mulai_diangkat',masa_kerja='$masa_kerja',pangkat='$pangkat',golongan='$golongan',jurusan='$jurusan',alamat='$alamat',photo='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_pengumuman_tanpa_img($kode,$nama, $nip, $ttl, $jk, $agama, $pendidikan, $mulai_bekerja, $mulai_diangkat, $masa_kerja, $pangkat, $golongan, $jurusan, $alamat){
		$hsl=$this->db->query("UPDATE tbl_kepalatk SET nama='$nama', nip='$nip', ttl='$ttl', jk='$jk', agama='$agama', pendidikan='$pendidikan', mulai_bekerja='$mulai_bekerja', mulai_diangkat='$mulai_diangkat', masa_kerja='$masa_kerja', pangkat='$pangkat', golongan='$golongan', jurusan='$jurusan', alamat='$alamat' WHERE id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kepalatk WHERE id='$kode'");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT id, nama, nip, ttl, jk, agama,pendidikan, mulai_bekerja, mulai_diangkat, masa_kerja, pangkat, golongan, jurusan, alamat, photo FROM tbl_kepalatk ");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT id, nama, alamat, no_telp, npsn, nama_yayasan, akta, ketua_yayasan, bentuk, kegiatan, awal_berdiri, status, npwp) FROM tbl_datatk  ");
		return $hsl;
	}


}
