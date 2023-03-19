<?php
    class Category_model extends CI_Model{
        public function getAllData(){
            return $this->db->get('category')->result_array();
        }
        public function tambahDataCategory(){
            $data = array(
                "nama_kategori" => $this->input->post('namaCategory', true)
            );
            $this->db->insert('category',$data);
        }
        public function getCategoryById($id){
            return $this->db->get_where('category',['id' => $id])->row_array();
        }
        public function ubahDataCategory(){
            $data = array(
                "nama_kategori" => $this->input->post('namaCategory', true),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('category',$data); 
        }
        public function hapusDataCategory($id){
            $this->db->where('id',$id);
            $this->db->delete('category');
        }
    }
?>