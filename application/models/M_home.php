<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model 
{

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');    
        $this->db->order_by('tbl_produk.id_produk', 'desc');
        return $this->db->get()->result();
    }

}