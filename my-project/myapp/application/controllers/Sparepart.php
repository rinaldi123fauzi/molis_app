<?php
    class Sparepart extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Sparepart_model');
            $this->load->model('Dealer_model');
            $this->load->model('Category_model');
            $this->load->library('form_validation');
            is_logged_in();
        }
        public function index(){
            $data['data'] = $this->Sparepart_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_content');
            $this->load->view('sparepart/index',$data);
            $this->load->view('templates/footer');
        }
        public function add(){
            $data['judul'] = "Tambah Sparepart";
            $data['category'] = $this->Category_model->getAllData();
            $data['dealer'] = $this->Dealer_model->getAllData();
            $this->form_validation->set_rules('namaSparepart','Sparepart','required');
            $this->form_validation->set_rules('category','Category','required');
            $this->form_validation->set_rules('harga','Harga','required');
            $this->form_validation->set_rules('dealer','Dealer','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('sparepart/add', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Sparepart_model->tambahDataSparepart();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('sparepart');
            }
        }
        public function edit($id){
            $data['sparepart'] = $this->Sparepart_model->getSparepartById($id);
            $data['category'] = $this->Category_model->getAllData();
            $data['dealer'] = $this->Dealer_model->getAllData();
            $data['judul'] = "Edit Sparepart";
            $this->form_validation->set_rules('namaSparepart','Sparepart','required');
            $this->form_validation->set_rules('harga','Harga','required');
            $this->form_validation->set_rules('category','Category','required');
            $this->form_validation->set_rules('dealer','Dealer','required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('templates/header');
                $this->load->view('templates/menubar_content');
                $this->load->view('sparepart/edit', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Sparepart_model->ubahDataSparepart();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('sparepart');
            }
        }
        public function delete($id){
            $this->Sparepart_model->hapusDataSparepart($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('sparepart');
        }
    }
?>