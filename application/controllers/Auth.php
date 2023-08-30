<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_auth'); // Load the model
        $this->load->library('session');
    }

    public function login_user() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            // Call the login function from your model
            $this->user_login->login($username, $password);
        }

        $data = array (
            'title' => 'Login User',
        );
        $this->load->view('v_login_user', $data);
    }
}
?>
