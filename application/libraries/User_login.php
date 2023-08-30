<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login {
    protected $ci;

    public function __construct() {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
        $this->ci->load->library('session');
    }

    public function login($username, $password) {
        $cek = $this->ci->m_auth->login_user($username, $password);
        if ($cek) {
            // Store user data in session
            $this->ci->session->set_userdata('username', $username);
            // Redirect to the appropriate page
            redirect('admin'); // Change 'admin' to the correct page
        } else {
            $this->ci->session->set_flashdata('error', 'Username Atau Password Salah!!');
            redirect('auth/login_user');
        }
    }

    // ... (other methods)
}
?>
