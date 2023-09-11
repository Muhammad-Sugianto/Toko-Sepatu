<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('user_login');
    }
    
   
    public function index()
    {
        // Gunakan metode proteksi_halaman() untuk melindungi halaman
        $this->user_login->proteksi_halaman();

        $data = array(
            'title' =>'Dashboard',
            'total_produk' => $this->m_admin->total_produk(),
            'total_kategori' => $this->m_admin->total_kategori(),
            'isi' =>'v_admin',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }
}
