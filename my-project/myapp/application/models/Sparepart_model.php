<?php
    class Sparepart_model extends CI_Model{
        public function getAllData(){
            $this->db->select('sparepart.id AS sparepartid, sparepart.*, category.*, dealer.*, user.*');
            $this->db->from('sparepart');
            $this->db->join('user', 'user.id = sparepart.user_id', 'left');
            $this->db->join('category', 'category.id = sparepart.category_id');
            $this->db->join('dealer', 'dealer.id = sparepart.dealer_id');
            return $this->db->get()->result_array();
        }
        public function tambahDataSparepart(){
            $data = array(
                "nama_sparepart" => $this->input->post('namaSparepart', true),
                "harga" => $this->input->post('harga', true),
                "category_id" => $this->input->post('category', true),
                "dealer_id" => $this->input->post('dealer', true)
            );
            $this->db->insert('sparepart',$data);
        }
        public function getSparepartById($id){
            return $this->db->get_where('sparepart',['id' => $id])->row_array();
        }
        public function ubahDataSparepart(){
            $data = array(
                "nama_sparepart" => $this->input->post('namaSparepart', true),
                "harga" => $this->input->post('harga', true),
                "category_id" => $this->input->post('category', true),
                "dealer_id" => $this->input->post('dealer', true),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('sparepart',$data); 
        }
        public function hapusDataSparepart($id){
            $this->db->where('id',$id);
            $this->db->delete('sparepart');
        }
    }
?>