<?php
class M_header extends CI_Model{

	public function get_data_kanal($id){

		// id kanal = 1

        $where = array(

                        'id_jenis_kategori' => $id

                    );

        $this->db->select('tbl_ranting.*, tbl_jenis_kategori.nama as subcategori');
        $this->db->from('tbl_ranting');
        $this->db->join('tbl_jenis_kategori','tbl_ranting.id_jenis_kategori = tbl_jenis_kategori.id','left');
        $this->db->group_by('tbl_ranting.id');
        return $this->db->where($where)->get()->result();

       }

}