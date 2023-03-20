<?php
    class Dealer_model extends CI_Model{
        public function getAllData(){
            return $this->db->get('dealer')->result_array();
        }
        
        public function tambahDataDealer(){
            $data = array(
                "nama_dealer" => $this->input->post('namaDealer', true)
            );
            $this->db->insert('dealer',$data);
        }

        public function getDealerById($id){
            return $this->db->get_where('dealer',['id' => $id])->row_array();
        }

        public function ubahDataDealer(){
            $data = array(
                "nama_dealer" => $this->input->post('namaDealer', true),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('dealer',$data); 
        }

        public function hapusDataDealer($id){
            $this->db->where('id',$id);
            $this->db->delete('dealer');
        }
    }
?>