<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{

    public function total_produk()

    {
        return $this->db->get('tbl_produk')->num_rows();
        
    }

    public function total_kategori()

    {
        return $this->db->get('tbl_kategori')->num_rows();
        
    }
    
}