<?php
    class Role_model extends CI_Model{
        public function getAllData(){
            return $this->db->get('role_user')->result_array();
        }
        // public function tambahDataSparepart(){
        //     $data = array(
        //         "nama_sparepart" => $this->input->post('namaSparepart', true),
        //         "harga" => $this->input->post('harga', true),
        //         "category_id" => $this->input->post('category', true),
        //         "dealer_id" => $this->input->post('dealer', true)
        //     );
        //     $this->db->insert('sparepart',$data);
        // }
        // public function getSparepartById($id){
        //     return $this->db->get_where('sparepart',['id' => $id])->row_array();
        // }
        // public function ubahDataSparepart(){
        //     $data = array(
        //         "nama_sparepart" => $this->input->post('namaSparepart', true),
        //         "harga" => $this->input->post('harga', true),
        //         "category_id" => $this->input->post('category', true),
        //         "dealer_id" => $this->input->post('dealer', true),
        //     );
        //     $this->db->where('id',$this->input->post('id'));
        //     $this->db->update('sparepart',$data); 
        // }
        // public function hapusDataSparepart($id){
        //     $this->db->where('id',$id);
        //     $this->db->delete('sparepart');
        // }
    }
?>