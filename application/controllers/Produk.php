<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' =>'Produk',
            'produk' => $this->m_produk->get_all_data(),
            'isi' =>'produk/v_produk',
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

            // Add a new item
            public function add()
            {
                $data = array(
                    'title' =>'Add Produk',
                    'isi' =>'produk/v_add',
                
                );
                $this->load->view('layout/v_wrapper_backend',$data, FALSE);
                
            }

        
            // //Update one item
            // public function edit( $id_kategori = NULL )
            // {
            //     $data = array(
            //         'id_kategori' => $id_kategori,
            //         'nama_kategori' => $this->input->post('nama_kategori'),
            //     );
            //     $this->m_kategori->edit($data);
            //     $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
            //     redirect('kategori');
            // }

            // //Delete one item
            // public function delete( $id_kategori = NULL )
            // {
            //     $data = array('id_kategori' => $id_kategori);
            //     $this->m_kategori->delete($data);
            //     $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
            //     redirect('kategori');
            // }
            
}

/* End of file Kategori.php */

