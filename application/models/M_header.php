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

    public function get_jenis_kategori(){

        $this->db->select('*');
        $this->db->from('tbl_jenis_kategori');
        return $this->db->get()->result();

       }

    public function get_jenis_kategori_id($id){

        $where = array('id' => $id);

        $this->db->select('*');
        $this->db->from('tbl_jenis_kategori');
        return $this->db->where($where)->get()->result();

       }

    //get all parent categories

    public function get_all_parent_categories()

    {

        $this->db->select('tbl_ranting.*, tbl_jenis_kategori.nama as subcategori');
        $this->db->from('tbl_ranting');
        $this->db->join('tbl_jenis_kategori','tbl_ranting.id_jenis_kategori = tbl_jenis_kategori.id','left');
        $this->db->group_by('tbl_jenis_kategori.id');
        return $this->db->get()->result();


    }

    //get all sub categories

    public function get_subcategories_by_parent_id($id)

    {
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