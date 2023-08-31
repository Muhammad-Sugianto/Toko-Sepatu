<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function login_user()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));

    // ... (kode sebelumnya)

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_data = $this->user_login->login($username, $password);

            if ($user_data) {
                // Login berhasil, arahkan ke halaman yang sesuai
                if ($user_data['level'] == 'admin') {
                    redirect('admin/dashboard');  // Ganti 'admin/dashboard' dengan rute aktual ke dashboard admin
                } else if ($user_data['level'] == 'user') {
                    redirect('user/dashboard');   // Ganti 'user/dashboard' dengan rute aktual ke dashboard pengguna
                } else {
                    // Handle other user levels if needed
                    // Contoh: redirect('other/dashboard');
                }
            } else {
                // Login gagal, tampilkan pesan kesalahan atau arahkan kembali ke halaman login
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('auth/login_user');
            }
        }

        // ... (kode setelahnya)


        $data = array (
            'title' => 'Login User',
        );
        $this->load->view('v_login_user', $data);
    }
}
?>
