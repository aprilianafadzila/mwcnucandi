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

       public function get_berita_populer(){

        $this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
        $this->db->from('tbl_blog');
        $this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
        $this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
        $this->db->order_by('tbl_blog.tulisan_views', 'desc');
        $this->db->limit(5);

        return $this->db->get()->result();

       }

       public function get_tag(){

        $this->db->select('tbl_kategori.*');
        $this->db->from('tbl_kategori');

        return $this->db->get()->result();

       }

       public function get_blog_all(){

        $this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
        $this->db->from('tbl_blog');
        $this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
        $this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
        $this->db->order_by('tbl_blog.tulisan_tanggal', 'desc');

        return $this->db->get()->result();

       }

       public function get_data_banner(){

        $where = array(

                        'tbl_jenis_kategori.id' => 1,
                        'tbl_ranting.id' => 5

                    );

        $this->db->select('tbl_blog.*, tbl_jenis_kategori.id as id_kategori ,tbl_jenis_kategori.nama as kategori_nama, tbl_ranting.nama as nama_ranting');
        $this->db->from('tbl_blog');
        $this->db->join('tbl_jenis_kategori','tbl_blog.id_jenis_kategori = tbl_jenis_kategori.id','left');
        $this->db->join('tbl_ranting','tbl_blog.id_ranting = tbl_ranting.id','left');
        $this->db->order_by('tbl_blog.tulisan_tanggal', 'desc');

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