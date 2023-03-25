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
                "dealer_id" => $this->input->post('dealer', true),
                "user_id" => $this->session->userdata('id')
            );
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                # code...
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '20000';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    # code...
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }

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
                "user_id" => $this->session->userdata('id')
            );
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                # code...
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '20000';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    # code...
                    $old_image = $this->input->post('image_old');
                    if ($old_image != "default.jpg") {
                        # code...
                        unlink(FCPATH.'uploads/'.$old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('sparepart',$data); 
        }
        
        public function hapusDataSparepart($id){
            $old_image = $this->db->get_where('sparepart',['id' => $id])->row_array();
            unlink(FCPATH.'uploads/'.$old_image['image']);
            $this->db->where('id',$id);
            $this->db->delete('sparepart');
        }
    }
?>