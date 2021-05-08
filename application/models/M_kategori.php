<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("SELECT * from tbl_kategori");
		return $hsl;
	}
	function simpan_kategori($kategori){
		$hsl=$this->db->query("insert into tbl_kategori(kategori_nama) values('$kategori')");
		return $hsl;
	}
	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("update tbl_kategori set kategori_nama='$kategori' where kategori_id='$kode'");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("delete from tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("select * from tbl_kategori where kategori_id='$kategori_id'");
		return $hsl;
	}

	function get_kategori(){
        $hasil=$this->db->query("SELECT * FROM tbl_jenis_kategori");
        return $hasil;
    }

    function get_kategorii(){
        $hasil=$this->db->query("SELECT * FROM tbl_jenis_kategori");
        return $hasil->result();
    }

    function get_ranting(){
        $hasil=$this->db->query("SELECT * FROM tbl_ranting");
        return $hasil->result();
    }
 
    function get_subkategori($id){
        $hasil=$this->db->query("SELECT * FROM tbl_ranting WHERE id_jenis_kategori='$id'");
        return $hasil->result();
    }

    function get_sub_category($category_id){
		$query = $this->db->get_where('tbl_ranting', array('id_jenis_kategori' => $category_id));
		return $query;
	}

	function get_product_by_id($product_id){
		$query = $this->db->get_where('tbl_blog', array('tulisan_id' =>  $product_id));
		return $query;
	}

}