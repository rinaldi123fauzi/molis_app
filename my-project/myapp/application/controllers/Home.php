<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Sparepart_model');
            $this->load->model('Category_model');
        }
        

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_homepage');
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        }

        public function sparepart(){
            if ($this->input->get('deskripsi_produk')) {
                # code...
                $data['spareparts'] = $this->Sparepart_model->getDeskripsiData($this->input->get('deskripsi_produk'));    
            }else if ($this->input->get('kategori')) {
                # code...
                $data['spareparts'] = $this->Sparepart_model->getSpecificData($this->input->get('kategori'));    
            }else{
                $data['spareparts'] = $this->Sparepart_model->getAllData();
            }
            $data['categories'] = $this->Category_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_content');
            $this->load->view('home/sparepart',$data);
            $this->load->view('templates/footer');
        }

        public function sparepart_dashboard(){
            if ($this->input->get('deskripsi_produk')) {
                # code...
                $data['spareparts'] = $this->Sparepart_model->getDeskripsiData($this->input->get('deskripsi_produk'));    
            }else if ($this->input->get('kategori')) {
                # code...
                $data['spareparts'] = $this->Sparepart_model->getSpecificData($this->input->get('kategori'));    
            }else{
                $data['spareparts'] = $this->Sparepart_model->getAllData();
            }
            $data['categories'] = $this->Category_model->getAllData();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_homepage');
            $this->load->view('home/sparepart',$data);
            $this->load->view('templates/footer');
        }
    }
?>