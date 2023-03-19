<?php
    class Sparepart_model extends CI_Model{
        public function getAllData(){
            $this->db->select('*');
            $this->db->from('sparepart');
            $this->db->join('user', 'user.id = sparepart.user_id', 'left');
            $this->db->join('category', 'category.id = sparepart.category_id');
            $this->db->join('dealer', 'dealer.id = sparepart.dealer_id');
            return $this->db->get()->result_array();
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