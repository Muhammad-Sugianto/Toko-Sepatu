<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_kategori');
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
                $this->form_validation->set_rules('nama_produk','Nama Produk', 'required', array(
                    'required'=>'%s Harus Diisi !!!')
            );
                $this->form_validation->set_rules('id_kategori','Kategori', 'required', array(
                'required'=>'%s Harus Diisi !!!')
            );
                $this->form_validation->set_rules('harga','Harga', 'required', array(
                'required'=>'%s Harus Diisi !!!')
            );
                $this->form_validation->set_rules('deskripsi','Deskripsi', 'required', array(
                'required'=>'%s Harus Diisi !!!')
            );

            
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path'] = './assets/gambar/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
                $config['max_size']     = '2000';
                $this->upload->initialize($config);
                $field_name = "gambar";
                if (!$this->upload->do_upload($field_name)) {
                    $data = array(
                        'title' => 'Produk Add',
                        // 'header' => 'Produk',
                        'kategori' => $this->m_kategori->get_all_data(),
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'produk/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend', $data, FALSE); 
                } else {
                    $upload_data  = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    $data = array(
                        'nama_produk' => $this->input->post('nama_produk'),
                        'id_kategori' => $this->input->post('id_kategori'),
                        'harga' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'gambar'    =>  $upload_data['uploads']['file_name'],
                );
                    $this->m_produk->add($data);
                    redirect('produk');

                }
                
            }
                $data = array(
                    'title' =>'Add Produk',
                    'kategori' => $this->m_kategori->get_all_data(),
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

