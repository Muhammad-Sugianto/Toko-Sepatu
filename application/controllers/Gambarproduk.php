<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gambarproduk extends CI_Controller 
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gambarproduk');
        $this->load->model('m_produk');
        
    }
    

    public function index()
    {
        $data = array(
            'title' =>'Gambar Produk',
            'gambarproduk' => $this->m_gambarproduk->get_all_data(),
            'isi' =>'gambarproduk/v_index',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }



    public function add($id_produk) 
    {
        $data = array(
            'title' =>'Add Gambar Produk',
            'produk' => $this->m_produk->get_data($id_produk),
            'gambar' => $this->m_gambarproduk->get_gambar($id_produk),
            'isi' =>'gambarproduk/v_add',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

}