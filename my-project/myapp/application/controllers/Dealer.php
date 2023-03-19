<?php
    class Dealer extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Dealer_model');
            $this->load->library('form_validation');
            is_logged_in();
        }
        public function index(){
            $data['data'] = $this->Dealer_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_content');
            $this->load->view('dealer/index',$data);
            $this->load->view('templates/footer');
        }
        public function add(){
            $data['judul'] = "Tambah Dealer";
            $this->form_validation->set_rules('namaDealer','Dealer','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('dealer/add', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Dealer_model->tambahDataDealer();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('dealer');
            }
        }
        public function edit($id){
            $data['dealer'] = $this->Dealer_model->getDealerById($id);
            $data['judul'] = "Edit Dealer";
            $this->form_validation->set_rules('namaDealer','Dealer','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('dealer/edit', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Dealer_model->ubahDataDealer();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('dealer');
            }
        }
        public function delete($id){
            $this->Dealer_model->hapusDataDealer($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('dealer');
        }
    }
?>