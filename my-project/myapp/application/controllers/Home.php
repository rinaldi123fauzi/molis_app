<?php
    class Home extends CI_Controller{
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/menubar_homepage');
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        }
    }
?>