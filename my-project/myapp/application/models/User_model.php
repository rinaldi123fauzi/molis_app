<?php
    class User_model extends CI_Model{
        public function getAllData(){
            $this->db->select('user.id AS userid, role_user.*, user.*, dealer.*');
            $this->db->from('user');
            $this->db->join('role_user', 'role_user.id = user.role_id', 'left');
            $this->db->join('dealer', 'dealer.id = user.dealer_id', 'left');
            return $this->db->get()->result_array();
        }

        public function tambahDataUser(){
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'dealer_id' => $this->input->post('dealer'),
                'role_id' => $this->input->post('role'),
                'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT)
            );
            $this->db->insert('user',$data);
        }

        public function getUserById($id){
            return $this->db->get_where('user',['id' => $id])->row_array();
        }

        public function ubahDataUser(){
            if ($this->input->post('password1')) {
                # code...
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'dealer_id' => $this->input->post('dealer'),
                    'role_id' => $this->input->post('role'),
                    'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT)
                );
            }else{
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'dealer_id' => $this->input->post('dealer'),
                    'role_id' => $this->input->post('role')
                );
            }
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('user',$data);
        }
        
        public function hapusDataUser($id){
            $this->db->where('id',$id);
            $this->db->delete('user');
        }
    }
?>