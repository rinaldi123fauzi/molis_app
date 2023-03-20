<?php
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('User_model');
            $this->load->model('Role_model');
            $this->load->model('Dealer_model');
            $this->load->library('form_validation');
            is_logged_in();
        }

        public function index(){
            $data['data'] = $this->User_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_content');
            $this->load->view('user/index',$data);
            $this->load->view('templates/footer');
        }

        public function add(){
            $data['judul'] = "Tambah User";
            $data['role'] = $this->Role_model->getAllData();
            $data['dealer'] = $this->Dealer_model->getAllData();
            $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('email','Email','required|trim|valid_email');
            $this->form_validation->set_rules('role','Category','required');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('user/add', $data);
                $this->load->view('templates/footer');
            }else{
                $this->User_model->tambahDataUser();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('user');
            }
        }

        public function edit($id){
            $data['judul'] = "Tambah User";
            $data['user'] = $this->User_model->getUserById($id);
            $data['role'] = $this->Role_model->getAllData();
            $data['dealer'] = $this->Dealer_model->getAllData();
            $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('email','Email','required|trim|valid_email');
            $this->form_validation->set_rules('role','Category','required');
            $this->form_validation->set_rules('password1', 'Password', 'trim|min_length[3]|matches[password2]');
            $this->form_validation->set_rules('password2', 'Password', 'trim|matches[password1]');

            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('user/edit', $data);
                $this->load->view('templates/footer');
            }else{
                $this->User_model->ubahDataUser();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('user');
            }
        }
        
        public function delete($id){
            $this->User_model->hapusDataUser($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('user');
        }
    }
?>