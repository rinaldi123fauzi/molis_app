<?php

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = "Login";
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_homepage');
            $this->load->view('auth/index',$data);
            $this->load->view('templates/footer');
        }else{
            $this->_login();
        }
    }
    private function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username'=>$username])->row_array();

        if ($user) {
            # code...
            if (password_verify($password, $user['password'])) {
                # code...
                $data = array(
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'dealer_id' => $user['dealer_id'],

                );
                $this->session->set_userdata($data);
                redirect('user');
            }else{
                $this->session->set_flashdata('flash', 'User / password salah');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('flash', 'User tidak ditemukan');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        redirect('auth');
    }
}
?>