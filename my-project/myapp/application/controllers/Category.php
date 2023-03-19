<?php
    class Category extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Category_model');
            $this->load->library('form_validation');
            is_logged_in();
        }
        public function index(){
            $data['data'] = $this->Category_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_content');
            $this->load->view('category/index',$data);
            $this->load->view('templates/footer');
        }
        public function add(){
            $data['judul'] = "Tambah Category";
            $this->form_validation->set_rules('namaCategory','Category','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('category/add', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Category_model->tambahDataCategory();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('category');
            }
        }
        public function edit($id){
            $data['category'] = $this->Category_model->getCategoryById($id);
            $data['judul'] = "Edit Category";
            $this->form_validation->set_rules('namaCategory','Category','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('category/edit', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Category_model->ubahDataCategory();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('category');
            }
        }
        public function delete($id){
            $this->Category_model->hapusDataCategory($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('category');
        }
    }
?>