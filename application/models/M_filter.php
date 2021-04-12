<?php
class M_filter extends CI_Model{

	
	public function get_politik()
    {
        

        $this->db->select('*');

        $this->db->from('tbl_ansor');
        //$this->db->join('tbl_ansor', 'tbl_ansor.tulisan_kategori_nama = tbl_kategori.kategori_nama','left');
        $this->db->join('tbl_kategori', 'tbl_kategori.kategori_id = tbl_ansor.tulisan_kategori_id','left');
        $this->db->join('tbl_aswaja', 'tbl_aswaja.tulisan_kategori_id = tbl_kategori.kategori_id','right');
        //$this->db->join('tbl_fatayat', 'tbl_fatayat.tulisan_kategori_id = tbl_kategori.kategori_id','left');
        $this->db->where("(tbl_kategori.kategori_nama='politik')", NULL, FALSE);

        $query = $this->db->get();

    
        return $query->result();
        
    }

}